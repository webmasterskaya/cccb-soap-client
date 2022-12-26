<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class AutomatizationInfo implements RequestInterface
{
    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\Address
     */
    private $AddressInfo;

    /**
     * Constructor
     *
     * @var \Webmasterskaya\Soap\CCCB\Type\Address $AddressInfo
     */
    public function __construct($AddressInfo)
    {
        $this->AddressInfo = $AddressInfo;
    }

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\Address
     */
    public function getAddressInfo()
    {
        return $this->AddressInfo;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\Address $AddressInfo
     * @return AutomatizationInfo
     */
    public function withAddressInfo($AddressInfo)
    {
        $new = clone $this;
        $new->AddressInfo = $AddressInfo;

        return $new;
    }
}

