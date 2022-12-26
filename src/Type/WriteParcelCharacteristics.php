<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class WriteParcelCharacteristics implements RequestInterface
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
     * @var \Webmasterskaya\Soap\CCCB\Type\Parcel
     */
    private $ParcelCharacteristics;

    /**
     * Constructor
     *
     * @var string $ContractGUID
     * @var string $ParcelNumber
     * @var \Webmasterskaya\Soap\CCCB\Type\Parcel $ParcelCharacteristics
     */
    public function __construct($ContractGUID, $ParcelNumber, $ParcelCharacteristics)
    {
        $this->ContractGUID = $ContractGUID;
        $this->ParcelNumber = $ParcelNumber;
        $this->ParcelCharacteristics = $ParcelCharacteristics;
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
     * @return WriteParcelCharacteristics
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
     * @return WriteParcelCharacteristics
     */
    public function withParcelNumber($ParcelNumber)
    {
        $new = clone $this;
        $new->ParcelNumber = $ParcelNumber;

        return $new;
    }

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\Parcel
     */
    public function getParcelCharacteristics()
    {
        return $this->ParcelCharacteristics;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\Parcel $ParcelCharacteristics
     * @return WriteParcelCharacteristics
     */
    public function withParcelCharacteristics($ParcelCharacteristics)
    {
        $new = clone $this;
        $new->ParcelCharacteristics = $ParcelCharacteristics;

        return $new;
    }
}

