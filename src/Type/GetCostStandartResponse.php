<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\ResponseInterface;

class GetCostStandartResponse implements ResponseInterface
{
	/**
	 * @var   ResultOfGetCostStandart
	 */
	private $return;

	/**
	 * @return   ResultOfGetCostStandart
	 */
	public function getReturn()
	{
		return $this->return;
	}

	/**
	 * @param   ResultOfGetCostStandart  $return
	 *
	 * @return GetCostStandartResponse
	 */
	public function withReturn($return)
	{
		$new         = clone $this;
		$new->return = $return;

		return $new;
	}
}

