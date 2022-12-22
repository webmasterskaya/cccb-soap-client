<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class UpdateApplicationResponse implements CccbResponseInterface
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

