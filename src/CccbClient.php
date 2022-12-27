<?php

namespace Webmasterskaya\Soap\CCCB;

use DateTimeInterface;
use Soap\Engine\Transport;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Webmasterskaya\Soap\Base\ClientAbstract;
use Webmasterskaya\Soap\Base\Exception\SoapException;
use Webmasterskaya\Soap\Base\Soap\Metadata\MetadataOptions;
use Webmasterskaya\Soap\Base\Type\RequestInterface;
use Webmasterskaya\Soap\Base\Type\ResultInterface;
use Webmasterskaya\Soap\CCCB\Type\Address;
use Webmasterskaya\Soap\CCCB\Type\AutomatizationInfoResponse;
use Webmasterskaya\Soap\CCCB\Type\ChangeIDResponse;

class CccbClient extends ClientAbstract
{
    /**
     * @var string Идентификатор договора контрагента СпецСвязи
     */
    protected $contractGuid;

    /**
     * @var string Идентификатор услуги СпецСвязи
     */
    protected $serviceGuid;

    /**
     * Возвращает идентификатор услуги СпецСвязи
     *
     * @return string
     */
    public function getServiceGuid(): string
    {
        return $this->serviceGuid;
    }

    /**
     * Возвращает идентификатор договора контрагента СпецСвязи
     *
     * @return string
     */
    public function getContractGuid(): string
    {
        return $this->contractGuid;
    }

    /**
     * @param ExtSoapOptions $options
     * @param Transport|null $transport
     * @param MetadataOptions|null $metadataOptions
     */
    public function __construct(
        ExtSoapOptions $options,
        ?Transport $transport = null,
        ?MetadataOptions $metadataOptions = null
    ) {
        $soapOptions = $options->getOptions();

        // Обработка параметров специфических для реализации библиотеки
        $this->resolveOptions($soapOptions);

        $nextOptions = new ExtSoapOptions($options->getWsdl(), $soapOptions);

        $nextOptions
            ->withClassMap($options->getClassMap())
            ->withTypemap($options->getTypeMap());

        parent::__construct($nextOptions, $transport, $metadataOptions);
    }

    /**
     * Разрешает значения полей "Идентификатор услуги СпецСвязи" и "Идентификатор договора контрагента СпецСвязи".
     *
     * @param array $options
     * @return void
     */
    protected function resolveOptions(array &$options)
    {
        $clientOptions = [];

        foreach ($options as $key => $value) {
            switch (strtolower($key)) {
                case 'serviceguid':
                case 'service_guid':
                    $clientOptions['service_guid'] = $value;
                    unset($options[$key]);
                    break;

                case 'contractguid':
                case 'contract_guid':
                    $clientOptions['contract_guid'] = $value;
                    unset($options[$key]);
                    break;
            }
        }

        $clientOptions = $this->getResolver()->resolve($clientOptions);

        $this->serviceGuid = $clientOptions['service_guid'];
        $this->contractGuid = $clientOptions['contract_guid'];
    }

    /**
     * Возвращает разрешитель значений полей, специфических для реализации библиотеки
     *
     * @return OptionsResolver
     */
    protected function getResolver(): OptionsResolver
    {
        static $resolver;
        if ($resolver) {
            return $resolver;
        }

        $resolver = new OptionsResolver();

        $resolver->setRequired(['contract_guid', 'service_guid']);
        $resolver->setAllowedTypes('contract_guid', ['string']);
        $resolver->setAllowedTypes('service_guid', ['string']);

        return $resolver;
    }

    /**
     * Пробный вызов веб-сервиса
     *
     * @return ResultInterface|Type\ProbResponse
     * @throws SoapException
     * @see Type\Prob
     */
    public function prob(): Type\ProbResponse
    {
        return $this->call(
            'Prob',
            new Type\Prob());
    }

