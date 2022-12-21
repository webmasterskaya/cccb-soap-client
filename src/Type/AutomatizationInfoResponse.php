<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\ResponseInterface;

class AutomatizationInfoResponse implements ResponseInterface
{
    /**
     * @var  ResultOfAutomatizationInfo
     */
    private $return;

    /**
     * @return  ResultOfAutomatizationInfo
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param  ResultOfAutomatizationInfo $return
     * @return AutomatizationInfoResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

