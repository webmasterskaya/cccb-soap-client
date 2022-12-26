<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class Address
{
    /**
     * @var string
     */
    private $AddressText;

    /**
     * @var string
     */
    private $Index;

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
     * @var string
     */
    private $Street;

    /**
     * @var string
     */
    private $HouseType;

    /**
     * @var string
     */
    private $House;

    /**
     * @var string
     */
    private $HousingType;

    /**
     * @var string
     */
    private $Housing;

    /**
     * @var string
     */
    private $OfficeType;

    /**
     * @var string
     */
    private $Office;

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
     * @param string $AddressText
     * @return Address
     */
    public function withAddressText($AddressText)
    {
        $new = clone $this;
        $new->AddressText = $AddressText;

        return $new;
    }

    /**
     * @return string
     */
    public function getIndex()
    {
        return $this->Index;
    }

    /**
     * @param string $Index
     * @return Address
     */
    public function withIndex($Index)
    {
        $new = clone $this;
        $new->Index = $Index;

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
     * @param string $Region
     * @return Address
     */
    public function withRegion($Region)
    {
        $new = clone $this;
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
     * @param string $District
     * @return Address
     */
    public function withDistrict($District)
    {
        $new = clone $this;
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
     * @param string $City
     * @return Address
     */
    public function withCity($City)
    {
        $new = clone $this;
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
     * @param string $Locality
     * @return Address
     */
    public function withLocality($Locality)
    {
        $new = clone $this;
        $new->Locality = $Locality;

        return $new;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * @param string $Street
     * @return Address
     */
    public function withStreet($Street)
    {
        $new = clone $this;
        $new->Street = $Street;

        return $new;
    }

    /**
     * @return string
     */
    public function getHouseType()
    {
        return $this->HouseType;
    }

    /**
     * @param string $HouseType
     * @return Address
     */
    public function withHouseType($HouseType)
    {
        $new = clone $this;
        $new->HouseType = $HouseType;

        return $new;
    }

    /**
     * @return string
     */
    public function getHouse()
    {
        return $this->House;
    }

    /**
     * @param string $House
     * @return Address
     */
    public function withHouse($House)
    {
        $new = clone $this;
        $new->House = $House;

        return $new;
    }

    /**
     * @return string
     */
    public function getHousingType()
    {
        return $this->HousingType;
    }

    /**
     * @param string $HousingType
     * @return Address
     */
    public function withHousingType($HousingType)
    {
        $new = clone $this;
        $new->HousingType = $HousingType;

        return $new;
    }

    /**
     * @return string
     */
    public function getHousing()
    {
        return $this->Housing;
    }

    /**
     * @param string $Housing
     * @return Address
     */
    public function withHousing($Housing)
    {
        $new = clone $this;
        $new->Housing = $Housing;

        return $new;
    }

    /**
     * @return string
     */
    public function getOfficeType()
    {
        return $this->OfficeType;
    }

    /**
     * @param string $OfficeType
     * @return Address
     */
    public function withOfficeType($OfficeType)
    {
        $new = clone $this;
        $new->OfficeType = $OfficeType;

        return $new;
    }

    /**
     * @return string
     */
    public function getOffice()
    {
        return $this->Office;
    }

    /**
     * @param string $Office
     * @return Address
     */
    public function withOffice($Office)
    {
        $new = clone $this;
        $new->Office = $Office;

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
     * @param bool $International
     * @return Address
     */
    public function withInternational($International)
    {
        $new = clone $this;
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
     * @param string $Country
     * @return Address
     */
    public function withCountry($Country)
    {
        $new = clone $this;
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
     * @param bool $AddressInTheCapital
     * @return Address
     */
    public function withAddressInTheCapital($AddressInTheCapital)
    {
        $new = clone $this;
        $new->AddressInTheCapital = $AddressInTheCapital;

        return $new;
    }
}

