<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\ResponseInterface;

class GetAccountResponse implements ResponseInterface
{
    /**
     * @var  ResultOfGetAccount
     */
    private $return;

    /**
     * @return  ResultOfGetAccount
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param  ResultOfGetAccount $return
     * @return GetAccountResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

