<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ParcelStatusInfo
{
    /**
     * @var string
     */
    private $ParcelNumber;

    /**
     * @var string
     */
    private $Reason;

    /**
     * @var string
     */
    private $LastStatus;

    /**
     * @var \DateTimeInterface
     */
    private $DeliveryDate;

    /**
     * @var string
     */
    private $DeliveryPerson;

    /**
     * @var mixed
     */
    private $Statuses;

    /**
     * @return string
     */
    public function getParcelNumber()
    {
        return $this->ParcelNumber;
    }

    /**
     * @param string $ParcelNumber
     * @return ParcelStatusInfo
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
    public function getReason()
    {
        return $this->Reason;
    }

    /**
     * @param string $Reason
     * @return ParcelStatusInfo
     */
    public function withReason($Reason)
    {
        $new = clone $this;
        $new->Reason = $Reason;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastStatus()
    {
        return $this->LastStatus;
    }

    /**
     * @param string $LastStatus
     * @return ParcelStatusInfo
     */
    public function withLastStatus($LastStatus)
    {
        $new = clone $this;
        $new->LastStatus = $LastStatus;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }

    /**
     * @param \DateTimeInterface $DeliveryDate
     * @return ParcelStatusInfo
     */
    public function withDeliveryDate($DeliveryDate)
    {
        $new = clone $this;
        $new->DeliveryDate = $DeliveryDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getDeliveryPerson()
    {
        return $this->DeliveryPerson;
    }

    /**
     * @param string $DeliveryPerson
     * @return ParcelStatusInfo
     */
    public function withDeliveryPerson($DeliveryPerson)
    {
        $new = clone $this;
        $new->DeliveryPerson = $DeliveryPerson;

        return $new;
    }

    /**
     * @return mixed
     */
    public function getStatuses()
    {
        return $this->Statuses;
    }

    /**
     * @param mixed $Statuses
     * @return ParcelStatusInfo
     */
    public function withStatuses($Statuses)
    {
        $new = clone $this;
        $new->Statuses = $Statuses;

        return $new;
    }
}

