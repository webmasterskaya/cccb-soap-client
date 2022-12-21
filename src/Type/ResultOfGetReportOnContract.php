<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ResultOfGetReportOnContract
{
	/**
	 * @var bool
	 */
	private $Result;

	/**
	 * @var string
	 */
	private $Additionally;

	/**
	 * @return bool
	 */
	public function getResult()
	{
		return $this->Result;
	}

	/**
	 * @param   bool  $Result
	 *
	 * @return ResultOfGetReportOnContract
	 */
	public function withResult($Result)
	{
		$new         = clone $this;
		$new->Result = $Result;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getAdditionally()
	{
		return $this->Additionally;
	}

	/**
	 * @param   string  $Additionally
	 *
	 * @return ResultOfGetReportOnContract
	 */
	public function withAdditionally($Additionally)
	{
		$new               = clone $this;
		$new->Additionally = $Additionally;

		return $new;
	}
}

