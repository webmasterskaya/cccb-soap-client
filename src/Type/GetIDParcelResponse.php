<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\ResponseInterface;

class GetIDParcelResponse implements ResponseInterface
{
	/**
	 * @var string
	 */
	private $return;

	/**
	 * @return string
	 */
	public function getReturn()
	{
		return $this->return;
	}

	/**
	 * @param   string  $return
	 *
	 * @return GetIDParcelResponse
	 */
	public function withReturn($return)
	{
		$new         = clone $this;
		$new->return = $return;

		return $new;
	}
}

