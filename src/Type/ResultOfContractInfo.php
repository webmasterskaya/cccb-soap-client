<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ResultOfContractInfo
{
    /**
     * @var  StringOfContractInfo
     */
    private $StringsOfContractInfo;

    /**
     * @return  StringOfContractInfo
     */
    public function getStringsOfContractInfo()
    {
        return $this->StringsOfContractInfo;
    }

    /**
     * @param  StringOfContractInfo $StringsOfContractInfo
     * @return ResultOfContractInfo
     */
    public function withStringsOfContractInfo($StringsOfContractInfo)
    {
        $new = clone $this;
        $new->StringsOfContractInfo = $StringsOfContractInfo;

        return $new;
    }
}

