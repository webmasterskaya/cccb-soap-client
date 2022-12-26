<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ResultOfF1Info
{
    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\F1Info
     */
    private $F1Info;

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\F1Info
     */
    public function getF1Info()
    {
        return $this->F1Info;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\F1Info $F1Info
     * @return ResultOfF1Info
     */
    public function withF1Info($F1Info)
    {
        $new = clone $this;
        $new->F1Info = $F1Info;

        return $new;
    }
}

