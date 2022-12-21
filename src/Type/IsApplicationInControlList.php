<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class IsApplicationInControlList implements RequestInterface
{
	/**
	 * @var string
	 */
	private $ApplicationGUID;

	/**
	 * Constructor
	 *
	 * @var string $ApplicationGUID
	 */
	public function __construct($ApplicationGUID)
	{
		$this->ApplicationGUID = $ApplicationGUID;
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
	 * @return IsApplicationInControlList
	 */
	public function withApplicationGUID($ApplicationGUID)
	{
		$new                  = clone $this;
		$new->ApplicationGUID = $ApplicationGUID;

		return $new;
	}
}

