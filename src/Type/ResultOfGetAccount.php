<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ResultOfGetAccount
{
	/**
	 * @var bool
	 */
	private $ResultFTP;

	/**
	 * @var bool
	 */
	private $ResultBase;

	/**
	 * @var string
	 */
	private $AdditionallyFTP;

	/**
	 * @var string
	 */
	private $AdditionallyBase;

	/**
	 * @return bool
	 */
	public function getResultFTP()
	{
		return $this->ResultFTP;
	}

	/**
	 * @param   bool  $ResultFTP
	 *
	 * @return ResultOfGetAccount
	 */
	public function withResultFTP($ResultFTP)
	{
		$new            = clone $this;
		$new->ResultFTP = $ResultFTP;

		return $new;
	}

	/**
	 * @return bool
	 */
	public function getResultBase()
	{
		return $this->ResultBase;
	}

	/**
	 * @param   bool  $ResultBase
	 *
	 * @return ResultOfGetAccount
	 */
	public function withResultBase($ResultBase)
	{
		$new             = clone $this;
		$new->ResultBase = $ResultBase;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getAdditionallyFTP()
	{
		return $this->AdditionallyFTP;
	}

	/**
	 * @param   string  $AdditionallyFTP
	 *
	 * @return ResultOfGetAccount
	 */
	public function withAdditionallyFTP($AdditionallyFTP)
	{
		$new                  = clone $this;
		$new->AdditionallyFTP = $AdditionallyFTP;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getAdditionallyBase()
	{
		return $this->AdditionallyBase;
	}

	/**
	 * @param   string  $AdditionallyBase
	 *
	 * @return ResultOfGetAccount
	 */
	public function withAdditionallyBase($AdditionallyBase)
	{
		$new                   = clone $this;
		$new->AdditionallyBase = $AdditionallyBase;

		return $new;
	}
}

