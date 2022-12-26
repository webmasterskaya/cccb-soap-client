<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class GetCost implements RequestInterface
{
    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\CostingOptions
     */
    private $CostingOptions;

    /**
     * Constructor
     *
     * @var \Webmasterskaya\Soap\CCCB\Type\CostingOptions $CostingOptions
     */
    public function __construct($CostingOptions)
    {
        $this->CostingOptions = $CostingOptions;
    }

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\CostingOptions
     */
    public function getCostingOptions()
    {
        return $this->CostingOptions;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\CostingOptions $CostingOptions
     * @return GetCost
     */
    public function withCostingOptions($CostingOptions)
    {
        $new = clone $this;
        $new->CostingOptions = $CostingOptions;

        return $new;
    }
}

