<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ResultOfDetailedAccountReport
{
    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\StringOfDetailedAccountReport
     */
    private $StringsOfDetailedAccountReport;

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\StringOfDetailedAccountReport
     */
    public function getStringsOfDetailedAccountReport()
    {
        return $this->StringsOfDetailedAccountReport;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\StringOfDetailedAccountReport $StringsOfDetailedAccountReport
     * @return ResultOfDetailedAccountReport
     */
    public function withStringsOfDetailedAccountReport($StringsOfDetailedAccountReport)
    {
        $new = clone $this;
        $new->StringsOfDetailedAccountReport = $StringsOfDetailedAccountReport;

        return $new;
    }
}

