<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class GetF1Info implements RequestInterface, ContractGuidAwareInterface
{
	/**
	 * @var string
	 */
	private $Number;

	/**
	 * @var \DateTimeInterface
	 */
	private $Date;

	use ContractGuidAwareTrait;

	/**
	 * Constructor
	 *
	 * @var string             $Number
	 * @var \DateTimeInterface $Date
	 * @var string             $ContractGUID
	 */
	public function __construct($Number, $Date, $ContractGUID)
	{
		$this->Number       = $Number;
		$this->Date         = $Date;
		$this->ContractGUID = $ContractGUID;
	}

	/**
	 * @return string
	 */
	public function getNumber()
	{
		return $this->Number;
	}

	/**
	 * @param   string  $Number
	 *
	 * @return GetF1Info
	 */
	public function withNumber($Number)
	{
		$new         = clone $this;
		$new->Number = $Number;

		return $new;
	}

	/**
	 * @return \DateTimeInterface
	 */
	public function getDate()
	{
		return $this->Date;
	}

	/**
	 * @param   \DateTimeInterface  $Date
	 *
	 * @return GetF1Info
	 */
	public function withDate($Date)
	{
		$new       = clone $this;
		$new->Date = $Date;

		return $new;
	}
}

