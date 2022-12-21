<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ResultOfNewApplication
{
    /**
     * @var bool
     */
    private $Result;

    /**
     * @var string
     */
    private $Reason;

    /**
     * @var string
     */
    private $ApplicationGUID;

    /**
     * @var string
     */
    private $ApplicationNumber;

    /**
     * @var string
     */
    private $Numbers;

    /**
     * @return bool
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param bool $Result
     * @return ResultOfNewApplication
     */
    public function withResult($Result)
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->Reason;
    }

    /**
     * @param string $Reason
     * @return ResultOfNewApplication
     */
    public function withReason($Reason)
    {
        $new = clone $this;
        $new->Reason = $Reason;

        return $new;
    }

    /**
     * @return string
     */
    public function getApplicationGUID()
    {
        return $this->ApplicationGUID;
    }

    /**
     * @param string $ApplicationGUID
     * @return ResultOfNewApplication
     */
    public function withApplicationGUID($ApplicationGUID)
    {
        $new = clone $this;
        $new->ApplicationGUID = $ApplicationGUID;

        return $new;
    }

    /**
     * @return string
     */
    public function getApplicationNumber()
    {
        return $this->ApplicationNumber;
    }

    /**
     * @param string $ApplicationNumber
     * @return ResultOfNewApplication
     */
    public function withApplicationNumber($ApplicationNumber)
    {
        $new = clone $this;
        $new->ApplicationNumber = $ApplicationNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumbers()
    {
        return $this->Numbers;
    }

    /**
     * @param string $Numbers
     * @return ResultOfNewApplication
     */
    public function withNumbers($Numbers)
    {
        $new = clone $this;
        $new->Numbers = $Numbers;

        return $new;
    }
}

