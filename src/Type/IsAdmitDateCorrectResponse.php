<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\ResultInterface;

class IsAdmitDateCorrectResponse implements ResultInterface
{
    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\ResultOfOperation
     */
    private $return;

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\ResultOfOperation
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\ResultOfOperation $return
     * @return IsAdmitDateCorrectResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

