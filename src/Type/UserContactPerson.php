<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class UserContactPerson
{
	/**
	 * @var string
	 */
	private $Name;

	/**
	 * @var string
	 */
	private $Phone;

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}

	/**
	 * @param   string  $Name
	 *
	 * @return UserContactPerson
	 */
	public function withName($Name)
	{
		$new       = clone $this;
		$new->Name = $Name;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getPhone()
	{
		return $this->Phone;
	}

	/**
	 * @param   string  $Phone
	 *
	 * @return UserContactPerson
	 */
	public function withPhone($Phone)
	{
		$new        = clone $this;
		$new->Phone = $Phone;

		return $new;
	}
}

