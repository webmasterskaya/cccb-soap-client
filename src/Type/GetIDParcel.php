<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class GetIDParcel implements RequestInterface
{
    /**
     * @var string
     */
    private $UrgencyCode;

    /**
     * @var bool
     */
    private $SpecSvyazGarant;

    /**
     * Constructor
     *
     * @var string $UrgencyCode
     * @var bool $SpecSvyazGarant
     */
    public function __construct($UrgencyCode, $SpecSvyazGarant)
    {
        $this->UrgencyCode = $UrgencyCode;
        $this->SpecSvyazGarant = $SpecSvyazGarant;
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
     * @return GetIDParcel
     */
    public function withUrgencyCode($UrgencyCode)
    {
        $new = clone $this;
        $new->UrgencyCode = $UrgencyCode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSpecSvyazGarant()
    {
        return $this->SpecSvyazGarant;
    }

    /**
     * @param bool $SpecSvyazGarant
     * @return GetIDParcel
     */
    public function withSpecSvyazGarant($SpecSvyazGarant)
    {
        $new = clone $this;
        $new->SpecSvyazGarant = $SpecSvyazGarant;

        return $new;
    }
}

