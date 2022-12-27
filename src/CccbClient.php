<?php

namespace Webmasterskaya\Soap\CCCB;

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
     * Идентификатор договора контрагента СпецСвязи
     *
     * @var string;
     */
    protected $contractGuid;

    /**
     * Идентификатор услуги СпецСвязи
     *
     * @var string
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
     */
    public function prob(): Type\ProbResponse
    {
        return $this->call('Prob', new Type\Prob());
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
        return $this->call('Registration', new Type\Registration($INN, $KPP, $contractNumber, $login, $eMail));
    }

    /**
     * Метод создаёт новую заявку на отправление и возвращает параметры созданной заявки
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
            new Type\NewApplication(
                $application
                    ->withContractGUID($this->getContractGUID())
                    ->withServiceGUID($this->getServiceGUID()),
                $correctionApplication));
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
     * @param RequestInterface|Type\GetF1Info $parameters
     * @return ResultInterface|Type\GetF1InfoResponse
     * @throws SoapException
     */
    public function getF1Info(Type\GetF1Info $parameters): Type\GetF1InfoResponse
    {
        return $this->call('GetF1Info', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetParcelInfo $parameters
     * @return ResultInterface|Type\GetParcelInfoResponse
     * @throws SoapException
     */
    public function getParcelInfo(Type\GetParcelInfo $parameters): Type\GetParcelInfoResponse
    {
        return $this->call('GetParcelInfo', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetContractInfo $parameters
     * @return ResultInterface|Type\GetContractInfoResponse
     * @throws SoapException
     */
    public function getContractInfo(Type\GetContractInfo $parameters): Type\GetContractInfoResponse
    {
        return $this->call('GetContractInfo', $parameters);
    }

    /**
     * @param RequestInterface|Type\AccountReport $parameters
     * @return ResultInterface|Type\AccountReportResponse
     * @throws SoapException
     */
    public function accountReport(Type\AccountReport $parameters): Type\AccountReportResponse
    {
        return $this->call('AccountReport', $parameters);
    }

    /**
     * @param RequestInterface|Type\DetailedAccountReport $parameters
     * @return ResultInterface|Type\DetailedAccountReportResponse
     * @throws SoapException
     */
    public function detailedAccountReport(Type\DetailedAccountReport $parameters
    ): Type\DetailedAccountReportResponse {
        return $this->call('DetailedAccountReport', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetCost $parameters
     * @return ResultInterface|Type\GetCostResponse
     * @throws SoapException
     */
    public function getCost(Type\GetCost $parameters): Type\GetCostResponse
    {
        return $this->call('GetCost', $parameters);
    }

    /**
     * @param RequestInterface|Type\CancelApplication $parameters
     * @return ResultInterface|Type\CancelApplicationResponse
     * @throws SoapException
     */
    public function cancelApplication(Type\CancelApplication $parameters
    ): Type\CancelApplicationResponse {
        return $this->call('CancelApplication', $parameters);
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
     * @see Type\AutomatizationInfo
     */
    public function automatizationInfo(Type\Address $AddressInfo): Type\AutomatizationInfoResponse
    {
        return $this->call('AutomatizationInfo', new Type\AutomatizationInfo($AddressInfo));
    }

    /**
     * @param RequestInterface|Type\GetIDParcel $parameters
     * @return ResultInterface|Type\GetIDParcelResponse
     * @throws SoapException
     */
    public function getIDParcel(Type\GetIDParcel $parameters): Type\GetIDParcelResponse
    {
        return $this->call('GetIDParcel', $parameters);
    }

    /**
     * @param RequestInterface|Type\WriteParcelCharacteristics $parameters
     * @return ResultInterface|Type\WriteParcelCharacteristicsResponse
     * @throws SoapException
     */
    public function writeParcelCharacteristics(Type\WriteParcelCharacteristics $parameters
    ): Type\WriteParcelCharacteristicsResponse {
        return $this->call('WriteParcelCharacteristics', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetParcelHistory $parameters
     * @return ResultInterface|Type\GetParcelHistoryResponse
     * @throws SoapException
     */
    public function getParcelHistory(Type\GetParcelHistory $parameters): Type\GetParcelHistoryResponse
    {
        return $this->call('GetParcelHistory', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetReportOnContract $parameters
     * @return ResultInterface|Type\GetReportOnContractResponse
     * @throws SoapException
     */
    public function getReportOnContract(Type\GetReportOnContract $parameters
    ): Type\GetReportOnContractResponse {
        return $this->call('GetReportOnContract', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetAccount $parameters
     * @return ResultInterface|Type\GetAccountResponse
     * @throws SoapException
     */
    public function getAccount(Type\GetAccount $parameters): Type\GetAccountResponse
    {
        return $this->call('GetAccount', $parameters);
    }

    /**
     * @param RequestInterface|Type\IsApplicationInControlList $parameters
     * @return ResultInterface|Type\IsApplicationInControlListResponse
     * @throws SoapException
     */
    public function isApplicationInControlList(Type\IsApplicationInControlList $parameters
    ): Type\IsApplicationInControlListResponse {
        return $this->call('IsApplicationInControlList', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateApplication $parameters
     * @return ResultInterface|Type\UpdateApplicationResponse
     * @throws SoapException
     */
    public function updateApplication(Type\UpdateApplication $parameters
    ): Type\UpdateApplicationResponse {
        return $this->call('UpdateApplication', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetCostStandart $parameters
     * @return ResultInterface|Type\GetCostStandartResponse
     * @throws SoapException
     */
    public function getCostStandart(Type\GetCostStandart $parameters): Type\GetCostStandartResponse
    {
        return $this->call('GetCostStandart', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetParcelsStatuses $parameters
     * @return ResultInterface|Type\GetParcelsStatusesResponse
     * @throws SoapException
     */
    public function getParcelsStatuses(Type\GetParcelsStatuses $parameters
    ): Type\GetParcelsStatusesResponse {
        return $this->call('GetParcelsStatuses', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetContractProps $parameters
     * @return ResultInterface|Type\GetContractPropsResponse
     * @throws SoapException
     */
    public function getContractProps(Type\GetContractProps $parameters): Type\GetContractPropsResponse
    {
        return $this->call('GetContractProps', $parameters);
    }

    /**
     * @param RequestInterface|Type\SetAllApplicationTrigger $parameters
     * @return ResultInterface|Type\SetAllApplicationTriggerResponse
     * @throws SoapException
     */
    public function setAllApplicationTrigger(Type\SetAllApplicationTrigger $parameters
    ): Type\SetAllApplicationTriggerResponse {
        return $this->call('SetAllApplicationTrigger', $parameters);
    }

    /**
     * @param RequestInterface|Type\UploadFile $parameters
     * @return ResultInterface|Type\UploadFileResponse
     * @throws SoapException
     */
    public function uploadFile(Type\UploadFile $parameters): Type\UploadFileResponse
    {
        return $this->call('UploadFile', $parameters);
    }

    /**
     * @param RequestInterface|Type\DeliveryDates $parameters
     * @return ResultInterface|Type\DeliveryDatesResponse
     * @throws SoapException
     */
    public function deliveryDates(Type\DeliveryDates $parameters): Type\DeliveryDatesResponse
    {
        return $this->call('DeliveryDates', $parameters);
    }

    /**
     * @param RequestInterface|Type\IsAdmitDateCorrect $parameters
     * @return ResultInterface|Type\IsAdmitDateCorrectResponse
     * @throws SoapException
     */
    public function isAdmitDateCorrect(Type\IsAdmitDateCorrect $parameters
    ): Type\IsAdmitDateCorrectResponse {
        return $this->call('IsAdmitDateCorrect', $parameters);
    }
}