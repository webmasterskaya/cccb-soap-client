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
     * @var  User
     */
    private $Client;

    /**
     * @var  ContractMainProps
     */
    private $MainProps;

    /**
     * @var string
     */
    private $Services;

    /**
     * @var  ContractManager
     */
    private $Manager;

    /**
     * @var  ContractSumm
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
     * @return  User
     */
    public function getClient()
    {
        return $this->Client;
    }

    /**
     * @param  User $Client
     * @return ContractProps
     */
    public function withClient($Client)
    {
        $new = clone $this;
        $new->Client = $Client;

        return $new;
    }

    /**
     * @return  ContractMainProps
     */
    public function getMainProps()
    {
        return $this->MainProps;
    }

    /**
     * @param  ContractMainProps $MainProps
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
     * @return  ContractManager
     */
    public function getManager()
    {
        return $this->Manager;
    }

    /**
     * @param  ContractManager $Manager
     * @return ContractProps
     */
    public function withManager($Manager)
    {
        $new = clone $this;
        $new->Manager = $Manager;

        return $new;
    }

    /**
     * @return  ContractSumm
     */
    public function getSumm()
    {
        return $this->Summ;
    }

    /**
     * @param  ContractSumm $Summ
     * @return ContractProps
     */
    public function withSumm($Summ)
    {
        $new = clone $this;
        $new->Summ = $Summ;

        return $new;
    }
}

