<?php

namespace Webmasterskaya\Soap\CCCB\Type;

trait ContractGuidAwareTrait
{
	/**
	 * @var string
	 */
	private $ContractGUID;

	/**
	 * @return string
	 */
	public function getContractGUID()
	{
		return $this->ContractGUID;
	}

	/**
	 * @param   string  $ContractGUID
	 *
	 * @return static
	 */
	public function withContractGUID($ContractGUID)
	{
		$new               = clone $this;
		$new->ContractGUID = $ContractGUID;

		return $new;
	}
}