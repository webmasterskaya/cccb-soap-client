<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class StringOfAccountReport
{
	/**
	 * @var string
	 */
	private $CheckNumber;

	/**
	 * @var \DateTimeInterface
	 */
	private $CheckDate;

	/**
	 * @var float
	 */
	private $SumWithoutNDS;

	/**
	 * @var float
	 */
	private $NDS;

	/**
	 * @var float
	 */
	private $TotalSum;

	/**
	 * @return string
	 */
	public function getCheckNumber()
	{
		return $this->CheckNumber;
	}

	/**
	 * @param   string  $CheckNumber
	 *
	 * @return StringOfAccountReport
	 */
	public function withCheckNumber($CheckNumber)
	{
		$new              = clone $this;
		$new->CheckNumber = $CheckNumber;

		return $new;
	}

	/**
	 * @return \DateTimeInterface
	 */
	public function getCheckDate()
	{
		return $this->CheckDate;
	}

	/**
	 * @param   \DateTimeInterface  $CheckDate
	 *
	 * @return StringOfAccountReport
	 */
	public function withCheckDate($CheckDate)
	{
		$new            = clone $this;
		$new->CheckDate = $CheckDate;

		return $new;
	}

	/**
	 * @return float
	 */
	public function getSumWithoutNDS()
	{
		return $this->SumWithoutNDS;
	}

	/**
	 * @param   float  $SumWithoutNDS
	 *
	 * @return StringOfAccountReport
	 */
	public function withSumWithoutNDS($SumWithoutNDS)
	{
		$new                = clone $this;
		$new->SumWithoutNDS = $SumWithoutNDS;

		return $new;
	}

	/**
	 * @return float
	 */
	public function getNDS()
	{
		return $this->NDS;
	}

	/**
	 * @param   float  $NDS
	 *
	 * @return StringOfAccountReport
	 */
	public function withNDS($NDS)
	{
		$new      = clone $this;
		$new->NDS = $NDS;

		return $new;
	}

	/**
	 * @return float
	 */
	public function getTotalSum()
	{
		return $this->TotalSum;
	}

	/**
	 * @param   float  $TotalSum
	 *
	 * @return StringOfAccountReport
	 */
	public function withTotalSum($TotalSum)
	{
		$new           = clone $this;
		$new->TotalSum = $TotalSum;

		return $new;
	}
}

