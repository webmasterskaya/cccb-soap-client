<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\ResultInterface;

class AutomatizationInfoResponse implements ResultInterface
{
    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\ResultOfAutomatizationInfo
     */
    private $return;

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\ResultOfAutomatizationInfo
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\ResultOfAutomatizationInfo $return
     * @return AutomatizationInfoResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

