<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\ResponseInterface;

class UpdateApplicationResponse implements ResponseInterface
{
	/**
	 * @var   ResultOfUpdateApplication
	 */
	private $return;

	/**
	 * @return   ResultOfUpdateApplication
	 */
	public function getReturn()
	{
		return $this->return;
	}

	/**
	 * @param   ResultOfUpdateApplication  $return
	 *
	 * @return UpdateApplicationResponse
	 */
	public function withReturn($return)
	{
		$new         = clone $this;
		$new->return = $return;

		return $new;
	}
}

