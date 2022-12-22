<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class RegistrationResponse implements CccbResponseInterface
{
	/**
	 * @var   ResultOfRegistration
	 */
	private $return;

	/**
	 * @return   ResultOfRegistration
	 */
	public function getReturn()
	{
		return $this->return;
	}

	/**
	 * @param   ResultOfRegistration  $return
	 *
	 * @return RegistrationResponse
	 */
	public function withReturn($return)
	{
		$new         = clone $this;
		$new->return = $return;

		return $new;
	}
}

