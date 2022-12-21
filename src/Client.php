<?php

namespace Webmasterskaya\Soap\CCCB;

use Laminas\Stdlib\ArrayUtils;
use Traversable;
use Webmasterskaya\Soap\Base\Client as BaseSoapClient;
use Webmasterskaya\Soap\Base\Helper\ClassHelper;

/**
 * @method Type\ProbResponse prob()
 * @method Type\RegistrationResponse registration(string $INN, string $KPP, string $contractNumber, string $login, string $eMail)
 * @method Type\NewApplicationResponse newApplication(Type\Application $application, string $correctionApplication = null)
 * @method Type\ChangeIDResponse changeID(string $login, string $password)
 * @method Type\GetF1InfoResponse getF1Info(string $number, \DateTimeInterface $date)
 * @method Type\GetParcelInfoResponse getParcelInfo(string $parcelNumber)
 * @method Type\GetContractInfoResponse getContractInfo()
 * @method Type\AccountReportResponse accountReport()
 * @method Type\DetailedAccountReportResponse detailedAccountReport()
 * @method Type\GetCostResponse getCost(Type\CostingOptions $costingOptions)
 * @method Type\CancelApplicationResponse cancelApplication(string $applicationGUID)
 * @method Type\AutomatizationInfoResponse automatizationInfo(Type\Address $addressInfo)
 * @method Type\GetIDParcelResponse getIDParcel(string $urgencyCode, bool $specSvyazGarant = false)
 * @method Type\WriteParcelCharacteristicsResponse writeParcelCharacteristics(string $parcelNumber, Type\Parcel $parcelCharacteristics)
 * @method Type\GetParcelHistoryResponse getParcelHistory(string $parcelNumber)
 * @method Type\GetReportOnContractResponse getReportOnContract(\DateTimeInterface $startDate, \DateTimeInterface $endDate)
 * @method Type\GetAccountResponse getAccount(string $accountNumber, \DateTimeInterface $accountDate)
 * @method Type\IsApplicationInControlListResponse isApplicationInControlList(string $applicationGUID)
 * @method Type\UpdateApplicationResponse updateApplication(Type\UpdateData $updateData)
 * @method Type\GetCostStandartResponse getCostStandart(Type\CostingOptionsStandart $costingOptions)
 * @method Type\GetParcelsStatusesResponse getParcelsStatuses(Type\Parcels $parcels)
 * @method Type\GetContractPropsResponse getContractProps(bool $includeClient, bool $includeMainProps, bool $includeServices, bool $includeManager, bool $includeSumm)
 * @method Type\SetAllApplicationTriggerResponse setAllApplicationTrigger(bool $flag, bool $useCurrentDate)
 * @method Type\UploadFileResponse uploadFile(string $applicationGUID, string $fileName)
 * @method Type\DeliveryDatesResponse deliveryDates(\DateTimeInterface $dateSending, string $urgencyCode, Type\AddressShort $addressFrom, Type\AddressShort $addressTo)
 * @method Type\IsAdmitDateCorrectResponse isAdmitDateCorrect(\DateTimeInterface $DateAdmit, Type\AddressShort $AddressFrom, bool $CheckRegionalHoliday)
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
	 * @param   string  $serviceGuid
	 *
	 * @return self
	 */
	public function setServiceGuid(string $serviceGuid)
	{
		$this->serviceGuid = $serviceGuid;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getServiceGuid()
	{
		return $this->serviceGuid;
	}

	/**
	 * @param   string  $contractGuid
	 *
	 * @return self
	 */
	public function setContractGuid(string $contractGuid)
	{
		$this->contractGuid = $contractGuid;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getContractGuid()
	{
		return $this->contractGuid;
	}

	public function __construct($wsdl = null, $options = null)
	{
		if (!isset($options['classmap']) && !isset($options['class_map']))
		{
			$options['classmap'] = [];
		}

		parent::__construct($wsdl, $options);
	}

	/**
	 * @inheritDoc
	 */
	public function setOptions($options)
	{
		if ($options instanceof Traversable)
		{
			$options = ArrayUtils::iteratorToArray($options);
		}

		foreach ($options as $key => $value)
		{
			switch (strtolower($key))
			{
			case 'serviceguid':
			case 'service_guid':
				$this->setServiceGuid($value);
				break;

			case 'contractguid':
			case 'contract_guid':
				$this->setContractGuid($value);
				break;
			}
		}

		return parent::setOptions($options);
	}

	protected function _preProcessArguments($arguments)
	{
		if (ClassHelper::shouldBeAnInstanceOf($this->getLastCalling(), '\\Webmasterskaya\\Soap\\CCCB\\Type\\NewApplication'))
		{
			[$application, $correctionApplication] = array_pad($arguments, 2, null);

			if ($application instanceof Type\Application)
			{
				$arguments = [
					$application
						->withServiceGuid($this->getServiceGuid())
						->withContractGuid($this->getContractGuid()),
					$correctionApplication
				];
			}
		}

		if (ClassHelper::shouldBeAnInstanceOf($this->getLastCalling(), '\\Webmasterskaya\\Soap\\CCCB\\Type\\GetCost'))
		{
			[$costingOptions] = $arguments;

			if ($costingOptions instanceof Type\CostingOptions)
			{
				$arguments = [$costingOptions->withContractGuid($this->getContractGuid())];
			}
		}

		if (ClassHelper::shouldImplement($this->getLastClass(), '\\Webmasterskaya\\Soap\\CCCB\\Type\\ContractGuidAwareInterface'))
		{
			if (ClassHelper::shouldNotBeAnInstanceOf($this->getLastClass(), '\\Webmasterskaya\\Soap\\CCCB\\Type\\GetF1Info')
				&& ClassHelper::shouldNotBeAnInstanceOf($this->getLastClass(), '\\Webmasterskaya\\Soap\\CCCB\\Type\\GetParcelHistory')
				&& ClassHelper::shouldNotBeAnInstanceOf($this->getLastClass(), '\\Webmasterskaya\\Soap\\CCCB\\Type\\GetParcelsStatuses'))
			{
				array_unshift($arguments, $this->getContractGuid());
			}
			else
			{
				if (ClassHelper::shouldBeAnInstanceOf($this->getLastClass(), '\\Webmasterskaya\\Soap\\CCCB\\Type\\GetF1Info'))
				{
					$arguments    = array_pad($arguments, 3, null);
					$arguments[2] = $this->getContractGuid();
				}

				if (ClassHelper::shouldBeAnInstanceOf($this->getLastClass(), '\\Webmasterskaya\\Soap\\CCCB\\Type\\GetParcelHistory')
					|| ClassHelper::shouldBeAnInstanceOf($this->getLastClass(), '\\Webmasterskaya\\Soap\\CCCB\\Type\\GetParcelsStatuses'))
				{
					$arguments    = array_pad($arguments, 3, null);
					$arguments[1] = $this->getContractGuid();
				}
			}
		}

		return parent::_preProcessArguments($arguments);
	}

	public function getDefaultClassMap()
	{
		return [
			'Address'                            => Type\Address::class,
			'AddressShort'                       => Type\AddressShort::class,
			'Addressee'                          => Type\Addressee::class,
			'Application'                        => Type\Application::class,
			'ContactPerson'                      => Type\ContactPerson::class,
			'Contract'                           => Type\Contract::class,
			'ContractMainProps'                  => Type\ContractMainProps::class,
			'ContractManager'                    => Type\ContractManager::class,
			'ContractProps'                      => Type\ContractProps::class,
			'ContractSumm'                       => Type\ContractSumm::class,
			'CostingOptions'                     => Type\CostingOptions::class,
			'CostingOptionsStandart'             => Type\CostingOptionsStandart::class,
			'DetailCostStandart'                 => Type\DetailCostStandart::class,
			'F1Info'                             => Type\F1Info::class,
			'Parcel'                             => Type\Parcel::class,
			'ParcelHistory'                      => Type\ParcelHistory::class,
			'ParcelStatus'                       => Type\ParcelStatus::class,
			'ParcelStatusInfo'                   => Type\ParcelStatusInfo::class,
			'Parcels'                            => Type\Parcels::class,
			'ResultOfAccountReport'              => Type\ResultOfAccountReport::class,
			'ResultOfAutomatizationInfo'         => Type\ResultOfAutomatizationInfo::class,
			'ResultOfCancelApplication'          => Type\ResultOfCancelApplication::class,
			'ResultOfContractInfo'               => Type\ResultOfContractInfo::class,
			'ResultOfDetailedAccountReport'      => Type\ResultOfDetailedAccountReport::class,
			'ResultOfF1Info'                     => Type\ResultOfF1Info::class,
			'ResultOfGetAccount'                 => Type\ResultOfGetAccount::class,
			'ResultOfGetCost'                    => Type\ResultOfGetCost::class,
			'ResultOfGetCostStandart'            => Type\ResultOfGetCostStandart::class,
			'ResultOfGetParcelHistory'           => Type\ResultOfGetParcelHistory::class,
			'ResultOfGetParcelsStatuses'         => Type\ResultOfGetParcelsStatuses::class,
			'ResultOfGetReportOnContract'        => Type\ResultOfGetReportOnContract::class,
			'ResultOfNewApplication'             => Type\ResultOfNewApplication::class,
			'ResultOfOperation'                  => Type\ResultOfOperation::class,
			'ResultOfParcelInfo'                 => Type\ResultOfParcelInfo::class,
			'ResultOfRegistration'               => Type\ResultOfRegistration::class,
			'ResultOfUpdateApplication'          => Type\ResultOfUpdateApplication::class,
			'StringOfAccountReport'              => Type\StringOfAccountReport::class,
			'StringOfContractInfo'               => Type\StringOfContractInfo::class,
			'StringOfDetailedAccountReport'      => Type\StringOfDetailedAccountReport::class,
			'UpdateData'                         => Type\UpdateData::class,
			'User'                               => Type\User::class,
			'UserContactPerson'                  => Type\UserContactPerson::class,
			'Prob'                               => Type\Prob::class,
			'ProbResponse'                       => Type\ProbResponse::class,
			'Registration'                       => Type\Registration::class,
			'RegistrationResponse'               => Type\RegistrationResponse::class,
			'NewApplication'                     => Type\NewApplication::class,
			'NewApplicationResponse'             => Type\NewApplicationResponse::class,
			'ChangeID'                           => Type\ChangeID::class,
			'ChangeIDResponse'                   => Type\ChangeIDResponse::class,
			'GetF1Info'                          => Type\GetF1Info::class,
			'GetF1InfoResponse'                  => Type\GetF1InfoResponse::class,
			'GetParcelInfo'                      => Type\GetParcelInfo::class,
			'GetParcelInfoResponse'              => Type\GetParcelInfoResponse::class,
			'GetContractInfo'                    => Type\GetContractInfo::class,
			'GetContractInfoResponse'            => Type\GetContractInfoResponse::class,
			'AccountReport'                      => Type\AccountReport::class,
			'AccountReportResponse'              => Type\AccountReportResponse::class,
			'DetailedAccountReport'              => Type\DetailedAccountReport::class,
			'DetailedAccountReportResponse'      => Type\DetailedAccountReportResponse::class,
			'GetCost'                            => Type\GetCost::class,
			'GetCostResponse'                    => Type\GetCostResponse::class,
			'CancelApplication'                  => Type\CancelApplication::class,
			'CancelApplicationResponse'          => Type\CancelApplicationResponse::class,
			'AutomatizationInfo'                 => Type\AutomatizationInfo::class,
			'AutomatizationInfoResponse'         => Type\AutomatizationInfoResponse::class,
			'GetIDParcel'                        => Type\GetIDParcel::class,
			'GetIDParcelResponse'                => Type\GetIDParcelResponse::class,
			'WriteParcelCharacteristics'         => Type\WriteParcelCharacteristics::class,
			'WriteParcelCharacteristicsResponse' => Type\WriteParcelCharacteristicsResponse::class,
			'GetParcelHistory'                   => Type\GetParcelHistory::class,
			'GetParcelHistoryResponse'           => Type\GetParcelHistoryResponse::class,
			'GetReportOnContract'                => Type\GetReportOnContract::class,
			'GetReportOnContractResponse'        => Type\GetReportOnContractResponse::class,
			'GetAccount'                         => Type\GetAccount::class,
			'GetAccountResponse'                 => Type\GetAccountResponse::class,
			'IsApplicationInControlList'         => Type\IsApplicationInControlList::class,
			'IsApplicationInControlListResponse' => Type\IsApplicationInControlListResponse::class,
			'UpdateApplication'                  => Type\UpdateApplication::class,
			'UpdateApplicationResponse'          => Type\UpdateApplicationResponse::class,
			'GetCostStandart'                    => Type\GetCostStandart::class,
			'GetCostStandartResponse'            => Type\GetCostStandartResponse::class,
			'GetParcelsStatuses'                 => Type\GetParcelsStatuses::class,
			'GetParcelsStatusesResponse'         => Type\GetParcelsStatusesResponse::class,
			'GetContractProps'                   => Type\GetContractProps::class,
			'GetContractPropsResponse'           => Type\GetContractPropsResponse::class,
			'SetAllApplicationTrigger'           => Type\SetAllApplicationTrigger::class,
			'SetAllApplicationTriggerResponse'   => Type\SetAllApplicationTriggerResponse::class,
			'UploadFile'                         => Type\UploadFile::class,
			'UploadFileResponse'                 => Type\UploadFileResponse::class,
			'DeliveryDates'                      => Type\DeliveryDates::class,
			'DeliveryDatesResponse'              => Type\DeliveryDatesResponse::class,
			'IsAdmitDateCorrect'                 => Type\IsAdmitDateCorrect::class,
			'IsAdmitDateCorrectResponse'         => Type\IsAdmitDateCorrectResponse::class,
		];
	}
}