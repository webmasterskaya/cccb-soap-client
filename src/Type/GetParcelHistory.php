<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

/**
 * Метод WEB-сервиса возвращает характеристики отправления и всю историю событий по этому отправлению.
 * Запрещено предоставлять информацию по отправлениям с типом ДСП, ОВ, С, СС.
 * При попытке запросить информацию по отправлению с таким типом важности возвращается ошибка
 * «Получение информации по данному номеру отправления запрещено». Если информации по отправлению в системе ЕИС нет,
 * то возвращается ошибка «По данному номеру отправления информация не найдена».
 */
class GetParcelHistory implements RequestInterface
{
    /**
     * @var string Номер отправления, для которого запрашивается информация
     */
    private $ParcelNumber;

    /**
     * @var string Идентификатор договора контрагента СпецСвязи
     */
    private $ContractGUID;

    /**
     * Constructor
     *
     * @var string $ParcelNumber
     * @var string $ContractGUID
     */
    public function __construct(string $ParcelNumber, string $ContractGUID)
    {
        $this->ParcelNumber = $ParcelNumber;
        $this->ContractGUID = $ContractGUID;
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
     * @return GetParcelHistory
     */
    public function withParcelNumber(string $ParcelNumber): GetParcelHistory
    {
        $new = clone $this;
        $new->ParcelNumber = $ParcelNumber;

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
     * @return GetParcelHistory
     */
    public function withContractGUID(string $ContractGUID): GetParcelHistory
    {
        $new = clone $this;
        $new->ContractGUID = $ContractGUID;

        return $new;
    }
}

