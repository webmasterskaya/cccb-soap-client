<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class AccountReport implements RequestInterface
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
	 * @return AccountReport
	 */
	public function withContractGUID($ContractGUID)
	{
		$new               = clone $this;
		$new->ContractGUID = $ContractGUID;

		return $new;
	}
}

