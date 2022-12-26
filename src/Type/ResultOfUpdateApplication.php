<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ResultOfUpdateApplication
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
     * @return ResultOfUpdateApplication
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
     * @return ResultOfUpdateApplication
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
    public function getNumbers()
    {
        return $this->Numbers;
    }

    /**
     * @param string $Numbers
     * @return ResultOfUpdateApplication
     */
    public function withNumbers($Numbers)
    {
        $new = clone $this;
        $new->Numbers = $Numbers;

        return $new;
    }
}

