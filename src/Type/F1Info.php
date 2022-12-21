<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class F1Info
{
    /**
     * @var string
     */
    private $ParcelNumber;

    /**
     * @var string
     */
    private $ParcelStatus;

    /**
     * @var string
     */
    private $PlaceFrom;

    /**
     * @var string
     */
    private $PlaceTo;

    /**
     * @var string
     */
    private $PlaceCurrent;

    /**
     * @var \DateTimeInterface
     */
    private $DeliveryTime;

    /**
     * @var string
     */
    private $DeliveryPerson;

    /**
     * @return string
     */
    public function getParcelNumber()
    {
        return $this->ParcelNumber;
    }

    /**
     * @param string $ParcelNumber
     * @return F1Info
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
    public function getParcelStatus()
    {
        return $this->ParcelStatus;
    }

    /**
     * @param string $ParcelStatus
     * @return F1Info
     */
    public function withParcelStatus($ParcelStatus)
    {
        $new = clone $this;
        $new->ParcelStatus = $ParcelStatus;

        return $new;
    }

    /**
     * @return string
     */
    public function getPlaceFrom()
    {
        return $this->PlaceFrom;
    }

    /**
     * @param string $PlaceFrom
     * @return F1Info
     */
    public function withPlaceFrom($PlaceFrom)
    {
        $new = clone $this;
        $new->PlaceFrom = $PlaceFrom;

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
     * @return F1Info
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
    public function getPlaceCurrent()
    {
        return $this->PlaceCurrent;
    }

    /**
     * @param string $PlaceCurrent
     * @return F1Info
     */
    public function withPlaceCurrent($PlaceCurrent)
    {
        $new = clone $this;
        $new->PlaceCurrent = $PlaceCurrent;

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
     * @return F1Info
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
     * @return F1Info
     */
    public function withDeliveryPerson($DeliveryPerson)
    {
        $new = clone $this;
        $new->DeliveryPerson = $DeliveryPerson;

        return $new;
    }
}

