<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class GetContractInfoResponse implements CccbResponseInterface
{
	/**
	 * @var   ResultOfContractInfo
	 */
	private $return;

	/**
	 * @return   ResultOfContractInfo
	 */
	public function getReturn()
	{
		return $this->return;
	}

	/**
	 * @param   ResultOfContractInfo  $return
	 *
	 * @return GetContractInfoResponse
	 */
	public function withReturn($return)
	{
		$new         = clone $this;
		$new->return = $return;

		return $new;
	}
}

