<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class DeliveryDatesResponse implements CccbResponseInterface
{
	/**
	 * @var   ResultOfOperation
	 */
	private $return;

	/**
	 * @return   ResultOfOperation
	 */
	public function getReturn()
	{
		return $this->return;
	}

	/**
	 * @param   ResultOfOperation  $return
	 *
	 * @return DeliveryDatesResponse
	 */
	public function withReturn($return)
	{
		$new         = clone $this;
		$new->return = $return;

		return $new;
	}
}

