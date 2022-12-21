<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class GetCostStandart implements RequestInterface
{
	/**
	 * @var   CostingOptionsStandart
	 */
	private $CostingOptions;

	/**
	 * Constructor
	 *
	 * @var   CostingOptionsStandart $CostingOptions
	 */
	public function __construct($CostingOptions)
	{
		$this->CostingOptions = $CostingOptions;
	}

	/**
	 * @return   CostingOptionsStandart
	 */
	public function getCostingOptions()
	{
		return $this->CostingOptions;
	}

	/**
	 * @param   CostingOptionsStandart  $CostingOptions
	 *
	 * @return GetCostStandart
	 */
	public function withCostingOptions($CostingOptions)
	{
		$new                 = clone $this;
		$new->CostingOptions = $CostingOptions;

		return $new;
	}
}

