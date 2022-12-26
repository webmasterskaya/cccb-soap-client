<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class CancelApplication implements RequestInterface
{
    /**
     * @var string
     */
    private $ApplicationGUID;

    /**
     * Constructor
     *
     * @var string $ApplicationGUID
     */
    public function __construct($ApplicationGUID)
    {
        $this->ApplicationGUID = $ApplicationGUID;
    }

    /**
     * @return string
     */
    public function getApplicationGUID()
    {
        return $this->ApplicationGUID;
    }

    /**
     * @param string $ApplicationGUID
     * @return CancelApplication
     */
    public function withApplicationGUID($ApplicationGUID)
    {
        $new = clone $this;
        $new->ApplicationGUID = $ApplicationGUID;

        return $new;
    }
}

