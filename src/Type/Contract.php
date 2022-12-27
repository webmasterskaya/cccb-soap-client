<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class Contract
{
    /**
     * @var string
     */
    private $GUID;

    /**
     * @var \DateTimeInterface
     */
    private $DateStart;

    /**
     * @var \DateTimeInterface
     */
    private $DateEnd;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var \DateTimeInterface
     */
    private $Date;

    /**
     * @var string
     */
    private $Number;

    /**
     * @var string
     */
    private $ContractStatusCode;

    /**
     * @var string
     */
    private $Services;

    /**
     * @var string
     */
    private $USS;

    /**
     * @return string
     */
    public function getGUID()
    {
        return $this->GUID;
    }

    /**
     * @param string $GUID
     * @return Contract
     */
    public function withGUID($GUID)
    {
        $new = clone $this;
        $new->GUID = $GUID;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateStart()
    {
        return $this->DateStart;
    }

    /**
     * @param \DateTimeInterface $DateStart
     * @return Contract
     */
    public function withDateStart($DateStart)
    {
        $new = clone $this;
        $new->DateStart = $DateStart;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateEnd()
    {
        return $this->DateEnd;
    }

    /**
     * @param \DateTimeInterface $DateEnd
     * @return Contract
     */
    public function withDateEnd($DateEnd)
    {
        $new = clone $this;
        $new->DateEnd = $DateEnd;

        return $new;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return Contract
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param \DateTimeInterface $Date
     * @return Contract
     */
    public function withDate($Date)
    {
        $new = clone $this;
        $new->Date = $Date;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param string $Number
     * @return Contract
     */
    public function withNumber($Number)
    {
        $new = clone $this;
        $new->Number = $Number;

        return $new;
    }

    /**
     * @return string
     */
    public function getContractStatusCode()
    {
        return $this->ContractStatusCode;
    }

    /**
     * @param string $ContractStatusCode
     * @return Contract
     */
    public function withContractStatusCode($ContractStatusCode)
    {
        $new = clone $this;
        $new->ContractStatusCode = $ContractStatusCode;

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
     * @return Contract
     */
    public function withServices($Services)
    {
        $new = clone $this;
        $new->Services = $Services;

        return $new;
    }

    /**
     * @return string
     */
    public function getUSS()
    {
        return $this->USS;
    }

    /**
     * @param string $USS
     * @return Contract
     */
    public function withUSS($USS)
    {
        $new = clone $this;
        $new->USS = $USS;

        return $new;
    }
}

