<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class UpdateApplication implements RequestInterface
{
    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\UpdateData
     */
    private $UpdateData;

    /**
     * Constructor
     *
     * @var \Webmasterskaya\Soap\CCCB\Type\UpdateData $UpdateData
     */
    public function __construct($UpdateData)
    {
        $this->UpdateData = $UpdateData;
    }

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\UpdateData
     */
    public function getUpdateData()
    {
        return $this->UpdateData;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\UpdateData $UpdateData
     * @return UpdateApplication
     */
    public function withUpdateData($UpdateData)
    {
        $new = clone $this;
        $new->UpdateData = $UpdateData;

        return $new;
    }
}

