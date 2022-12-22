<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class GetCostStandartResponse implements CccbResponseInterface
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

