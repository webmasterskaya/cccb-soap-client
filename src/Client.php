<?php

namespace Webmasterskaya\Soap\CCCB;

use Laminas\Stdlib\ArrayUtils;
use Traversable;
use Webmasterskaya\Soap\Base\Client as BaseSoapClient;
use Webmasterskaya\Soap\Base\Helper\ClassHelper;
use Webmasterskaya\Soap\CCCB\Type\CccbResponseInterface;

/**
 * @method string prob()
 * @method Type\ResultOfRegistration registration(string $INN, string $KPP, string $contractNumber, string $login, string $eMail)
 * @method Type\ResultOfNewApplication newApplication(Type\Application $application, string $correctionApplication = null)
 * @method bool changeID(string $login, string $password)
 * @method Type\ResultOfF1Info getF1Info(string $number, \DateTimeInterface $date)
 * @method Type\ResultOfParcelInfo getParcelInfo(string $parcelNumber)
 * @method Type\ResultOfContractInfo getContractInfo()
 * @method Type\ResultOfAccountReport accountReport()
 * @method Type\StringOfDetailedAccountReport detailedAccountReport()
 * @method Type\ResultOfGetCost getCost(Type\CostingOptions $costingOptions)
 * @method Type\ResultOfCancelApplication cancelApplication(string $applicationGUID)
 * @method Type\ResultOfAutomatizationInfo automatizationInfo(Type\Address $addressInfo)
 * @method string getIDParcel(string $urgencyCode, bool $specSvyazGarant = false)
 * @method bool writeParcelCharacteristics(string $parcelNumber, Type\Parcel $parcelCharacteristics)
 * @method Type\ResultOfGetParcelHistory getParcelHistory(string $parcelNumber)
 * @method Type\ResultOfGetReportOnContract getReportOnContract(\DateTimeInterface $startDate, \DateTimeInterface $endDate)
 * @method Type\ResultOfGetAccount getAccount(string $accountNumber, \DateTimeInterface $accountDate)
 * @method bool isApplicationInControlList(string $applicationGUID)
 * @method Type\ResultOfUpdateApplication updateApplication(Type\UpdateData $updateData)
 * @method Type\ResultOfGetCostStandart getCostStandart(Type\CostingOptionsStandart $costingOptions)
 * @method Type\ResultOfGetParcelsStatuses getParcelsStatuses(Type\Parcels $parcels)
 * @method Type\ContractProps getContractProps(bool $includeClient, bool $includeMainProps, bool $includeServices, bool $includeManager, bool $includeSumm)
 * @method Type\ResultOfOperation setAllApplicationTrigger(bool $flag, bool $useCurrentDate)
 * @method Type\ResultOfOperation uploadFile(string $applicationGUID, string $fileName)
 * @method Type\ResultOfOperation deliveryDates(\DateTimeInterface $dateSending, string $urgencyCode, Type\AddressShort $addressFrom, Type\AddressShort $addressTo)
 * @method Type\ResultOfOperation isAdmitDateCorrect(\DateTimeInterface $DateAdmit, Type\AddressShort $AddressFrom, bool $CheckRegionalHoliday)
 */
class Client extends BaseSoapClient
{
    /**
     * @var string;
     */
    protected $contractGuid;

    /**
     * @var string
     */
    protected $serviceGuid;

    /**
     * @param string $serviceGuid
     *
     * @return self
     */
    public function setServiceGuid(string $serviceGuid): Client
    {
        $this->serviceGuid = $serviceGuid;

        return $this;
    }

    /**
     * @return string
     */
    public function getServiceGuid(): string
    {
        return $this->serviceGuid;
    }

    /**
     * @param string $contractGuid
     *
     * @return self
     */
    public function setContractGuid(string $contractGuid): Client
    {
        $this->contractGuid = $contractGuid;

        return $this;
    }

    /**
     * @return string
     */
    public function getContractGuid(): string
    {
        return $this->contractGuid;
    }

    public function __construct($wsdl = null, $options = null)
    {
        if (!isset($options['classmap']) && !isset($options['class_map'])) {
            $options['classmap'] = [];
        }

        parent::__construct($wsdl, $options);
    }

    public function setClassmap(array $classmap)
    {
        $classmap = array_merge($this->getDefaultClassMap(), $classmap);

        return parent::setClassmap($classmap);
    }

    /**
     * @inheritDoc
     */
    public function setOptions($options)
    {
        if ($options instanceof Traversable) {
            $options = ArrayUtils::iteratorToArray($options);
        }

        foreach ($options as $key => $value) {
            switch (strtolower($key)) {
                case 'serviceguid':
                case 'service_guid':
                    $this->setServiceGuid($value);
                    unset($options['serviceguid'], $options['service_guid']);
                    break;

                case 'contractguid':
                case 'contract_guid':
                    $this->setContractGuid($value);
                    unset($options['contractguid'], $options['contract_guid']);
                    break;
            }
        }

        return parent::setOptions($options);
    }

