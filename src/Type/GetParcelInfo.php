<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

/**
 * <p>Метод возвращает информацию об отправлении с указанным приемным номером.</p>
 *
 * <p>Если информации об отправлении с указанным приемным номером не обнаружено или договор,
 * по которому принято отправление отличается от переданного в качестве параметра договора,
 * возвращается ошибка «По данному номеру отправления информация не найдена».</p>
 *
 * <p>Запрещено предоставлять информацию по отправлениям с типом ДСП, ОВ, С, СС.
 * При попытке запросить информацию по отправлению с таким типом важности возвращается ошибка
 * «Получение информации по данному номеру отправления запрещено».
 * Статусы отправления, возвращаемые в свойстве «Status» структуры ResultOfParcelInfo
 * могут принимать следующие значения: принято, в пути, вручено.</p>
 */
class GetParcelInfo implements RequestInterface
{
    /**
     * @var string Идентификатор договора контрагента СпецСвязи
     */
    private $ContractGUID;

    /**
     * @var string Приемный номер отправления
     */
    private $ParcelNumber;

    /**
     * Constructor
     *
     * @var string|null $ContractGUID
     * @var string $ParcelNumber
     */
    public function __construct(string $ContractGUID, string $ParcelNumber)
    {
        $this->ContractGUID = $ContractGUID;
        $this->ParcelNumber = $ParcelNumber;
    }

    /**
     * @return string
     */
    public function getContractGUID(): ?string
    {
        return $this->ContractGUID;
    }

    /**
     * @param string $ContractGUID
     * @return GetParcelInfo
     */
    public function withContractGUID(string $ContractGUID): GetParcelInfo
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
     * @return GetParcelInfo
     */
    public function withParcelNumber(string $ParcelNumber): GetParcelInfo
    {
        $new = clone $this;
        $new->ParcelNumber = $ParcelNumber;

        return $new;
    }
}

