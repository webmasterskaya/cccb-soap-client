<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class UploadFile implements RequestInterface
{
	/**
	 * @var string
	 */
	private $ApplicationGUID;

	/**
	 * @var string
	 */
	private $FileName;

	/**
	 * Constructor
	 *
	 * @var string $ApplicationGUID
	 * @var string $FileName
	 */
	public function __construct($ApplicationGUID, $FileName)
	{
		$this->ApplicationGUID = $ApplicationGUID;
		$this->FileName        = $FileName;
	}

	/**
	 * @return string
	 */
	public function getApplicationGUID()
	{
		return $this->ApplicationGUID;
	}

	/**
	 * @param   string  $ApplicationGUID
	 *
	 * @return UploadFile
	 */
	public function withApplicationGUID($ApplicationGUID)
	{
		$new                  = clone $this;
		$new->ApplicationGUID = $ApplicationGUID;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getFileName()
	{
		return $this->FileName;
	}

	/**
	 * @param   string  $FileName
	 *
	 * @return UploadFile
	 */
	public function withFileName($FileName)
	{
		$new           = clone $this;
		$new->FileName = $FileName;

		return $new;
	}
}