    public function getOptions()
    {
        $options = parent::getOptions();

        $options['contract_guid'] = $this->getContractGuid();
        $options['service_guid'] = $this->getServiceGuid();

        return $options;
    }

    protected function _preProcessArguments($arguments)
    {
        $lastClass = $this->getFromClassMap($this->getLastMethod());

        if (ClassHelper::shouldBeAnInstanceOf($lastClass, Type\NewApplication::class)) {
            [$application, $correctionApplication] = array_pad($arguments, 2, null);

            if ($application instanceof Type\Application) {
                $arguments = [
                    $application
                        ->withServiceGuid($this->getServiceGuid())
                        ->withContractGuid($this->getContractGuid()),
                    $correctionApplication
                ];
            }
        }

        if (ClassHelper::shouldBeAnInstanceOf($lastClass, Type\GetCost::class)) {
            [$costingOptions] = $arguments;

            if ($costingOptions instanceof Type\CostingOptions) {
                $arguments = [$costingOptions->withContractGuid($this->getContractGuid())];
            }
        }

        if (ClassHelper::shouldImplement($lastClass, Type\ContractGuidAwareInterface::class)) {
            if (ClassHelper::shouldNotBeAnInstanceOf($lastClass, Type\GetF1Info::class)
                && ClassHelper::shouldNotBeAnInstanceOf($lastClass, Type\GetParcelHistory::class)
                && ClassHelper::shouldNotBeAnInstanceOf($lastClass, Type\GetParcelsStatuses::class)) {
                array_unshift($arguments, $this->getContractGuid());
            } else {
                if (ClassHelper::shouldBeAnInstanceOf($lastClass, Type\GetF1Info::class)) {
                    $arguments = array_pad($arguments, 3, null);
                    $arguments[2] = $this->getContractGuid();
                }

                if (ClassHelper::shouldBeAnInstanceOf($lastClass, Type\GetParcelHistory::class)
                    || ClassHelper::shouldBeAnInstanceOf($lastClass, Type\GetParcelsStatuses::class)) {
                    $arguments = array_pad($arguments, 3, null);
                    $arguments[1] = $this->getContractGuid();
                }
            }
        }

        return parent::_preProcessArguments($arguments);
    }

    public function _preProcessResult($result)
    {
        $result = parent::_preProcessResult($result);

        if ($result instanceof CccbResponseInterface) {
            return $result->getReturn();
        }

        return $result;
    }

