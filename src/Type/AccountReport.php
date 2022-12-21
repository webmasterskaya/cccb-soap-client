<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class AccountReport implements RequestInterface, ContractGuidAwareInterface
{

	use ContractGuidAwareTrait;

	/**
	 * Constructor
	 *
	 * @var string $ContractGUID
	 */
	public function __construct($ContractGUID)
	{
		$this->ContractGUID = $ContractGUID;
	}


}

