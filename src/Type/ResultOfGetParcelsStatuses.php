<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ResultOfGetParcelsStatuses
{
	/**
	 * @var mixed
	 */
	private $Parcels;

	/**
	 * @var string
	 */
	private $Reason;

	/**
	 * @return mixed
	 */
	public function getParcels()
	{
		return $this->Parcels;
	}

	/**
	 * @param   mixed  $Parcels
	 *
	 * @return ResultOfGetParcelsStatuses
	 */
	public function withParcels($Parcels)
	{
		$new          = clone $this;
		$new->Parcels = $Parcels;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getReason()
	{
		return $this->Reason;
	}

	/**
	 * @param   string  $Reason
	 *
	 * @return ResultOfGetParcelsStatuses
	 */
	public function withReason($Reason)
	{
		$new         = clone $this;
		$new->Reason = $Reason;

		return $new;
	}
}

