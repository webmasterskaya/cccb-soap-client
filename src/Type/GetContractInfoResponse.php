<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\ResultInterface;

class GetContractInfoResponse implements ResultInterface
{
    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\ResultOfContractInfo
     */
    private $return;

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\ResultOfContractInfo
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\ResultOfContractInfo $return
     * @return GetContractInfoResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

