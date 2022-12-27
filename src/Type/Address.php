<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class Address
{
    /**
     * @var string Текстовое представление адреса в формате ФИАС
     */
    private $AddressText;

    /**
     * @var string Почтовый индекс
     */
    private $Index;

    /**
     * @var string Регион
     */
    private $Region;

    /**
     * @var string Район
     */
    private $District;

    /**
     * @var string Город
     */
    private $City;

    /**
     * @var string Населеный пункт
     */
    private $Locality;

    /**
     * @var string Улица
     */
    private $Street;

    /**
     * @var string Тип дома
     */
    private $HouseType;

    /**
     * @var string Дом
     */
    private $House;

    /**
     * @var string Тип Корпуса
     */
    private $HousingType;

    /**
     * @var string Корпус
     */
    private $Housing;

    /**
     * @var string Тип офиса
     */
    private $OfficeType;

    /**
     * @var string Офис
     */
    private $Office;

    /**
     * @var bool Иностраный адрес
     */
    private $International = false;

    /**
     * @var string Страна
     */
    private $Country;

    /**
     * @var bool Адрес в стлице иностранного государства
     */
    private $AddressInTheCapital = false;

    /**
     * @return string
     */
    public function getAddressText(): string
    {
        return $this->AddressText;
    }

    /**
     * @param string $AddressText
     * @return Address
     */
    public function withAddressText(string $AddressText): Address
    {
        $new = clone $this;
        $new->AddressText = $AddressText;

        return $new;
    }

    /**
     * @return string
     */
    public function getIndex(): string
    {
        return $this->Index;
    }

    /**
     * @param string $Index
     * @return Address
     */
    public function withIndex(string $Index): Address
    {
        $new = clone $this;
        $new->Index = $Index;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegion(): string
    {
        return $this->Region;
    }

    /**
     * @param string $Region
     * @return Address
     */
    public function withRegion(string $Region): Address
    {
        $new = clone $this;
        $new->Region = $Region;

        return $new;
    }

    /**
     * @return string
     */
    public function getDistrict(): string
    {
        return $this->District;
    }

    /**
     * @param string $District
     * @return Address
     */
    public function withDistrict(string $District): Address
    {
        $new = clone $this;
        $new->District = $District;

        return $new;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return Address
     */
    public function withCity(string $City): Address
    {
        $new = clone $this;
        $new->City = $City;

        return $new;
    }

    /**
     * @return string
     */
    public function getLocality(): string
    {
        return $this->Locality;
    }

    /**
     * @param string $Locality
     * @return Address
     */
    public function withLocality(string $Locality): Address
    {
        $new = clone $this;
        $new->Locality = $Locality;

        return $new;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->Street;
    }

    /**
     * @param string $Street
     * @return Address
     */
    public function withStreet(string $Street): Address
    {
        $new = clone $this;
        $new->Street = $Street;

        return $new;
    }

    /**
     * @return string
     */
    public function getHouseType(): string
    {
        return $this->HouseType;
    }

    /**
     * @param string $HouseType
     * @return Address
     */
    public function withHouseType(string $HouseType): Address
    {
        $new = clone $this;
        $new->HouseType = $HouseType;

        return $new;
    }

    /**
     * @return string
     */
    public function getHouse(): string
    {
        return $this->House;
    }

    /**
     * @param string $House
     * @return Address
     */
    public function withHouse(string $House): Address
    {
        $new = clone $this;
        $new->House = $House;

        return $new;
    }

    /**
     * @return string
     */
    public function getHousingType(): string
    {
        return $this->HousingType;
    }

    /**
     * @param string $HousingType
     * @return Address
     */
    public function withHousingType(string $HousingType): Address
    {
        $new = clone $this;
        $new->HousingType = $HousingType;

        return $new;
    }

    /**
     * @return string
     */
    public function getHousing(): string
    {
        return $this->Housing;
    }

    /**
     * @param string $Housing
     * @return Address
     */
    public function withHousing(string $Housing): Address
    {
        $new = clone $this;
        $new->Housing = $Housing;

        return $new;
    }

    /**
     * @return string
     */
    public function getOfficeType(): string
    {
        return $this->OfficeType;
    }

    /**
     * @param string $OfficeType
     * @return Address
     */
    public function withOfficeType(string $OfficeType): Address
    {
        $new = clone $this;
        $new->OfficeType = $OfficeType;

        return $new;
    }

    /**
     * @return string
     */
    public function getOffice(): string
    {
        return $this->Office;
    }

    /**
     * @param string $Office
     * @return Address
     */
    public function withOffice(string $Office): Address
    {
        $new = clone $this;
        $new->Office = $Office;

        return $new;
    }

    /**
     * @return bool
     */
    public function getInternational(): bool
    {
        return $this->International;
    }

    /**
     * @param bool $International
     * @return Address
     */
    public function withInternational(bool $International): Address
    {
        $new = clone $this;
        $new->International = $International;

        return $new;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->Country;
    }

    /**
     * @param string $Country
     * @return Address
     */
    public function withCountry(string $Country): Address
    {
        $new = clone $this;
        $new->Country = $Country;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAddressInTheCapital(): bool
    {
        return $this->AddressInTheCapital;
    }

    /**
     * @param bool $AddressInTheCapital
     * @return Address
     */
    public function withAddressInTheCapital(bool $AddressInTheCapital): Address
    {
        $new = clone $this;
        $new->AddressInTheCapital = $AddressInTheCapital;

        return $new;
    }
}

