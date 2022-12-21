<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\ResponseInterface;

class DetailedAccountReportResponse implements ResponseInterface
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

