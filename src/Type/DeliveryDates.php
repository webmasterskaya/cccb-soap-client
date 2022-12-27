<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class DeliveryDates implements RequestInterface
{
    /**
     * @var string
     */
    private $ContractGUID;

    /**
     * @var \DateTimeInterface
     */
    private $DateSending;

    /**
     * @var string
     */
    private $UrgencyCode;

    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\AddressShort
     */
    private $AddressFrom;

    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\AddressShort
     */
    private $AddressTo;

    /**
     * Constructor
     *
     * @var string $ContractGUID
     * @var \DateTimeInterface $DateSending
     * @var string $UrgencyCode
     * @var \Webmasterskaya\Soap\CCCB\Type\AddressShort $AddressFrom
     * @var \Webmasterskaya\Soap\CCCB\Type\AddressShort $AddressTo
     */
    public function __construct($ContractGUID, $DateSending, $UrgencyCode, $AddressFrom, $AddressTo)
    {
        $this->ContractGUID = $ContractGUID;
        $this->DateSending = $DateSending;
        $this->UrgencyCode = $UrgencyCode;
        $this->AddressFrom = $AddressFrom;
        $this->AddressTo = $AddressTo;
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
     * @return DeliveryDates
     */
    public function withContractGUID($ContractGUID)
    {
        $new = clone $this;
        $new->ContractGUID = $ContractGUID;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateSending()
    {
        return $this->DateSending;
    }

    /**
     * @param \DateTimeInterface $DateSending
     * @return DeliveryDates
     */
    public function withDateSending($DateSending)
    {
        $new = clone $this;
        $new->DateSending = $DateSending;

        return $new;
    }

    /**
     * @return string
     */
    public function getUrgencyCode()
    {
        return $this->UrgencyCode;
    }

    /**
     * @param string $UrgencyCode
     * @return DeliveryDates
     */
    public function withUrgencyCode($UrgencyCode)
    {
        $new = clone $this;
        $new->UrgencyCode = $UrgencyCode;

        return $new;
    }

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\AddressShort
     */
    public function getAddressFrom()
    {
        return $this->AddressFrom;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\AddressShort $AddressFrom
     * @return DeliveryDates
     */
    public function withAddressFrom($AddressFrom)
    {
        $new = clone $this;
        $new->AddressFrom = $AddressFrom;

        return $new;
    }

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\AddressShort
     */
    public function getAddressTo()
    {
        return $this->AddressTo;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\AddressShort $AddressTo
     * @return DeliveryDates
     */
    public function withAddressTo($AddressTo)
    {
        $new = clone $this;
        $new->AddressTo = $AddressTo;

        return $new;
    }
}

