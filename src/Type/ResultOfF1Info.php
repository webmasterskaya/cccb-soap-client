<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ResultOfF1Info
{
    /**
     * @var  F1Info
     */
    private $F1Info;

    /**
     * @return  F1Info
     */
    public function getF1Info()
    {
        return $this->F1Info;
    }

    /**
     * @param  F1Info $F1Info
     * @return ResultOfF1Info
     */
    public function withF1Info($F1Info)
    {
        $new = clone $this;
        $new->F1Info = $F1Info;

        return $new;
    }
}

