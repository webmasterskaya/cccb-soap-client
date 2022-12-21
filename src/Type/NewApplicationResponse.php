<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\ResponseInterface;

class NewApplicationResponse implements ResponseInterface
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

