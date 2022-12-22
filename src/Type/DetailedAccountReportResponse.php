<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class DetailedAccountReportResponse implements CccbResponseInterface
{
	/**
	 * @var   ResultOfDetailedAccountReport
	 */
	private $return;

	/**
	 * @return   ResultOfDetailedAccountReport
	 */
	public function getReturn()
	{
		return $this->return;
	}

	/**
	 * @param   ResultOfDetailedAccountReport  $return
	 *
	 * @return DetailedAccountReportResponse
	 */
	public function withReturn($return)
	{
		$new         = clone $this;
		$new->return = $return;

		return $new;
	}
}

