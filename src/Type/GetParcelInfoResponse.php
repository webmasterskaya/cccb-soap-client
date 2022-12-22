<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class GetParcelInfoResponse implements CccbResponseInterface
{
	/**
	 * @var   ResultOfParcelInfo
	 */
	private $return;

	/**
	 * @return   ResultOfParcelInfo
	 */
	public function getReturn()
	{
		return $this->return;
	}

	/**
	 * @param   ResultOfParcelInfo  $return
	 *
	 * @return GetParcelInfoResponse
	 */
	public function withReturn($return)
	{
		$new         = clone $this;
		$new->return = $return;

		return $new;
	}
}

