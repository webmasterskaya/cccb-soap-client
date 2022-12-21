<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class AddressShort
{
	/**
	 * @var string
	 */
	private $AddressText;

	/**
	 * @var string
	 */
	private $Region;

	/**
	 * @var string
	 */
	private $District;

	/**
	 * @var string
	 */
	private $City;

	/**
	 * @var string
	 */
	private $Locality;

	/**
	 * @var bool
	 */
	private $International;

	/**
	 * @var string
	 */
	private $Country;

	/**
	 * @var bool
	 */
	private $AddressInTheCapital;

	/**
	 * @return string
	 */
	public function getAddressText()
	{
		return $this->AddressText;
	}

	/**
	 * @param   string  $AddressText
	 *
	 * @return AddressShort
	 */
	public function withAddressText($AddressText)
	{
		$new              = clone $this;
		$new->AddressText = $AddressText;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getRegion()
	{
		return $this->Region;
	}

	/**
	 * @param   string  $Region
	 *
	 * @return AddressShort
	 */
	public function withRegion($Region)
	{
		$new         = clone $this;
		$new->Region = $Region;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getDistrict()
	{
		return $this->District;
	}

	/**
	 * @param   string  $District
	 *
	 * @return AddressShort
	 */
	public function withDistrict($District)
	{
		$new           = clone $this;
		$new->District = $District;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getCity()
	{
		return $this->City;
	}

	/**
	 * @param   string  $City
	 *
	 * @return AddressShort
	 */
	public function withCity($City)
	{
		$new       = clone $this;
		$new->City = $City;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getLocality()
	{
		return $this->Locality;
	}

	/**
	 * @param   string  $Locality
	 *
	 * @return AddressShort
	 */
	public function withLocality($Locality)
	{
		$new           = clone $this;
		$new->Locality = $Locality;

		return $new;
	}

	/**
	 * @return bool
	 */
	public function getInternational()
	{
		return $this->International;
	}

	/**
	 * @param   bool  $International
	 *
	 * @return AddressShort
	 */
	public function withInternational($International)
	{
		$new                = clone $this;
		$new->International = $International;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getCountry()
	{
		return $this->Country;
	}

	/**
	 * @param   string  $Country
	 *
	 * @return AddressShort
	 */
	public function withCountry($Country)
	{
		$new          = clone $this;
		$new->Country = $Country;

		return $new;
	}

	/**
	 * @return bool
	 */
	public function getAddressInTheCapital()
	{
		return $this->AddressInTheCapital;
	}

	/**
	 * @param   bool  $AddressInTheCapital
	 *
	 * @return AddressShort
	 */
	public function withAddressInTheCapital($AddressInTheCapital)
	{
		$new                      = clone $this;
		$new->AddressInTheCapital = $AddressInTheCapital;

		return $new;
	}
}

