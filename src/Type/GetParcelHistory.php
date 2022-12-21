<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class GetParcelHistory implements RequestInterface
{
    /**
     * @var string
     */
    private $ParcelNumber;

    /**
     * @var string
     */
    private $ContractGUID;

    /**
     * Constructor
     *
     * @var string $ParcelNumber
     * @var string $ContractGUID
     */
    public function __construct($ParcelNumber, $ContractGUID)
    {
        $this->ParcelNumber = $ParcelNumber;
        $this->ContractGUID = $ContractGUID;
    }

    /**
     * @return string
     */
    public function getParcelNumber()
    {
        return $this->ParcelNumber;
    }

    /**
     * @param string $ParcelNumber
     * @return GetParcelHistory
     */
    public function withParcelNumber($ParcelNumber)
    {
        $new = clone $this;
        $new->ParcelNumber = $ParcelNumber;

        return $new;
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
     * @return GetParcelHistory
     */
    public function withContractGUID($ContractGUID)
    {
        $new = clone $this;
        $new->ContractGUID = $ContractGUID;

        return $new;
    }
}

