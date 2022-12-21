<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class Parcels
{
    /**
     * @var string
     */
    private $Number;

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param string $Number
     * @return Parcels
     */
    public function withNumber($Number)
    {
        $new = clone $this;
        $new->Number = $Number;

        return $new;
    }
}

