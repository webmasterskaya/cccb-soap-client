<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class GetCost implements RequestInterface
{
    /**
     * @var CostingOptions
     */
    private $CostingOptions;

    /**
     * Constructor
     *
     * @var CostingOptions $CostingOptions
     */
    public function __construct(CostingOptions $CostingOptions)
    {
        $this->CostingOptions = $CostingOptions;
    }

    /**
     * @return CostingOptions
     */
    public function getCostingOptions(): CostingOptions
    {
        return $this->CostingOptions;
    }

    /**
     * @param CostingOptions $CostingOptions
     * @return GetCost
     */
    public function withCostingOptions(CostingOptions $CostingOptions): GetCost
    {
        $new = clone $this;
        $new->CostingOptions = $CostingOptions;

        return $new;
    }
}

