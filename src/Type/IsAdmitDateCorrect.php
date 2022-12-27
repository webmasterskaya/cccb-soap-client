<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class IsAdmitDateCorrect implements RequestInterface
{
    /**
     * @var \DateTimeInterface
     */
    private $DateAdmit;

    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\AddressShort
     */
    private $AddressFrom;

    /**
     * @var bool
     */
    private $CheckRegionalHoliday;

    /**
     * Constructor
     *
     * @var \DateTimeInterface $DateAdmit
     * @var \Webmasterskaya\Soap\CCCB\Type\AddressShort $AddressFrom
     * @var bool $CheckRegionalHoliday
     */
    public function __construct($DateAdmit, $AddressFrom, $CheckRegionalHoliday)
    {
        $this->DateAdmit = $DateAdmit;
        $this->AddressFrom = $AddressFrom;
        $this->CheckRegionalHoliday = $CheckRegionalHoliday;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateAdmit()
    {
        return $this->DateAdmit;
    }

    /**
     * @param \DateTimeInterface $DateAdmit
     * @return IsAdmitDateCorrect
     */
    public function withDateAdmit($DateAdmit)
    {
        $new = clone $this;
        $new->DateAdmit = $DateAdmit;

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
     * @return IsAdmitDateCorrect
     */
    public function withAddressFrom($AddressFrom)
    {
        $new = clone $this;
        $new->AddressFrom = $AddressFrom;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCheckRegionalHoliday()
    {
        return $this->CheckRegionalHoliday;
    }

    /**
     * @param bool $CheckRegionalHoliday
     * @return IsAdmitDateCorrect
     */
    public function withCheckRegionalHoliday($CheckRegionalHoliday)
    {
        $new = clone $this;
        $new->CheckRegionalHoliday = $CheckRegionalHoliday;

        return $new;
    }
}

