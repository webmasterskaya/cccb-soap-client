<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\ResponseInterface;

class GetReportOnContractResponse implements ResponseInterface
{
	/**
	 * @var   ResultOfGetReportOnContract
	 */
	private $return;

	/**
	 * @return   ResultOfGetReportOnContract
	 */
	public function getReturn()
	{
		return $this->return;
	}

	/**
	 * @param   ResultOfGetReportOnContract  $return
	 *
	 * @return GetReportOnContractResponse
	 */
	public function withReturn($return)
	{
		$new         = clone $this;
		$new->return = $return;

		return $new;
	}
}