    /**
     * Метод создаёт новую заявку на отправление в ЕИС и возвращает параметры созданной заявки
     *
     * @param Type\Application $application Заявка на отправление
     * @param string|null $correctionApplication GUID заявки, если нужно скорректировать уже существующую заявку
     *
     * @return ResultInterface|Type\NewApplicationResponse
     *
     * @throws SoapException
     *
     * @see Type\NewApplication
     */
    public function newApplication(
        Type\Application $application,
        string $correctionApplication = null
    ): Type\NewApplicationResponse {
        return $this->call(
            'NewApplication',
            new Type\NewApplication($application
                ->withContractGUID($this->getContractGUID())
                ->withServiceGUID($this->getServiceGUID()),
                $correctionApplication));
    }

    /**
     * Метод возвращает информацию об отправлении с указанным приемным номером.
     *
     * @param string $ParcelNumber Приемный номер отправления
     *
     * @return ResultInterface|Type\GetParcelInfoResponse
     *
     * @throws SoapException
     *
     * @see Type\GetParcelInfo
     */
    public function getParcelInfo(string $ParcelNumber): Type\GetParcelInfoResponse
    {
        return $this->call(
            'GetParcelInfo',
            new Type\GetParcelInfo($this->getContractGuid(), $ParcelNumber));
    }

    /**
     * ??? Регистрация пользователя ЛК Спецсвязи
     *
     * @return ResultInterface|Type\RegistrationResponse
     * @throws SoapException
     */
    public function registration(
        string $INN = null,
        string $KPP = null,
        string $contractNumber = null,
        string $login = null,
        string $eMail = null
    ): Type\RegistrationResponse {
        return $this->call(
            'Registration',
            new Type\Registration($INN, $KPP, $contractNumber, $login, $eMail));
    }

    /**
     * Метод возвращает рассчитанную стоимость доставки отправления
     *
     * @param Type\CostingOptions $CostingOptions Параметры расчета
     *
     * @return ResultInterface|Type\GetCostResponse
     *
     * @throws SoapException
     * @see \Webmasterskaya\Soap\CCCB\Type\GetCost
     */
    public function getCost(Type\CostingOptions $CostingOptions): Type\GetCostResponse
    {
        return $this->call(
            'GetCost',
            new Type\GetCost($CostingOptions
                ->withContractGUID($this->getContractGUID())));
    }

    /**
     * Метод возвращает информацию о принятых отправлениях договора за последние 3 месяца.
     *
     * @return ResultInterface|Type\DetailedAccountReportResponse
     *
     * @throws SoapException
     * @see \Webmasterskaya\Soap\CCCB\Type\DetailedAccountReport
     */
    public function detailedAccountReport(): Type\DetailedAccountReportResponse
    {
        return $this->call(
            'DetailedAccountReport',
            new Type\DetailedAccountReport($this->getContractGuid()));
    }

    /**
     * Метод отменяет заявку на отправление в ЕИС
     *
     * @param string $ApplicationGUID Уникальный идентификатор документа заявки
     *
     * @return ResultInterface|Type\CancelApplicationResponse
     *
     * @throws SoapException
     * @see \Webmasterskaya\Soap\CCCB\Type\CancelApplication
     */
    public function cancelApplication(string $ApplicationGUID): Type\CancelApplicationResponse
    {
        return $this->call(
            'CancelApplication',
            new Type\CancelApplication($ApplicationGUID));
    }

    /**
     * Метод возвращает информацию об УСС, который обслуживает адрес, переданный в качестве входного параметра.
     *
     * @param Address $AddressInfo Адрес для проверки
     *
     * @return ResultInterface|AutomatizationInfoResponse
     *
     * @throws SoapException
     *
     * @see \Webmasterskaya\Soap\CCCB\Type\AutomatizationInfo
     */
    public function automatizationInfo(Type\Address $AddressInfo): Type\AutomatizationInfoResponse
    {
        return $this->call(
            'AutomatizationInfo',
            new Type\AutomatizationInfo($AddressInfo));
    }

