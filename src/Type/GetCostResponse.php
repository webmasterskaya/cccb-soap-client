<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\ResultInterface;

class GetCostResponse implements ResultInterface
{
    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\ResultOfGetCost
     */
    private $return;

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\ResultOfGetCost
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\ResultOfGetCost $return
     * @return GetCostResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

