<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\ResponseInterface;

class CancelApplicationResponse implements ResponseInterface
{
    /**
     * @var  ResultOfCancelApplication
     */
    private $return;

    /**
     * @return  ResultOfCancelApplication
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param  ResultOfCancelApplication $return
     * @return CancelApplicationResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

