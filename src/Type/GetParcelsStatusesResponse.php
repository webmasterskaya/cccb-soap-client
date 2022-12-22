<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class GetParcelsStatusesResponse implements CccbResponseInterface
{
    /**
     * @var   ResultOfGetParcelsStatuses
     */
    private $return;

    /**
     * @return   ResultOfGetParcelsStatuses
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param   ResultOfGetParcelsStatuses $return
     * @return GetParcelsStatusesResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

