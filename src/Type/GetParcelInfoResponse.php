<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\ResultInterface;

class GetParcelInfoResponse implements ResultInterface
{
    /**
     * @var ResultOfParcelInfo
     */
    private $return;

    /**
     * @return ResultOfParcelInfo
     */
    public function getReturn(): ResultOfParcelInfo
    {
        return $this->return;
    }

    /**
     * @param ResultOfParcelInfo $return
     * @return GetParcelInfoResponse
     */
    public function withReturn(ResultOfParcelInfo $return): GetParcelInfoResponse
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

