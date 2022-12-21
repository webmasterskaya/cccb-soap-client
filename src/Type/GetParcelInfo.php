<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class GetParcelInfo implements RequestInterface, ContractGuidAwareInterface
{

	use ContractGuidAwareTrait;

	/**
	 * @var string
	 */
	private $ParcelNumber;

	/**
	 * Constructor
	 *
	 * @var string $ContractGUID
	 * @var string $ParcelNumber
	 */
	public function __construct($ContractGUID, $ParcelNumber)
	{
		$this->ContractGUID = $ContractGUID;
		$this->ParcelNumber = $ParcelNumber;
	}

	/**
	 * @return string
	 */
	public function getParcelNumber()
	{
		return $this->ParcelNumber;
	}

	/**
	 * @param   string  $ParcelNumber
	 *
	 * @return GetParcelInfo
	 */
	public function withParcelNumber($ParcelNumber)
	{
		$new               = clone $this;
		$new->ParcelNumber = $ParcelNumber;

		return $new;
	}
}

