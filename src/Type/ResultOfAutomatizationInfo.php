<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ResultOfAutomatizationInfo
{
    /**
     * @var bool
     */
    private $IsAutomatized;

    /**
     * @var string
     */
    private $USSName;

    /**
     * @var string
     */
    private $USSEMail;

    /**
     * @var string
     */
    private $USSCode;

    /**
     * @return bool
     */
    public function getIsAutomatized()
    {
        return $this->IsAutomatized;
    }

    /**
     * @param bool $IsAutomatized
     * @return ResultOfAutomatizationInfo
     */
    public function withIsAutomatized($IsAutomatized)
    {
        $new = clone $this;
        $new->IsAutomatized = $IsAutomatized;

        return $new;
    }

    /**
     * @return string
     */
    public function getUSSName()
    {
        return $this->USSName;
    }

    /**
     * @param string $USSName
     * @return ResultOfAutomatizationInfo
     */
    public function withUSSName($USSName)
    {
        $new = clone $this;
        $new->USSName = $USSName;

        return $new;
    }

    /**
     * @return string
     */
    public function getUSSEMail()
    {
        return $this->USSEMail;
    }

    /**
     * @param string $USSEMail
     * @return ResultOfAutomatizationInfo
     */
    public function withUSSEMail($USSEMail)
    {
        $new = clone $this;
        $new->USSEMail = $USSEMail;

        return $new;
    }

    /**
     * @return string
     */
    public function getUSSCode()
    {
        return $this->USSCode;
    }

    /**
     * @param string $USSCode
     * @return ResultOfAutomatizationInfo
     */
    public function withUSSCode($USSCode)
    {
        $new = clone $this;
        $new->USSCode = $USSCode;

        return $new;
    }
}

