<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ResultOfParcelInfo
{
    /**
     * @var bool
     */
    private $Found;

    /**
     * @var string
     */
    private $Status;

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
     * @var string
     */
    private $Reason;

    /**
     * @return bool
     */
    public function getFound()
    {
        return $this->Found;
    }

    /**
     * @param bool $Found
     * @return ResultOfParcelInfo
     */
    public function withFound($Found)
    {
        $new = clone $this;
        $new->Found = $Found;

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
     * @return ResultOfParcelInfo
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

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
     * @return ResultOfParcelInfo
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
     * @return ResultOfParcelInfo
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
     * @return ResultOfParcelInfo
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
     * @return ResultOfParcelInfo
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
     * @return ResultOfParcelInfo
     */
    public function withDeliveryPerson($DeliveryPerson)
    {
        $new = clone $this;
        $new->DeliveryPerson = $DeliveryPerson;

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
     * @return ResultOfParcelInfo
     */
    public function withReason($Reason)
    {
        $new = clone $this;
        $new->Reason = $Reason;

        return $new;
    }
}

