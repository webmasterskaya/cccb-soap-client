<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class GetParcelsStatuses implements RequestInterface, ContractGuidAwareInterface
{
	/**
	 * @var   Parcels
	 */
	private $Parcels;

	use ContractGuidAwareTrait;

	/**
	 * Constructor
	 *
	 * @var   Parcels $Parcels
	 * @var string    $ContractGUID
	 */
	public function __construct($Parcels, $ContractGUID)
	{
		$this->Parcels      = $Parcels;
		$this->ContractGUID = $ContractGUID;
	}

	/**
	 * @return   Parcels
	 */
	public function getParcels()
	{
		return $this->Parcels;
	}

	/**
	 * @param   Parcels  $Parcels
	 *
	 * @return GetParcelsStatuses
	 */
	public function withParcels($Parcels)
	{
		$new          = clone $this;
		$new->Parcels = $Parcels;

		return $new;
	}
}

