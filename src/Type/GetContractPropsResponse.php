<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class GetContractPropsResponse implements CccbResponseInterface
{
	/**
	 * @var   ContractProps
	 */
	private $return;

	/**
	 * @return   ContractProps
	 */
	public function getReturn()
	{
		return $this->return;
	}

	/**
	 * @param   ContractProps  $return
	 *
	 * @return GetContractPropsResponse
	 */
	public function withReturn($return)
	{
		$new         = clone $this;
		$new->return = $return;

		return $new;
	}
}

