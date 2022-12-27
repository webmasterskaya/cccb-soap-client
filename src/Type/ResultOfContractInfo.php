<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ResultOfContractInfo
{
    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\StringOfContractInfo
     */
    private $StringsOfContractInfo;

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\StringOfContractInfo
     */
    public function getStringsOfContractInfo()
    {
        return $this->StringsOfContractInfo;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\StringOfContractInfo $StringsOfContractInfo
     * @return ResultOfContractInfo
     */
    public function withStringsOfContractInfo($StringsOfContractInfo)
    {
        $new = clone $this;
        $new->StringsOfContractInfo = $StringsOfContractInfo;

        return $new;
    }
}

