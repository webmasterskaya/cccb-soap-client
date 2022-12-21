<?php

namespace Webmasterskaya\Soap\CCCB;

use Laminas\Stdlib\ArrayUtils;
use Traversable;
use Webmasterskaya\Soap\Base\Client as BaseSoapClient;
use Webmasterskaya\Soap\Base\Helper\ClassHelper;


/**
 * @method NewApplication(Type\Application $application, string $correctionApplication = null)
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
			if ($arguments[0] instanceof Type\Application)
			{
				/** @var Type\Application $application */
				$application = array_shift($arguments);
				$application = $application->withServiceGuid($this->getServiceGuid())
					->withContractGuid($this->getContractGuid());
				array_unshift($arguments, $application);
			}
		}

		if (ClassHelper::shouldBeAnInstanceOf($this->getLastCalling(), '\\Webmasterskaya\\Soap\\CCCB\\Type\\GetCost'))
		{
			if ($arguments[0] instanceof Type\CostingOptions)
			{
				/** @var Type\CostingOptions $costingOptions */
				$costingOptions = array_shift($arguments);
				$costingOptions = $costingOptions->withContractGuid($this->getContractGuid());
				array_unshift($arguments, $costingOptions);
			}
		}

		$callingClass = parent::_preProcessArguments($arguments);

		if (
			ClassHelper::shouldBeAnInstanceOf($callingClass, '\\Webmasterskaya\\Soap\\CCCB\\Type\\WriteParcelCharacteristics')
			|| ClassHelper::shouldBeAnInstanceOf($callingClass, '\\Webmasterskaya\\Soap\\CCCB\\Type\\DetailedAccountReport')
			|| ClassHelper::shouldBeAnInstanceOf($callingClass, '\\Webmasterskaya\\Soap\\CCCB\\Type\\AccountReport')
			|| ClassHelper::shouldBeAnInstanceOf($callingClass, '\\Webmasterskaya\\Soap\\CCCB\\Type\\GetContractInfo')
			|| ClassHelper::shouldBeAnInstanceOf($callingClass, '\\Webmasterskaya\\Soap\\CCCB\\Type\\GetContractProps')
			|| ClassHelper::shouldBeAnInstanceOf($callingClass, '\\Webmasterskaya\\Soap\\CCCB\\Type\\DeliveryDates')
			|| ClassHelper::shouldBeAnInstanceOf($callingClass, '\\Webmasterskaya\\Soap\\CCCB\\Type\\ChangeID')
			|| ClassHelper::shouldBeAnInstanceOf($callingClass, '\\Webmasterskaya\\Soap\\CCCB\\Type\\GetAccount')
			|| ClassHelper::shouldBeAnInstanceOf($callingClass, '\\Webmasterskaya\\Soap\\CCCB\\Type\\GetF1Info')
			|| ClassHelper::shouldBeAnInstanceOf($callingClass, '\\Webmasterskaya\\Soap\\CCCB\\Type\\GetParcelHistory')
			|| ClassHelper::shouldBeAnInstanceOf($callingClass, '\\Webmasterskaya\\Soap\\CCCB\\Type\\GetParcelInfo')
			|| ClassHelper::shouldBeAnInstanceOf($callingClass, '\\Webmasterskaya\\Soap\\CCCB\\Type\\GetParcelsStatuses')
			|| ClassHelper::shouldBeAnInstanceOf($callingClass, '\\Webmasterskaya\\Soap\\CCCB\\Type\\GetReportOnContract')
			|| ClassHelper::shouldBeAnInstanceOf($callingClass, '\\Webmasterskaya\\Soap\\CCCB\\Type\\SetAllApplicationTrigger')
		)
		{
			return $callingClass->withContractGUID($this->getContractGuid());
		}
	}
}