<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ResultOfGetParcelHistory
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
    private $DeliveryTo;

    /**
     * @var string
     */
    private $PlaceTo;

    /**
     * @var string
     */
    private $Status;

    /**
     * @var \DateTimeInterface
     */
    private $DeliveryTime;

    /**
     * @var string
     */
    private $DeliveryPerson;

    /**
     * @var mixed
     */
    private $ParcelHistory;

    /**
     * @var bool
     */
    private $International;

    /**
     * @var string
     */
    private $SendingCountry;

    /**
     * @var string
     */
    private $RecipientCountry;

    /**
     * @return string
     */
    public function getParcelNumber()
    {
        return $this->ParcelNumber;
    }

    /**
     * @param string $ParcelNumber
     * @return ResultOfGetParcelHistory
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
     * @return ResultOfGetParcelHistory
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
    public function getDeliveryTo()
    {
        return $this->DeliveryTo;
    }

    /**
     * @param string $DeliveryTo
     * @return ResultOfGetParcelHistory
     */
    public function withDeliveryTo($DeliveryTo)
    {
        $new = clone $this;
        $new->DeliveryTo = $DeliveryTo;

        return $new;
    }

    /**
     * @return string
     */
    public function getPlaceTo()
    {
        return $this->PlaceTo;
    }

    /**
     * @param string $PlaceTo
     * @return ResultOfGetParcelHistory
     */
    public function withPlaceTo($PlaceTo)
    {
        $new = clone $this;
        $new->PlaceTo = $PlaceTo;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return ResultOfGetParcelHistory
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDeliveryTime()
    {
        return $this->DeliveryTime;
    }

    /**
     * @param \DateTimeInterface $DeliveryTime
     * @return ResultOfGetParcelHistory
     */
    public function withDeliveryTime($DeliveryTime)
    {
        $new = clone $this;
        $new->DeliveryTime = $DeliveryTime;

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
     * @return ResultOfGetParcelHistory
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
    public function getParcelHistory()
    {
        return $this->ParcelHistory;
    }

    /**
     * @param mixed $ParcelHistory
     * @return ResultOfGetParcelHistory
     */
    public function withParcelHistory($ParcelHistory)
    {
        $new = clone $this;
        $new->ParcelHistory = $ParcelHistory;

        return $new;
    }

    /**
     * @return bool
     */
    public function getInternational()
    {
        return $this->International;
    }

    /**
     * @param bool $International
     * @return ResultOfGetParcelHistory
     */
    public function withInternational($International)
    {
        $new = clone $this;
        $new->International = $International;

        return $new;
    }

    /**
     * @return string
     */
    public function getSendingCountry()
    {
        return $this->SendingCountry;
    }

    /**
     * @param string $SendingCountry
     * @return ResultOfGetParcelHistory
     */
    public function withSendingCountry($SendingCountry)
    {
        $new = clone $this;
        $new->SendingCountry = $SendingCountry;

        return $new;
    }

    /**
     * @return string
     */
    public function getRecipientCountry()
    {
        return $this->RecipientCountry;
    }

    /**
     * @param string $RecipientCountry
     * @return ResultOfGetParcelHistory
     */
    public function withRecipientCountry($RecipientCountry)
    {
        $new = clone $this;
        $new->RecipientCountry = $RecipientCountry;

        return $new;
    }
}

