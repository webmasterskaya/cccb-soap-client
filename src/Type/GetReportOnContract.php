<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class GetReportOnContract implements RequestInterface, ContractGuidAwareInterface
{

	use ContractGuidAwareTrait;

	/**
	 * @var \DateTimeInterface
	 */
	private $StartDate;

	/**
	 * @var \DateTimeInterface
	 */
	private $EndDate;

	/**
	 * Constructor
	 *
	 * @var string             $ContractGUID
	 * @var \DateTimeInterface $StartDate
	 * @var \DateTimeInterface $EndDate
	 */
	public function __construct($ContractGUID, $StartDate, $EndDate)
	{
		$this->ContractGUID = $ContractGUID;
		$this->StartDate    = $StartDate;
		$this->EndDate      = $EndDate;
	}

	/**
	 * @return \DateTimeInterface
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}

	/**
	 * @param   \DateTimeInterface  $StartDate
	 *
	 * @return GetReportOnContract
	 */
	public function withStartDate($StartDate)
	{
		$new            = clone $this;
		$new->StartDate = $StartDate;

		return $new;
	}

	/**
	 * @return \DateTimeInterface
	 */
	public function getEndDate()
	{
		return $this->EndDate;
	}

	/**
	 * @param   \DateTimeInterface  $EndDate
	 *
	 * @return GetReportOnContract
	 */
	public function withEndDate($EndDate)
	{
		$new          = clone $this;
		$new->EndDate = $EndDate;

		return $new;
	}
}

