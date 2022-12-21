<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\ResponseInterface;

class IsAdmitDateCorrectResponse implements ResponseInterface
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
	 * @return IsAdmitDateCorrectResponse
	 */
	public function withReturn($return)
	{
		$new         = clone $this;
		$new->return = $return;

		return $new;
	}
}

