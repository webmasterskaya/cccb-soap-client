<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ProbResponse implements CccbResponseInterface
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
	 * @return ProbResponse
	 */
	public function withReturn($return)
	{
		$new         = clone $this;
		$new->return = $return;

		return $new;
	}
}

