<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\ResponseInterface;

interface CccbResponseInterface extends ResponseInterface
{
    public function getReturn();
}