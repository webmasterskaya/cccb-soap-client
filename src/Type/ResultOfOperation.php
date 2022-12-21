<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ResultOfOperation
{
    /**
     * @var bool
     */
    private $IsError;

    /**
     * @var string
     */
    private $Description;

    /**
     * @return bool
     */
    public function getIsError()
    {
        return $this->IsError;
    }

    /**
     * @param bool $IsError
     * @return ResultOfOperation
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
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return ResultOfOperation
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }
}

