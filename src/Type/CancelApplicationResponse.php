<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class CancelApplicationResponse implements CccbResponseInterface
{
	/**
	 * @var   ResultOfCancelApplication
	 */
	private $return;

	/**
	 * @return   ResultOfCancelApplication
	 */
	public function getReturn()
	{
		return $this->return;
	}

	/**
	 * @param   ResultOfCancelApplication  $return
	 *
	 * @return CancelApplicationResponse
	 */
	public function withReturn($return)
	{
		$new         = clone $this;
		$new->return = $return;

		return $new;
	}
}

