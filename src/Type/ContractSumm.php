<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ContractSumm
{
	/**
	 * @var float
	 */
	private $SummAll;

	/**
	 * @var float
	 */
	private $SummUsed;

	/**
	 * @return float
	 */
	public function getSummAll()
	{
		return $this->SummAll;
	}

	/**
	 * @param   float  $SummAll
	 *
	 * @return ContractSumm
	 */
	public function withSummAll($SummAll)
	{
		$new          = clone $this;
		$new->SummAll = $SummAll;

		return $new;
	}

	/**
	 * @return float
	 */
	public function getSummUsed()
	{
		return $this->SummUsed;
	}

	/**
	 * @param   float  $SummUsed
	 *
	 * @return ContractSumm
	 */
	public function withSummUsed($SummUsed)
	{
		$new           = clone $this;
		$new->SummUsed = $SummUsed;

		return $new;
	}
}

