<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class GetAccount implements RequestInterface, ContractGuidAwareInterface
{

	use ContractGuidAwareTrait;

	/**
	 * @var string
	 */
	private $AccountNumber;

	/**
	 * @var \DateTimeInterface
	 */
	private $AccountDate;

	/**
	 * Constructor
	 *
	 * @var string             $ContractGUID
	 * @var string             $AccountNumber
	 * @var \DateTimeInterface $AccountDate
	 */
	public function __construct($ContractGUID, $AccountNumber, $AccountDate)
	{
		$this->ContractGUID  = $ContractGUID;
		$this->AccountNumber = $AccountNumber;
		$this->AccountDate   = $AccountDate;
	}

	/**
	 * @return string
	 */
	public function getAccountNumber()
	{
		return $this->AccountNumber;
	}

	/**
	 * @param   string  $AccountNumber
	 *
	 * @return GetAccount
	 */
	public function withAccountNumber($AccountNumber)
	{
		$new                = clone $this;
		$new->AccountNumber = $AccountNumber;

		return $new;
	}

	/**
	 * @return \DateTimeInterface
	 */
	public function getAccountDate()
	{
		return $this->AccountDate;
	}

	/**
	 * @param   \DateTimeInterface  $AccountDate
	 *
	 * @return GetAccount
	 */
	public function withAccountDate($AccountDate)
	{
		$new              = clone $this;
		$new->AccountDate = $AccountDate;

		return $new;
	}
}

