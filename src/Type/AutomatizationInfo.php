<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

/**
 * <p>Операция AutomatizationInfo WEB-сервиса возвращает информацию об УСС,
 * который обслуживает адрес, переданный в качестве входного параметра</p>
 */
class AutomatizationInfo implements RequestInterface
{
    /**
     * @var Address адрес для проверки
     */
    private $AddressInfo;

    /**
     * Constructor
     *
     * @var Address $AddressInfo
     */
    public function __construct(Address $AddressInfo)
    {
        $this->AddressInfo = $AddressInfo;
    }

    /**
     * @return Address
     */
    public function getAddressInfo(): Address
    {
        return $this->AddressInfo;
    }

    /**
     * @param Address $AddressInfo
     * @return AutomatizationInfo
     */
    public function withAddressInfo(Address $AddressInfo): AutomatizationInfo
    {
        $new = clone $this;
        $new->AddressInfo = $AddressInfo;

        return $new;
    }
}

