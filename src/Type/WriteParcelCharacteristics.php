<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

/**
 * Метод WEB-сервиса записывает в базу ЕИС характеристики отправления. Позже эти характеристики отправления
 * используются для подстановки в документ «Прием отправлений от клиента». Характеристики отправлений хранятся в
 * регистре сведений «Характеристики отправлений с зарезервированными номерами».
 * При успешной записи возвращается Истина. Ложь возвращается, если при записи возникли какие-то ошибки,
 * например, по уникальному идентификатору в базе ЕИС не найден договор или передан пустой приемный номер отправления.
 */
class WriteParcelCharacteristics implements RequestInterface
{
    /**
     * @var string  Уникальный идентификатор договора
     */
    private $ContractGUID;

    /**
     * @var string Приемный номер отправления
     */
    private $ParcelNumber;

    /**
     * @var Parcel Характеристики отправления
     */
    private $ParcelCharacteristics;

    /**
     * Constructor
     *
     * @var string $ContractGUID
     * @var string $ParcelNumber
     * @var Parcel $ParcelCharacteristics
     */
    public function __construct(string $ContractGUID, string $ParcelNumber, Parcel $ParcelCharacteristics)
    {
        $this->ContractGUID = $ContractGUID;
        $this->ParcelNumber = $ParcelNumber;
        $this->ParcelCharacteristics = $ParcelCharacteristics;
    }

    /**
     * @return string
     */
    public function getContractGUID(): string
    {
        return $this->ContractGUID;
    }

    /**
     * @param string $ContractGUID
     * @return WriteParcelCharacteristics
     */
    public function withContractGUID(string $ContractGUID): WriteParcelCharacteristics
    {
        $new = clone $this;
        $new->ContractGUID = $ContractGUID;

        return $new;
    }

    /**
     * @return string
     */
    public function getParcelNumber(): string
    {
        return $this->ParcelNumber;
    }

    /**
     * @param string $ParcelNumber
     * @return WriteParcelCharacteristics
     */
    public function withParcelNumber(string $ParcelNumber): WriteParcelCharacteristics
    {
        $new = clone $this;
        $new->ParcelNumber = $ParcelNumber;

        return $new;
    }

    /**
     * @return Parcel
     */
    public function getParcelCharacteristics(): Parcel
    {
        return $this->ParcelCharacteristics;
    }

    /**
     * @param Parcel $ParcelCharacteristics
     * @return WriteParcelCharacteristics
     */
    public function withParcelCharacteristics(Parcel $ParcelCharacteristics): WriteParcelCharacteristics
    {
        $new = clone $this;
        $new->ParcelCharacteristics = $ParcelCharacteristics;

        return $new;
    }
}