    /**
     * Метод возвращает характеристики отправления и всю историю событий по этому отправлению.
     *
     * @param string $ParcelNumber Номер отправления, для которого запрашивается информация
     *
     * @return ResultInterface|Type\GetParcelHistoryResponse
     *
     * @throws SoapException
     * @see \Webmasterskaya\Soap\CCCB\Type\GetParcelHistory
     */
    public function getParcelHistory(string $ParcelNumber): Type\GetParcelHistoryResponse
    {
        return $this->call(
            'GetParcelHistory',
            new Type\GetParcelHistory($ParcelNumber, $this->getContractGuid()));
    }

    /**
     * Метод записывает в базу ЕИС характеристики отправления.
     *
     * @param string $ParcelNumber Приемный номер отправления
     * @param Type\Parcel $ParcelCharacteristics Характеристики отправления
     *
     * @return ResultInterface|Type\WriteParcelCharacteristicsResponse
     *
     * @throws SoapException
     * @see \Webmasterskaya\Soap\CCCB\Type\WriteParcelCharacteristics
     */
    public function writeParcelCharacteristics(
        string $ParcelNumber,
        Type\Parcel $ParcelCharacteristics
    ): Type\WriteParcelCharacteristicsResponse {
        return $this->call(
            'WriteParcelCharacteristics',
            new Type\WriteParcelCharacteristics($this->getContractGuid(), $ParcelNumber, $ParcelCharacteristics));
    }

    /**
     * Метод возвращает информацию о принятых за последние 3 месяца отправлениях по договору.
     *
     * @return ResultInterface|Type\GetContractInfoResponse
     *
     * @throws SoapException
     * @see \Webmasterskaya\Soap\CCCB\Type\GetContractInfo
     */
    public function getContractInfo(): Type\GetContractInfoResponse
    {
        return $this->call(
            'GetContractInfo',
            new Type\GetContractInfo($this->getContractGuid()));
    }

    /**
     * Метод возвращает информацию по отправлениям из реестра Ф1.
     *
     * @param string $Number Номер реестра Ф1
     * @param DateTimeInterface $Date
     *
     * @return ResultInterface|Type\GetF1InfoResponse
     *
     * @throws SoapException
     * @see \Webmasterskaya\Soap\CCCB\Type\GetF1Info
     */
    public function getF1Info(string $Number, DateTimeInterface $Date): Type\GetF1InfoResponse
    {
        return $this->call(
            'GetF1Info',
            new Type\GetF1Info($Number, $Date, $this->getContractGuid()));
    }

    /**
     * ???
     *
     * @param string|null $Login
     * @param string|null $Password
     * @return ResultInterface|ChangeIDResponse
     */
    public function changeID(
        string $Login = null,
        string $Password = null
    ): Type\ChangeIDResponse {
        return $this->call('ChangeID', new Type\ChangeID($this->getContractGUID(), $Login, $Password));
    }


    /**
     * ???
     *
     * @param RequestInterface|Type\AccountReport $parameters
     * @return ResultInterface|Type\AccountReportResponse
     * @throws SoapException
     */
    public function accountReport(Type\AccountReport $parameters): Type\AccountReportResponse
    {
        return $this->call('AccountReport', $parameters);
    }


    /**
     * ???
     *
     * @param RequestInterface|Type\GetIDParcel $parameters
     * @return ResultInterface|Type\GetIDParcelResponse
     * @throws SoapException
     */
    public function getIDParcel(Type\GetIDParcel $parameters): Type\GetIDParcelResponse
    {
        return $this->call('GetIDParcel', $parameters);
    }


    /**
     * ???
     *
     * @param RequestInterface|Type\GetReportOnContract $parameters
     * @return ResultInterface|Type\GetReportOnContractResponse
     * @throws SoapException
     */
    public function getReportOnContract(Type\GetReportOnContract $parameters
    ): Type\GetReportOnContractResponse {
        return $this->call('GetReportOnContract', $parameters);
    }

