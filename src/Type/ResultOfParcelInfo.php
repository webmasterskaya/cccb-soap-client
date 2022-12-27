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
    public function getFound(): bool
    {
        return $this->Found;
    }

    /**
     * @param bool $Found
     * @return ResultOfParcelInfo
     */
    public function withFound(bool $Found): ResultOfParcelInfo
    {
        $new = clone $this;
        $new->Found = $Found;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return ResultOfParcelInfo
     */
    public function withStatus(string $Status): ResultOfParcelInfo
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return string
     */
    public function getPlaceFrom(): string
    {
        return $this->PlaceFrom;
    }

    /**
     * @param string $PlaceFrom
     * @return ResultOfParcelInfo
     */
    public function withPlaceFrom(string $PlaceFrom): ResultOfParcelInfo
    {
        $new = clone $this;
        $new->PlaceFrom = $PlaceFrom;

        return $new;
    }

    /**
     * @return string
     */
    public function getPlaceTo(): string
    {
        return $this->PlaceTo;
    }

    /**
     * @param string $PlaceTo
     * @return ResultOfParcelInfo
     */
    public function withPlaceTo(string $PlaceTo): ResultOfParcelInfo
    {
        $new = clone $this;
        $new->PlaceTo = $PlaceTo;

        return $new;
    }

    /**
     * @return string
     */
    public function getPlaceCurrent(): string
    {
        return $this->PlaceCurrent;
    }

    /**
     * @param string $PlaceCurrent
     * @return ResultOfParcelInfo
     */
    public function withPlaceCurrent(string $PlaceCurrent): ResultOfParcelInfo
    {
        $new = clone $this;
        $new->PlaceCurrent = $PlaceCurrent;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDeliveryTime(): \DateTimeInterface
    {
        return $this->DeliveryTime;
    }

    /**
     * @param \DateTimeInterface $DeliveryTime
     * @return ResultOfParcelInfo
     */
    public function withDeliveryTime(\DateTimeInterface $DeliveryTime): ResultOfParcelInfo
    {
        $new = clone $this;
        $new->DeliveryTime = $DeliveryTime;

        return $new;
    }

    /**
     * @return string
     */
    public function getDeliveryPerson(): string
    {
        return $this->DeliveryPerson;
    }

    /**
     * @param string $DeliveryPerson
     * @return ResultOfParcelInfo
     */
    public function withDeliveryPerson(string $DeliveryPerson): ResultOfParcelInfo
    {
        $new = clone $this;
        $new->DeliveryPerson = $DeliveryPerson;

        return $new;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->Reason;
    }

    /**
     * @param string $Reason
     * @return ResultOfParcelInfo
     */
    public function withReason(string $Reason): ResultOfParcelInfo
    {
        $new = clone $this;
        $new->Reason = $Reason;

        return $new;
    }
}

