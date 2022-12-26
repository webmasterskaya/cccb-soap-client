<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class GetParcelInfo implements RequestInterface
{
    /**
     * @var string
     */
    private $ContractGUID;

    /**
     * @var string
     */
    private $ParcelNumber;

    /**
     * Constructor
     *
     * @var string $ContractGUID
     * @var string $ParcelNumber
     */
    public function __construct($ContractGUID, $ParcelNumber)
    {
        $this->ContractGUID = $ContractGUID;
        $this->ParcelNumber = $ParcelNumber;
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
     * @return GetParcelInfo
     */
    public function withContractGUID($ContractGUID)
    {
        $new = clone $this;
        $new->ContractGUID = $ContractGUID;

        return $new;
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
     * @return GetParcelInfo
     */
    public function withParcelNumber($ParcelNumber)
    {
        $new = clone $this;
        $new->ParcelNumber = $ParcelNumber;

        return $new;
    }
}

