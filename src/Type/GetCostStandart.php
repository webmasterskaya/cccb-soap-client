<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class GetCostStandart implements RequestInterface
{
    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\CostingOptionsStandart
     */
    private $CostingOptions;

    /**
     * Constructor
     *
     * @var \Webmasterskaya\Soap\CCCB\Type\CostingOptionsStandart $CostingOptions
     */
    public function __construct($CostingOptions)
    {
        $this->CostingOptions = $CostingOptions;
    }

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\CostingOptionsStandart
     */
    public function getCostingOptions()
    {
        return $this->CostingOptions;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\CostingOptionsStandart $CostingOptions
     * @return GetCostStandart
     */
    public function withCostingOptions($CostingOptions)
    {
        $new = clone $this;
        $new->CostingOptions = $CostingOptions;

        return $new;
    }
}

