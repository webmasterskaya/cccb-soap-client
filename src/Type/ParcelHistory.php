<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ParcelHistory
{
    /**
     * @var \DateTimeInterface
     */
    private $EventDate;

    /**
     * @var string
     */
    private $EventTime;

    /**
     * @var string
     */
    private $EventType;

    /**
     * @var string
     */
    private $EventPlace;

    /**
     * @var string
     */
    private $Additionally;

    /**
     * @return \DateTimeInterface
     */
    public function getEventDate()
    {
        return $this->EventDate;
    }

    /**
     * @param \DateTimeInterface $EventDate
     * @return ParcelHistory
     */
    public function withEventDate($EventDate)
    {
        $new = clone $this;
        $new->EventDate = $EventDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getEventTime()
    {
        return $this->EventTime;
    }

    /**
     * @param string $EventTime
     * @return ParcelHistory
     */
    public function withEventTime($EventTime)
    {
        $new = clone $this;
        $new->EventTime = $EventTime;

        return $new;
    }

    /**
     * @return string
     */
    public function getEventType()
    {
        return $this->EventType;
    }

    /**
     * @param string $EventType
     * @return ParcelHistory
     */
    public function withEventType($EventType)
    {
        $new = clone $this;
        $new->EventType = $EventType;

        return $new;
    }

    /**
     * @return string
     */
    public function getEventPlace()
    {
        return $this->EventPlace;
    }

    /**
     * @param string $EventPlace
     * @return ParcelHistory
     */
    public function withEventPlace($EventPlace)
    {
        $new = clone $this;
        $new->EventPlace = $EventPlace;

        return $new;
    }

    /**
     * @return string
     */
    public function getAdditionally()
    {
        return $this->Additionally;
    }

    /**
     * @param string $Additionally
     * @return ParcelHistory
     */
    public function withAdditionally($Additionally)
    {
        $new = clone $this;
        $new->Additionally = $Additionally;

        return $new;
    }
}

