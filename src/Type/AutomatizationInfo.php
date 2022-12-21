<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class AutomatizationInfo implements RequestInterface
{
    /**
     * @var  Address
     */
    private $AddressInfo;

    /**
     * Constructor
     *
     * @var  Address $AddressInfo
     */
    public function __construct($AddressInfo)
    {
        $this->AddressInfo = $AddressInfo;
    }

    /**
     * @return  Address
     */
    public function getAddressInfo()
    {
        return $this->AddressInfo;
    }

    /**
     * @param  Address $AddressInfo
     * @return AutomatizationInfo
     */
    public function withAddressInfo($AddressInfo)
    {
        $new = clone $this;
        $new->AddressInfo = $AddressInfo;

        return $new;
    }
}

