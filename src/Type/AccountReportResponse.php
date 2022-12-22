<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class AccountReportResponse implements CccbResponseInterface
{
    /**
     * @var   ResultOfAccountReport
     */
    private $return;

    /**
     * @return   ResultOfAccountReport
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param ResultOfAccountReport $return
     *
     * @return AccountReportResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

