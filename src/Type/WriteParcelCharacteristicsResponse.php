<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class WriteParcelCharacteristicsResponse implements CccbResponseInterface
{
	/**
	 * @var bool
	 */
	private $return;

	/**
	 * @return bool
	 */
	public function getReturn()
	{
		return $this->return;
	}

	/**
	 * @param   bool  $return
	 *
	 * @return WriteParcelCharacteristicsResponse
	 */
	public function withReturn($return)
	{
		$new         = clone $this;
		$new->return = $return;

		return $new;
	}
}

