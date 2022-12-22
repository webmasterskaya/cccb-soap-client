<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class IsApplicationInControlListResponse implements CccbResponseInterface
{
	/**
	 * @var bool
	 */
	private $return;

	/**
	 * @return bool
	 */
	public function getReturn()
	{
		return $this->return;
	}

	/**
	 * @param   bool  $return
	 *
	 * @return IsApplicationInControlListResponse
	 */
	public function withReturn($return)
	{
		$new         = clone $this;
		$new->return = $return;

		return $new;
	}
}

