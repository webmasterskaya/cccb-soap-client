<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ContractProps
{
    /**
     * @var bool
     */
    private $IsError;

    /**
     * @var string
     */
    private $ErrorText;

    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\User
     */
    private $Client;

    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\ContractMainProps
     */
    private $MainProps;

    /**
     * @var string
     */
    private $Services;

    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\ContractManager
     */
    private $Manager;

    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\ContractSumm
     */
    private $Summ;

    /**
     * @return bool
     */
    public function getIsError()
    {
        return $this->IsError;
    }

    /**
     * @param bool $IsError
     * @return ContractProps
     */
    public function withIsError($IsError)
    {
        $new = clone $this;
        $new->IsError = $IsError;

        return $new;
    }

    /**
     * @return string
     */
    public function getErrorText()
    {
        return $this->ErrorText;
    }

    /**
     * @param string $ErrorText
     * @return ContractProps
     */
    public function withErrorText($ErrorText)
    {
        $new = clone $this;
        $new->ErrorText = $ErrorText;

        return $new;
    }

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\User
     */
    public function getClient()
    {
        return $this->Client;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\User $Client
     * @return ContractProps
     */
    public function withClient($Client)
    {
        $new = clone $this;
        $new->Client = $Client;

        return $new;
    }

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\ContractMainProps
     */
    public function getMainProps()
    {
        return $this->MainProps;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\ContractMainProps $MainProps
     * @return ContractProps
     */
    public function withMainProps($MainProps)
    {
        $new = clone $this;
        $new->MainProps = $MainProps;

        return $new;
    }

    /**
     * @return string
     */
    public function getServices()
    {
        return $this->Services;
    }

    /**
     * @param string $Services
     * @return ContractProps
     */
    public function withServices($Services)
    {
        $new = clone $this;
        $new->Services = $Services;

        return $new;
    }

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\ContractManager
     */
    public function getManager()
    {
        return $this->Manager;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\ContractManager $Manager
     * @return ContractProps
     */
    public function withManager($Manager)
    {
        $new = clone $this;
        $new->Manager = $Manager;

        return $new;
    }

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\ContractSumm
     */
    public function getSumm()
    {
        return $this->Summ;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\ContractSumm $Summ
     * @return ContractProps
     */
    public function withSumm($Summ)
    {
        $new = clone $this;
        $new->Summ = $Summ;

        return $new;
    }
}

