<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use DateTimeInterface;

class Addressee
{
    /**
     * @var string Наименование организации/ФИО
     */
    private $Name;

    /**
     * @var string ИНН (только для организации)
     */
    private $INN;

    /**
     * @var string КПП (только для организации)
     */
    private $KPP;

    /**
     * @var string Тип Юр или Физ лицо (Физлицо: "physical";  Юрлицо"legal")
     */
    private $AddresseeTypeCode;

    /**
     * @var string Пол адресата
     */
    private $SexCode;

    /**
     * @var DateTimeInterface День рождения
     */
    private $Birthday;

    /**
     * @var string Серия паспорта
     */
    private $PassportSeries;

    /**
     * @var string Номер паспорта
     */
    private $PassportNumber;

    /**
     * @var string Дата выдачи паспорта
     */
    private $PassportDate;

    /**
     * @var string Кем выдан паспорт
     */
    private $PassportIssuer;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return Addressee
     */
    public function withName(string $Name): Addressee
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getINN(): string
    {
        return $this->INN;
    }

    /**
     * @param string $INN
     * @return Addressee
     */
    public function withINN(string $INN): Addressee
    {
        $new = clone $this;
        $new->INN = $INN;

        return $new;
    }

    /**
     * @return string
     */
    public function getKPP(): string
    {
        return $this->KPP;
    }

    /**
     * @param string $KPP
     * @return Addressee
     */
    public function withKPP(string $KPP): Addressee
    {
        $new = clone $this;
        $new->KPP = $KPP;

        return $new;
    }

    /**
     * @return string
     */
    public function getAddresseeTypeCode(): string
    {
        return $this->AddresseeTypeCode;
    }

    /**
     * @param string $AddresseeTypeCode
     * @return Addressee
     */
    public function withAddresseeTypeCode(string $AddresseeTypeCode): Addressee
    {
        $new = clone $this;
        $new->AddresseeTypeCode = $AddresseeTypeCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getSexCode(): string
    {
        return $this->SexCode;
    }

    /**
     * @param string $SexCode
     * @return Addressee
     */
    public function withSexCode(string $SexCode): Addressee
    {
        $new = clone $this;
        $new->SexCode = $SexCode;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getBirthday(): DateTimeInterface
    {
        return $this->Birthday;
    }

    /**
     * @param DateTimeInterface $Birthday
     * @return Addressee
     */
    public function withBirthday(DateTimeInterface $Birthday): Addressee
    {
        $new = clone $this;
        $new->Birthday = $Birthday;

        return $new;
    }

    /**
     * @return string
     */
    public function getPassportSeries(): string
    {
        return $this->PassportSeries;
    }

    /**
     * @param string $PassportSeries
     * @return Addressee
     */
    public function withPassportSeries(string $PassportSeries): Addressee
    {
        $new = clone $this;
        $new->PassportSeries = $PassportSeries;

        return $new;
    }

    /**
     * @return string
     */
    public function getPassportNumber(): string
    {
        return $this->PassportNumber;
    }

    /**
     * @param string $PassportNumber
     * @return Addressee
     */
    public function withPassportNumber(string $PassportNumber): Addressee
    {
        $new = clone $this;
        $new->PassportNumber = $PassportNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getPassportDate(): string
    {
        return $this->PassportDate;
    }

    /**
     * @param string $PassportDate
     * @return Addressee
     */
    public function withPassportDate(string $PassportDate): Addressee
    {
        $new = clone $this;
        $new->PassportDate = $PassportDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getPassportIssuer(): string
    {
        return $this->PassportIssuer;
    }

    /**
     * @param string $PassportIssuer
     * @return Addressee
     */
    public function withPassportIssuer(string $PassportIssuer): Addressee
    {
        $new = clone $this;
        $new->PassportIssuer = $PassportIssuer;

        return $new;
    }
}

