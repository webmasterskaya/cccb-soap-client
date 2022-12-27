<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ResultOfAccountReport
{
    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\StringOfAccountReport
     */
    private $StringsOfAccountReport;

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\StringOfAccountReport
     */
    public function getStringsOfAccountReport()
    {
        return $this->StringsOfAccountReport;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\StringOfAccountReport $StringsOfAccountReport
     * @return ResultOfAccountReport
     */
    public function withStringsOfAccountReport($StringsOfAccountReport)
    {
        $new = clone $this;
        $new->StringsOfAccountReport = $StringsOfAccountReport;

        return $new;
    }
}

