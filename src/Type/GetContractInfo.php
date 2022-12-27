<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

/**
 * Метод WEB-сервиса возвращает информацию о принятых за последние 3 месяца отправлениях по договору.
 */
class GetContractInfo implements RequestInterface
{
    /**
     * @var string Уникальный идентификатор договора
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
     * @return GetContractInfo
     */
    public function withContractGUID(string $ContractGUID): GetContractInfo
    {
        $new = clone $this;
        $new->ContractGUID = $ContractGUID;

        return $new;
    }
}

