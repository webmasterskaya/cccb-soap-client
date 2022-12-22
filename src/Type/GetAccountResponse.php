<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class GetAccountResponse implements CccbResponseInterface
{
	/**
	 * @var   ResultOfGetAccount
	 */
	private $return;

	/**
	 * @return   ResultOfGetAccount
	 */
	public function getReturn()
	{
		return $this->return;
	}

	/**
	 * @param   ResultOfGetAccount  $return
	 *
	 * @return GetAccountResponse
	 */
	public function withReturn($return)
	{
		$new         = clone $this;
		$new->return = $return;

		return $new;
	}
}

