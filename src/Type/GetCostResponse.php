<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\ResponseInterface;

class GetCostResponse implements ResponseInterface
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

