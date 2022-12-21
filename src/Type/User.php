<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class User
{
	/**
	 * @var string
	 */
	private $GUID;

	/**
	 * @var string
	 */
	private $INN;

	/**
	 * @var string
	 */
	private $KPP;

	/**
	 * @var string
	 */
	private $Name;

	/**
	 * @var string
	 */
	private $NameFull;

	/**
	 * @var   UserContactPerson
	 */
	private $ContactPerson;

	/**
	 * @var   Address
	 */
	private $Address;

	/**
	 * @return string
	 */
	public function getGUID()
	{
		return $this->GUID;
	}

	/**
	 * @param   string  $GUID
	 *
	 * @return User
	 */
	public function withGUID($GUID)
	{
		$new       = clone $this;
		$new->GUID = $GUID;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getINN()
	{
		return $this->INN;
	}

	/**
	 * @param   string  $INN
	 *
	 * @return User
	 */
	public function withINN($INN)
	{
		$new      = clone $this;
		$new->INN = $INN;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getKPP()
	{
		return $this->KPP;
	}

	/**
	 * @param   string  $KPP
	 *
	 * @return User
	 */
	public function withKPP($KPP)
	{
		$new      = clone $this;
		$new->KPP = $KPP;

		return $new;
	}

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
	 * @return User
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
	public function getNameFull()
	{
		return $this->NameFull;
	}

	/**
	 * @param   string  $NameFull
	 *
	 * @return User
	 */
	public function withNameFull($NameFull)
	{
		$new           = clone $this;
		$new->NameFull = $NameFull;

		return $new;
	}

	/**
	 * @return   UserContactPerson
	 */
	public function getContactPerson()
	{
		return $this->ContactPerson;
	}

	/**
	 * @param   UserContactPerson  $ContactPerson
	 *
	 * @return User
	 */
	public function withContactPerson($ContactPerson)
	{
		$new                = clone $this;
		$new->ContactPerson = $ContactPerson;

		return $new;
	}

	/**
	 * @return   Address
	 */
	public function getAddress()
	{
		return $this->Address;
	}

	/**
	 * @param   Address  $Address
	 *
	 * @return User
	 */
	public function withAddress($Address)
	{
		$new          = clone $this;
		$new->Address = $Address;

		return $new;
	}
}

