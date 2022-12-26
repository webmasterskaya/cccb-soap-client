<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class Registration implements RequestInterface
{
    /**
     * @var string
     */
    private $INN;

    /**
     * @var string
     */
    private $KPP;

    /**
     * @var string
     */
    private $ContractNumber;

    /**
     * @var string
     */
    private $Login;

    /**
     * @var string
     */
    private $EMail;

    /**
     * Constructor
     *
     * @var string $INN
     * @var string $KPP
     * @var string $ContractNumber
     * @var string $Login
     * @var string $EMail
     */
    public function __construct($INN, $KPP, $ContractNumber, $Login, $EMail)
    {
        $this->INN = $INN;
        $this->KPP = $KPP;
        $this->ContractNumber = $ContractNumber;
        $this->Login = $Login;
        $this->EMail = $EMail;
    }

    /**
     * @return string
     */
    public function getINN()
    {
        return $this->INN;
    }

    /**
     * @param string $INN
     * @return Registration
     */
    public function withINN($INN)
    {
        $new = clone $this;
        $new->INN = $INN;

        return $new;
    }

    /**
     * @return string
     */
    public function getKPP()
    {
        return $this->KPP;
    }

    /**
     * @param string $KPP
     * @return Registration
     */
    public function withKPP($KPP)
    {
        $new = clone $this;
        $new->KPP = $KPP;

        return $new;
    }

    /**
     * @return string
     */
    public function getContractNumber()
    {
        return $this->ContractNumber;
    }

    /**
     * @param string $ContractNumber
     * @return Registration
     */
    public function withContractNumber($ContractNumber)
    {
        $new = clone $this;
        $new->ContractNumber = $ContractNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * @param string $Login
     * @return Registration
     */
    public function withLogin($Login)
    {
        $new = clone $this;
        $new->Login = $Login;

        return $new;
    }

    /**
     * @return string
     */
    public function getEMail()
    {
        return $this->EMail;
    }

    /**
     * @param string $EMail
     * @return Registration
     */
    public function withEMail($EMail)
    {
        $new = clone $this;
        $new->EMail = $EMail;

        return $new;
    }
}

