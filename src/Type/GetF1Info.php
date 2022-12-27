<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

/**
 * Метод WEB-сервиса возвращает информацию по отправлениям из реестра Ф1.
 * Состав реестра Ф1 хранится в регистре сведений «Состав реестров Ф1».
 * Если Реестр Ф1 принимался по договору, отличному от указанного, то возвращается пустое значение.
 * Статусы отправления, возвращаемые в свойстве «ParcelStatus» структуры ResultOfF1Info
 * могут принимать следующие значения: принято, в пути, вручено, задержано.
 */
class GetF1Info implements RequestInterface
{
    /**
     * @var string Номер реестра Ф1
     */
    private $Number;

    /**
     * @var \DateTimeInterface Дата реестра Ф1
     */
    private $Date;

    /**
     * @var string Уникальный идентификатор договора, по которому принимался реестр Ф1
     */
    private $ContractGUID;

    /**
     * Constructor
     *
     * @var string $Number
     * @var \DateTimeInterface $Date
     * @var string $ContractGUID
     */
    public function __construct(string $Number, \DateTimeInterface $Date, string $ContractGUID)
    {
        $this->Number = $Number;
        $this->Date = $Date;
        $this->ContractGUID = $ContractGUID;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->Number;
    }

    /**
     * @param string $Number
     * @return GetF1Info
     */
    public function withNumber(string $Number): GetF1Info
    {
        $new = clone $this;
        $new->Number = $Number;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate(): \DateTimeInterface
    {
        return $this->Date;
    }

    /**
     * @param \DateTimeInterface $Date
     * @return GetF1Info
     */
    public function withDate(\DateTimeInterface $Date): GetF1Info
    {
        $new = clone $this;
        $new->Date = $Date;

        return $new;
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
     * @return GetF1Info
     */
    public function withContractGUID(string $ContractGUID): GetF1Info
    {
        $new = clone $this;
        $new->ContractGUID = $ContractGUID;

        return $new;
    }
}

