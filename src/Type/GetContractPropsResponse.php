<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\ResponseInterface;

class GetContractPropsResponse implements ResponseInterface
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

