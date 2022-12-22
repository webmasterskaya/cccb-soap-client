<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class NewApplicationResponse implements CccbResponseInterface
{
	/**
	 * @var   ResultOfNewApplication
	 */
	private $return;

	/**
	 * @return   ResultOfNewApplication
	 */
	public function getReturn()
	{
		return $this->return;
	}

	/**
	 * @param   ResultOfNewApplication  $return
	 *
	 * @return NewApplicationResponse
	 */
	public function withReturn($return)
	{
		$new         = clone $this;
		$new->return = $return;

		return $new;
	}
}