    /**
     * ???
     *
     * @param RequestInterface|Type\GetAccount $parameters
     * @return ResultInterface|Type\GetAccountResponse
     * @throws SoapException
     */
    public function getAccount(Type\GetAccount $parameters): Type\GetAccountResponse
    {
        return $this->call('GetAccount', $parameters);
    }

    /**
     * ???
     *
     * @param RequestInterface|Type\IsApplicationInControlList $parameters
     * @return ResultInterface|Type\IsApplicationInControlListResponse
     * @throws SoapException
     */
    public function isApplicationInControlList(Type\IsApplicationInControlList $parameters
    ): Type\IsApplicationInControlListResponse {
        return $this->call('IsApplicationInControlList', $parameters);
    }

    /**
     * ???
     *
     * @param RequestInterface|Type\UpdateApplication $parameters
     * @return ResultInterface|Type\UpdateApplicationResponse
     * @throws SoapException
     */
    public function updateApplication(Type\UpdateApplication $parameters
    ): Type\UpdateApplicationResponse {
        return $this->call('UpdateApplication', $parameters);
    }

    /**
     * ???
     *
     * @param RequestInterface|Type\GetCostStandart $parameters
     * @return ResultInterface|Type\GetCostStandartResponse
     * @throws SoapException
     */
    public function getCostStandart(Type\GetCostStandart $parameters): Type\GetCostStandartResponse
    {
        return $this->call('GetCostStandart', $parameters);
    }

    /**
     * ???
     *
     * @param RequestInterface|Type\GetParcelsStatuses $parameters
     * @return ResultInterface|Type\GetParcelsStatusesResponse
     * @throws SoapException
     */
    public function getParcelsStatuses(Type\GetParcelsStatuses $parameters
    ): Type\GetParcelsStatusesResponse {
        return $this->call('GetParcelsStatuses', $parameters);
    }

    /**
     * ???
     *
     * @param RequestInterface|Type\GetContractProps $parameters
     * @return ResultInterface|Type\GetContractPropsResponse
     * @throws SoapException
     */
    public function getContractProps(Type\GetContractProps $parameters): Type\GetContractPropsResponse
    {
        return $this->call('GetContractProps', $parameters);
    }

    /**
     * ???
     *
     * @param RequestInterface|Type\SetAllApplicationTrigger $parameters
     * @return ResultInterface|Type\SetAllApplicationTriggerResponse
     * @throws SoapException
     */
    public function setAllApplicationTrigger(Type\SetAllApplicationTrigger $parameters
    ): Type\SetAllApplicationTriggerResponse {
        return $this->call('SetAllApplicationTrigger', $parameters);
    }

    /**
     * ???
     *
     * @param RequestInterface|Type\UploadFile $parameters
     * @return ResultInterface|Type\UploadFileResponse
     * @throws SoapException
     */
    public function uploadFile(Type\UploadFile $parameters): Type\UploadFileResponse
    {
        return $this->call('UploadFile', $parameters);
    }

    /**
     * ???
     *
     * @param RequestInterface|Type\DeliveryDates $parameters
     * @return ResultInterface|Type\DeliveryDatesResponse
     * @throws SoapException
     */
    public function deliveryDates(Type\DeliveryDates $parameters): Type\DeliveryDatesResponse
    {
        return $this->call('DeliveryDates', $parameters);
    }

    /**
     * ???
     *
     * @param RequestInterface|Type\IsAdmitDateCorrect $parameters
     * @return ResultInterface|Type\IsAdmitDateCorrectResponse
     * @throws SoapException
     */
    public function isAdmitDateCorrect(Type\IsAdmitDateCorrect $parameters
    ): Type\IsAdmitDateCorrectResponse {
        return $this->call('IsAdmitDateCorrect', $parameters);
    }
}