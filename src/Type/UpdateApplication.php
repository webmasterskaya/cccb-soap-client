<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class UpdateApplication implements RequestInterface
{
	/**
	 * @var   UpdateData
	 */
	private $UpdateData;

	/**
	 * Constructor
	 *
	 * @var   UpdateData $UpdateData
	 */
	public function __construct($UpdateData)
	{
		$this->UpdateData = $UpdateData;
	}

	/**
	 * @return   UpdateData
	 */
	public function getUpdateData()
	{
		return $this->UpdateData;
	}

	/**
	 * @param   UpdateData  $UpdateData
	 *
	 * @return UpdateApplication
	 */
	public function withUpdateData($UpdateData)
	{
		$new             = clone $this;
		$new->UpdateData = $UpdateData;

		return $new;
	}
}

