<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class DetailCostStandart
{
	/**
	 * @var mixed
	 */
	private $Description;

	/**
	 * @var float
	 */
	private $Sum;

	/**
	 * @return mixed
	 */
	public function getDescription()
	{
		return $this->Description;
	}

	/**
	 * @param   mixed  $Description
	 *
	 * @return DetailCostStandart
	 */
	public function withDescription($Description)
	{
		$new              = clone $this;
		$new->Description = $Description;

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
	 * @return DetailCostStandart
	 */
	public function withSum($Sum)
	{
		$new      = clone $this;
		$new->Sum = $Sum;

		return $new;
	}
}

