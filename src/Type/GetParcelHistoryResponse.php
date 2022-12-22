<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class GetParcelHistoryResponse implements CccbResponseInterface
{
	/**
	 * @var   ResultOfGetParcelHistory
	 */
	private $return;

	/**
	 * @return   ResultOfGetParcelHistory
	 */
	public function getReturn()
	{
		return $this->return;
	}

	/**
	 * @param   ResultOfGetParcelHistory  $return
	 *
	 * @return GetParcelHistoryResponse
	 */
	public function withReturn($return)
	{
		$new         = clone $this;
		$new->return = $return;

		return $new;
	}
}

