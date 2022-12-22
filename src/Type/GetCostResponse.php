<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class GetCostResponse implements CccbResponseInterface
{
	/**
	 * @var   ResultOfGetCost
	 */
	private $return;

	/**
	 * @return   ResultOfGetCost
	 */
	public function getReturn()
	{
		return $this->return;
	}

	/**
	 * @param   ResultOfGetCost  $return
	 *
	 * @return GetCostResponse
	 */
	public function withReturn($return)
	{
		$new         = clone $this;
		$new->return = $return;

		return $new;
	}
}

