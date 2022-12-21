<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class SetAllApplicationTrigger implements RequestInterface, ContractGuidAwareInterface
{

	use ContractGuidAwareTrait;

	/**
	 * @var bool
	 */
	private $Flag;

	/**
	 * @var bool
	 */
	private $UseCurrentDate;

	/**
	 * Constructor
	 *
	 * @var string $ContractGUID
	 * @var bool   $Flag
	 * @var bool   $UseCurrentDate
	 */
	public function __construct($ContractGUID, $Flag, $UseCurrentDate)
	{
		$this->ContractGUID   = $ContractGUID;
		$this->Flag           = $Flag;
		$this->UseCurrentDate = $UseCurrentDate;
	}

	/**
	 * @return bool
	 */
	public function getFlag()
	{
		return $this->Flag;
	}

	/**
	 * @param   bool  $Flag
	 *
	 * @return SetAllApplicationTrigger
	 */
	public function withFlag($Flag)
	{
		$new       = clone $this;
		$new->Flag = $Flag;

		return $new;
	}

	/**
	 * @return bool
	 */
	public function getUseCurrentDate()
	{
		return $this->UseCurrentDate;
	}

	/**
	 * @param   bool  $UseCurrentDate
	 *
	 * @return SetAllApplicationTrigger
	 */
	public function withUseCurrentDate($UseCurrentDate)
	{
		$new                 = clone $this;
		$new->UseCurrentDate = $UseCurrentDate;

		return $new;
	}
}

