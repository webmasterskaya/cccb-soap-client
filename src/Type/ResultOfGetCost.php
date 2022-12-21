<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ResultOfGetCost
{
    /**
     * @var string
     */
    private $ErrorText;

    /**
     * @var float
     */
    private $SumWithoutNDS;

    /**
     * @var float
     */
    private $NDS;

    /**
     * @var float
     */
    private $TotalSum;

    /**
     * @return string
     */
    public function getErrorText()
    {
        return $this->ErrorText;
    }

    /**
     * @param string $ErrorText
     * @return ResultOfGetCost
     */
    public function withErrorText($ErrorText)
    {
        $new = clone $this;
        $new->ErrorText = $ErrorText;

        return $new;
    }

    /**
     * @return float
     */
    public function getSumWithoutNDS()
    {
        return $this->SumWithoutNDS;
    }

    /**
     * @param float $SumWithoutNDS
     * @return ResultOfGetCost
     */
    public function withSumWithoutNDS($SumWithoutNDS)
    {
        $new = clone $this;
        $new->SumWithoutNDS = $SumWithoutNDS;

        return $new;
    }

    /**
     * @return float
     */
    public function getNDS()
    {
        return $this->NDS;
    }

    /**
     * @param float $NDS
     * @return ResultOfGetCost
     */
    public function withNDS($NDS)
    {
        $new = clone $this;
        $new->NDS = $NDS;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotalSum()
    {
        return $this->TotalSum;
    }

    /**
     * @param float $TotalSum
     * @return ResultOfGetCost
     */
    public function withTotalSum($TotalSum)
    {
        $new = clone $this;
        $new->TotalSum = $TotalSum;

        return $new;
    }
}

