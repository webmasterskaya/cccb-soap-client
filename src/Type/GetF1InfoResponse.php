<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\ResponseInterface;

class GetF1InfoResponse implements ResponseInterface
{
    /**
     * @var  ResultOfF1Info
     */
    private $return;

    /**
     * @return  ResultOfF1Info
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param  ResultOfF1Info $return
     * @return GetF1InfoResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

