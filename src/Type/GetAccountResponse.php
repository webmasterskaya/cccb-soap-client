<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\ResultInterface;

class GetAccountResponse implements ResultInterface
{
    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\ResultOfGetAccount
     */
    private $return;

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\ResultOfGetAccount
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\ResultOfGetAccount $return
     * @return GetAccountResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

