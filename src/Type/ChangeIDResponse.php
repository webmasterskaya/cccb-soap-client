<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\ResultInterface;

class ChangeIDResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private $return;

    /**
     * @return bool
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param bool $return
     * @return ChangeIDResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

