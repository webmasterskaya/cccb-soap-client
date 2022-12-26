<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class GetContractInfo implements RequestInterface
{
    /**
     * @var string
     */
    private $ContractGUID;

    /**
     * Constructor
     *
     * @var string $ContractGUID
     */
    public function __construct($ContractGUID)
    {
        $this->ContractGUID = $ContractGUID;
    }

    /**
     * @return string
     */
    public function getContractGUID()
    {
        return $this->ContractGUID;
    }

    /**
     * @param string $ContractGUID
     * @return GetContractInfo
     */
    public function withContractGUID($ContractGUID)
    {
        $new = clone $this;
        $new->ContractGUID = $ContractGUID;

        return $new;
    }
}

