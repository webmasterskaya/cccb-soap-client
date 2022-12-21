<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ResultOfCancelApplication
{
	/**
	 * @var bool
	 */
	private $Result;

	/**
	 * @var string
	 */
	private $Reason;

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
	 * @return ResultOfCancelApplication
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
	public function getReason()
	{
		return $this->Reason;
	}

	/**
	 * @param   string  $Reason
	 *
	 * @return ResultOfCancelApplication
	 */
	public function withReason($Reason)
	{
		$new         = clone $this;
		$new->Reason = $Reason;

		return $new;
	}
}

