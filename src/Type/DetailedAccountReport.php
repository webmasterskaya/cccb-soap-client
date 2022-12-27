<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

/**
 * Метод WEB-сервиса возвращает информацию о принятых отправлениях договора за последние 3 месяца.
 * Информация об отправлениях включает в себя сведения о Заявке, по которой принято отправление,
 * месте сбора и назначения и сумму доставки отправления. На данный момент информация о сумме доставки
 * отправления не заполняется (сумма без НДС, Сумма НДС и Сумма с НДС равны 0).
 */
class DetailedAccountReport implements RequestInterface
{
    /**
     * @var string Идентификатор договора контрагента
     */
    private $ContractGUID;

    /**
     * Constructor
     *
     * @var string $ContractGUID
     */
    public function __construct(string $ContractGUID)
    {
        $this->ContractGUID = $ContractGUID;
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
     * @return DetailedAccountReport
     */
    public function withContractGUID(string $ContractGUID): DetailedAccountReport
    {
        $new = clone $this;
        $new->ContractGUID = $ContractGUID;

        return $new;
    }
}

