<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\ResultInterface;

class NewApplicationResponse implements ResultInterface
{
    /**
     * @var ResultOfNewApplication
     */
    private $return;

    /**
     * @return ResultOfNewApplication
     */
    public function getReturn(): ResultOfNewApplication
    {
        return $this->return;
    }

    /**
     * @param ResultOfNewApplication $return
     * @return NewApplicationResponse
     */
    public function withReturn($return): NewApplicationResponse
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

