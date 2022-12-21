<?php

namespace Webmasterskaya\Soap\CCCB\Type;

interface ContractGuidAwareInterface
{
	public function getContractGUID();

	public function withContractGUID($ContractGUID);
}