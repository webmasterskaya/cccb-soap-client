<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ResultOfGetCostStandart
{
	/**
	 * @var string
	 */
	private $ErrorText;

	/**
	 * @var float
	 */
	private $Sum;

	/**
	 * @var bool
	 */
	private $IncludeNDS;

	/**
	 * @var float
	 */
	private $RateNDS;

	/**
	 * @var float
	 */
	private $SumWithoutNDS;

	/**
	 * @var   DetailCostStandart
	 */
	private $Details;

	/**
	 * @return string
	 */
	public function getErrorText()
	{
		return $this->ErrorText;
	}

	/**
	 * @param   string  $ErrorText
	 *
	 * @return ResultOfGetCostStandart
	 */
	public function withErrorText($ErrorText)
	{
		$new            = clone $this;
		$new->ErrorText = $ErrorText;

		return $new;
	}

	/**
	 * @return float
	 */
	public function getSum()
	{
		return $this->Sum;
	}

	/**
	 * @param   float  $Sum
	 *
	 * @return ResultOfGetCostStandart
	 */
	public function withSum($Sum)
	{
		$new      = clone $this;
		$new->Sum = $Sum;

		return $new;
	}

	/**
	 * @return bool
	 */
	public function getIncludeNDS()
	{
		return $this->IncludeNDS;
	}

	/**
	 * @param   bool  $IncludeNDS
	 *
	 * @return ResultOfGetCostStandart
	 */
	public function withIncludeNDS($IncludeNDS)
	{
		$new             = clone $this;
		$new->IncludeNDS = $IncludeNDS;

		return $new;
	}

	/**
	 * @return float
	 */
	public function getRateNDS()
	{
		return $this->RateNDS;
	}

	/**
	 * @param   float  $RateNDS
	 *
	 * @return ResultOfGetCostStandart
	 */
	public function withRateNDS($RateNDS)
	{
		$new          = clone $this;
		$new->RateNDS = $RateNDS;

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
	 * @return ResultOfGetCostStandart
	 */
	public function withSumWithoutNDS($SumWithoutNDS)
	{
		$new                = clone $this;
		$new->SumWithoutNDS = $SumWithoutNDS;

		return $new;
	}

	/**
	 * @return   DetailCostStandart
	 */
	public function getDetails()
	{
		return $this->Details;
	}

	/**
	 * @param   DetailCostStandart  $Details
	 *
	 * @return ResultOfGetCostStandart
	 */
	public function withDetails($Details)
	{
		$new          = clone $this;
		$new->Details = $Details;

		return $new;
	}
}

