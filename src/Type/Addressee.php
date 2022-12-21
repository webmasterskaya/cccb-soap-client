<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class Addressee
{
	/**
	 * @var string
	 */
	private $Name;

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
	private $AddresseeTypeCode;

	/**
	 * @var string
	 */
	private $SexCode;

	/**
	 * @var \DateTimeInterface
	 */
	private $Birthday;

	/**
	 * @var string
	 */
	private $PassportSeries;

	/**
	 * @var string
	 */
	private $PassportNumber;

	/**
	 * @var string
	 */
	private $PassportDate;

	/**
	 * @var string
	 */
	private $PassportIssuer;

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
	 * @return Addressee
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
	public function getINN()
	{
		return $this->INN;
	}

	/**
	 * @param   string  $INN
	 *
	 * @return Addressee
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
	 * @return Addressee
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
	public function getAddresseeTypeCode()
	{
		return $this->AddresseeTypeCode;
	}

	/**
	 * @param   string  $AddresseeTypeCode
	 *
	 * @return Addressee
	 */
	public function withAddresseeTypeCode($AddresseeTypeCode)
	{
		$new                    = clone $this;
		$new->AddresseeTypeCode = $AddresseeTypeCode;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getSexCode()
	{
		return $this->SexCode;
	}

	/**
	 * @param   string  $SexCode
	 *
	 * @return Addressee
	 */
	public function withSexCode($SexCode)
	{
		$new          = clone $this;
		$new->SexCode = $SexCode;

		return $new;
	}

	/**
	 * @return \DateTimeInterface
	 */
	public function getBirthday()
	{
		return $this->Birthday;
	}

	/**
	 * @param   \DateTimeInterface  $Birthday
	 *
	 * @return Addressee
	 */
	public function withBirthday($Birthday)
	{
		$new           = clone $this;
		$new->Birthday = $Birthday;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getPassportSeries()
	{
		return $this->PassportSeries;
	}

	/**
	 * @param   string  $PassportSeries
	 *
	 * @return Addressee
	 */
	public function withPassportSeries($PassportSeries)
	{
		$new                 = clone $this;
		$new->PassportSeries = $PassportSeries;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getPassportNumber()
	{
		return $this->PassportNumber;
	}

	/**
	 * @param   string  $PassportNumber
	 *
	 * @return Addressee
	 */
	public function withPassportNumber($PassportNumber)
	{
		$new                 = clone $this;
		$new->PassportNumber = $PassportNumber;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getPassportDate()
	{
		return $this->PassportDate;
	}

	/**
	 * @param   string  $PassportDate
	 *
	 * @return Addressee
	 */
	public function withPassportDate($PassportDate)
	{
		$new               = clone $this;
		$new->PassportDate = $PassportDate;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getPassportIssuer()
	{
		return $this->PassportIssuer;
	}

	/**
	 * @param   string  $PassportIssuer
	 *
	 * @return Addressee
	 */
	public function withPassportIssuer($PassportIssuer)
	{
		$new                 = clone $this;
		$new->PassportIssuer = $PassportIssuer;

		return $new;
	}
}