    public function getDefaultClassMap()
    {
        return [
            'Address' => Type\Address::class,
            'AddressShort' => Type\AddressShort::class,
            'Addressee' => Type\Addressee::class,
            'Application' => Type\Application::class,
            'ContactPerson' => Type\ContactPerson::class,
            'Contract' => Type\Contract::class,
            'ContractMainProps' => Type\ContractMainProps::class,
            'ContractManager' => Type\ContractManager::class,
            'ContractProps' => Type\ContractProps::class,
            'ContractSumm' => Type\ContractSumm::class,
            'CostingOptions' => Type\CostingOptions::class,
            'CostingOptionsStandart' => Type\CostingOptionsStandart::class,
            'DetailCostStandart' => Type\DetailCostStandart::class,
            'F1Info' => Type\F1Info::class,
            'Parcel' => Type\Parcel::class,
            'ParcelHistory' => Type\ParcelHistory::class,
            'ParcelStatus' => Type\ParcelStatus::class,
            'ParcelStatusInfo' => Type\ParcelStatusInfo::class,
            'Parcels' => Type\Parcels::class,
            'ResultOfAccountReport' => Type\ResultOfAccountReport::class,
            'ResultOfAutomatizationInfo' => Type\ResultOfAutomatizationInfo::class,
            'ResultOfCancelApplication' => Type\ResultOfCancelApplication::class,
            'ResultOfContractInfo' => Type\ResultOfContractInfo::class,
            'ResultOfDetailedAccountReport' => Type\ResultOfDetailedAccountReport::class,
            'ResultOfF1Info' => Type\ResultOfF1Info::class,
            'ResultOfGetAccount' => Type\ResultOfGetAccount::class,
            'ResultOfGetCost' => Type\ResultOfGetCost::class,
            'ResultOfGetCostStandart' => Type\ResultOfGetCostStandart::class,
            'ResultOfGetParcelHistory' => Type\ResultOfGetParcelHistory::class,
            'ResultOfGetParcelsStatuses' => Type\ResultOfGetParcelsStatuses::class,
            'ResultOfGetReportOnContract' => Type\ResultOfGetReportOnContract::class,
            'ResultOfNewApplication' => Type\ResultOfNewApplication::class,
            'ResultOfOperation' => Type\ResultOfOperation::class,
            'ResultOfParcelInfo' => Type\ResultOfParcelInfo::class,
            'ResultOfRegistration' => Type\ResultOfRegistration::class,
            'ResultOfUpdateApplication' => Type\ResultOfUpdateApplication::class,
            'StringOfAccountReport' => Type\StringOfAccountReport::class,
            'StringOfContractInfo' => Type\StringOfContractInfo::class,
            'StringOfDetailedAccountReport' => Type\StringOfDetailedAccountReport::class,
            'UpdateData' => Type\UpdateData::class,
            'User' => Type\User::class,
            'UserContactPerson' => Type\UserContactPerson::class,
            'Prob' => Type\Prob::class,
            'ProbResponse' => Type\ProbResponse::class,
            'Registration' => Type\Registration::class,
            'RegistrationResponse' => Type\RegistrationResponse::class,
            'NewApplication' => Type\NewApplication::class,
            'NewApplicationResponse' => Type\NewApplicationResponse::class,
            'ChangeID' => Type\ChangeID::class,
            'ChangeIDResponse' => Type\ChangeIDResponse::class,
            'GetF1Info' => Type\GetF1Info::class,
            'GetF1InfoResponse' => Type\GetF1InfoResponse::class,
            'GetParcelInfo' => Type\GetParcelInfo::class,
            'GetParcelInfoResponse' => Type\GetParcelInfoResponse::class,
            'GetContractInfo' => Type\GetContractInfo::class,
            'GetContractInfoResponse' => Type\GetContractInfoResponse::class,
            'AccountReport' => Type\AccountReport::class,
            'AccountReportResponse' => Type\AccountReportResponse::class,
            'DetailedAccountReport' => Type\DetailedAccountReport::class,
            'DetailedAccountReportResponse' => Type\DetailedAccountReportResponse::class,
            'GetCost' => Type\GetCost::class,
            'GetCostResponse' => Type\GetCostResponse::class,
            'CancelApplication' => Type\CancelApplication::class,
            'CancelApplicationResponse' => Type\CancelApplicationResponse::class,
            'AutomatizationInfo' => Type\AutomatizationInfo::class,
            'AutomatizationInfoResponse' => Type\AutomatizationInfoResponse::class,
            'GetIDParcel' => Type\GetIDParcel::class,
            'GetIDParcelResponse' => Type\GetIDParcelResponse::class,
            'WriteParcelCharacteristics' => Type\WriteParcelCharacteristics::class,
            'WriteParcelCharacteristicsResponse' => Type\WriteParcelCharacteristicsResponse::class,
            'GetParcelHistory' => Type\GetParcelHistory::class,
            'GetParcelHistoryResponse' => Type\GetParcelHistoryResponse::class,
            'GetReportOnContract' => Type\GetReportOnContract::class,
            'GetReportOnContractResponse' => Type\GetReportOnContractResponse::class,
            'GetAccount' => Type\GetAccount::class,
            'GetAccountResponse' => Type\GetAccountResponse::class,
            'IsApplicationInControlList' => Type\IsApplicationInControlList::class,
            'IsApplicationInControlListResponse' => Type\IsApplicationInControlListResponse::class,
            'UpdateApplication' => Type\UpdateApplication::class,
            'UpdateApplicationResponse' => Type\UpdateApplicationResponse::class,
            'GetCostStandart' => Type\GetCostStandart::class,
            'GetCostStandartResponse' => Type\GetCostStandartResponse::class,
            'GetParcelsStatuses' => Type\GetParcelsStatuses::class,
            'GetParcelsStatusesResponse' => Type\GetParcelsStatusesResponse::class,
            'GetContractProps' => Type\GetContractProps::class,
            'GetContractPropsResponse' => Type\GetContractPropsResponse::class,
            'SetAllApplicationTrigger' => Type\SetAllApplicationTrigger::class,
            'SetAllApplicationTriggerResponse' => Type\SetAllApplicationTriggerResponse::class,
            'UploadFile' => Type\UploadFile::class,
            'UploadFileResponse' => Type\UploadFileResponse::class,
            'DeliveryDates' => Type\DeliveryDates::class,
            'DeliveryDatesResponse' => Type\DeliveryDatesResponse::class,
            'IsAdmitDateCorrect' => Type\IsAdmitDateCorrect::class,
            'IsAdmitDateCorrectResponse' => Type\IsAdmitDateCorrectResponse::class,
        ];
    }
}