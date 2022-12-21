<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class WriteParcelCharacteristics implements RequestInterface, ContractGuidAwareInterface
{

	use ContractGuidAwareTrait;

	/**
	 * @var string
	 */
	private $ParcelNumber;

	/**
	 * @var   Parcel
	 */
	private $ParcelCharacteristics;

	/**
	 * Constructor
	 *
	 * @var string   $ContractGUID
	 * @var string   $ParcelNumber
	 * @var   Parcel $ParcelCharacteristics
	 */
	public function __construct($ContractGUID, $ParcelNumber, $ParcelCharacteristics)
	{
		$this->ContractGUID          = $ContractGUID;
		$this->ParcelNumber          = $ParcelNumber;
		$this->ParcelCharacteristics = $ParcelCharacteristics;
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
	 * @return WriteParcelCharacteristics
	 */
	public function withParcelNumber($ParcelNumber)
	{
		$new               = clone $this;
		$new->ParcelNumber = $ParcelNumber;

		return $new;
	}

	/**
	 * @return   Parcel
	 */
	public function getParcelCharacteristics()
	{
		return $this->ParcelCharacteristics;
	}

	/**
	 * @param   Parcel  $ParcelCharacteristics
	 *
	 * @return WriteParcelCharacteristics
	 */
	public function withParcelCharacteristics($ParcelCharacteristics)
	{
		$new                        = clone $this;
		$new->ParcelCharacteristics = $ParcelCharacteristics;

		return $new;
	}
}

