<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\ResponseInterface;

class RegistrationResponse implements ResponseInterface
{
    /**
     * @var  ResultOfRegistration
     */
    private $return;

    /**
     * @return  ResultOfRegistration
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param  ResultOfRegistration $return
     * @return RegistrationResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

