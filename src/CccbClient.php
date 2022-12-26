<?php

namespace Webmasterskaya\Soap\CCCB;

use Soap\Engine\Transport;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Webmasterskaya\Soap\Base\ClientAbstract;
use Webmasterskaya\Soap\Base\Exception\SoapException;
use Webmasterskaya\Soap\Base\Helper\ClassHelper;
use Webmasterskaya\Soap\Base\Soap\Metadata\MetadataOptions;
use Webmasterskaya\Soap\Base\Type\RequestInterface;
use Webmasterskaya\Soap\Base\Type\ResultInterface;
use Webmasterskaya\Soap\CCCB\Soap\Wsdl\CccbMainWsdlProvider;
use Webmasterskaya\Soap\CCCB\Soap\Wsdl\CccbWsdlProviderInterface;

class CccbClient extends ClientAbstract
{
    private static $wsdlProviderClass = CccbMainWsdlProvider::class;

    /**
     * @var string;
     */
    protected $contractGuid;

    /**
     * @var string
     */
    protected $serviceGuid;

    /**
     * @return string
     */
    public function getServiceGuid(): string
    {
        return $this->serviceGuid;
    }

    /**
     * @return string
     */
    public function getContractGuid(): string
    {
        return $this->contractGuid;
    }

    public function __construct(
        ExtSoapOptions $options,
        ?Transport $transport = null,
        ?MetadataOptions $metadataOptions = null
    ) {
        $soapOptions = $options->getOptions();

        $this->resolveOptions($soapOptions);

        $soapTypeMap = $options->getTypeMap();
        $soapClassMap = $options->getClassMap();

        $nextClassMap = $this->getClassmap($soapClassMap);

        $nextOptions = new ExtSoapOptions('', $soapOptions);

        $nextOptions
            ->withWsdlProvider(new static::$wsdlProviderClass)
            ->withClassMap($nextClassMap)
            ->withTypemap($soapTypeMap);

        parent::__construct($nextOptions, $transport, $metadataOptions);
    }

    protected function resolveOptions(array &$options)
    {
        $cccbOptions = [];

        foreach ($options as $key => $value) {
            switch (strtolower($key)) {
                case 'serviceguid':
                case 'service_guid':
                    $cccbOptions['service_guid'] = $value;
                    unset($options[$key]);
                    break;

                case 'contractguid':
                case 'contract_guid':
                    $cccbOptions['contract_guid'] = $value;
                    unset($options[$key]);
                    break;
            }
        }

        $cccbOptions = $this->getResolver()->resolve($cccbOptions);

        $this->serviceGuid = $cccbOptions['service_guid'];
        $this->contractGuid = $cccbOptions['contract_guid'];
    }

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

    protected function getClassmap(ClassMapCollection $soapClassMap)
    {
        $cccbClassMap = (new CccbClassMapCollection)();

        $classes = [];

        /** @var ClassMap $classMap */
        foreach ($cccbClassMap as $classMap) {
            $typeName = $classMap->getWsdlType();
            $classes[$typeName] = $classMap;
        }

        /** @var ClassMap $classMap */
        foreach ($soapClassMap as $classMap) {
            $typeName = $classMap->getWsdlType();
            $classes[$typeName] = $classMap;
        }

        return new ClassMapCollection(...array_values($classes));
    }

    /**
     * @return ResultInterface|Type\ProbResponse
     * @throws SoapException
     */
    public function prob(): Type\ProbResponse
    {
        return $this->call('Prob', new Type\Prob());
    }

    /**
     * @return ResultInterface|Type\RegistrationResponse
     * @throws SoapException
     */
    public function registration(
        string $INN,
        string $KPP,
        string $contractNumber,
        string $login,
        string $eMail
    ): Type\RegistrationResponse {
        return $this->call('Registration', new Type\Registration($INN, $KPP, $contractNumber, $login, $eMail));
    }

    /**
     * @return ResultInterface|Type\NewApplicationResponse
     * @throws SoapException
     */
    public function newApplication(
        Type\Application $application,
        string $correctionApplication = null
    ): Type\NewApplicationResponse {
        return $this->call(
            'NewApplication',
            new Type\NewApplication(
                $application
                    ->withContractGUID($this->getContractGUID()),
                $correctionApplication));
    }

    /**
     * @param RequestInterface|Type\ChangeID $parameters
     * @return ResultInterface|Type\ChangeIDResponse
     * @throws SoapException
     */
    public function changeID(Type\ChangeID $parameters): Type\ChangeIDResponse
    {
        return $this->call('ChangeID', $parameters);
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
     * @param RequestInterface|Type\AutomatizationInfo $parameters
     * @return ResultInterface|Type\AutomatizationInfoResponse
     * @throws SoapException
     */
    public function automatizationInfo(Type\AutomatizationInfo $parameters
    ): Type\AutomatizationInfoResponse {
        return $this->call('AutomatizationInfo', $parameters);
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

    public static function setWsdlProviderClass(string $wsdlProviderClass)
    {
        if (ClassHelper::shouldImplement($wsdlProviderClass, CccbWsdlProviderInterface::class)) {
            static::$wsdlProviderClass = $wsdlProviderClass;
        }
    }
}