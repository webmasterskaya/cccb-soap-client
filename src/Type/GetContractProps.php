<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class GetContractProps implements RequestInterface, ContractGuidAwareInterface
{

	use ContractGuidAwareTrait;

	/**
	 * @var bool
	 */
	private $IncludeClient;

	/**
	 * @var bool
	 */
	private $IncludeMainProps;

	/**
	 * @var bool
	 */
	private $IncludeServices;

	/**
	 * @var bool
	 */
	private $IncludeManager;

	/**
	 * @var bool
	 */
	private $IncludeSumm;

	/**
	 * Constructor
	 *
	 * @var string $ContractGUID
	 * @var bool   $IncludeClient
	 * @var bool   $IncludeMainProps
	 * @var bool   $IncludeServices
	 * @var bool   $IncludeManager
	 * @var bool   $IncludeSumm
	 */
	public function __construct($ContractGUID, $IncludeClient, $IncludeMainProps, $IncludeServices, $IncludeManager, $IncludeSumm)
	{
		$this->ContractGUID     = $ContractGUID;
		$this->IncludeClient    = $IncludeClient;
		$this->IncludeMainProps = $IncludeMainProps;
		$this->IncludeServices  = $IncludeServices;
		$this->IncludeManager   = $IncludeManager;
		$this->IncludeSumm      = $IncludeSumm;
	}

	/**
	 * @return bool
	 */
	public function getIncludeClient()
	{
		return $this->IncludeClient;
	}

	/**
	 * @param   bool  $IncludeClient
	 *
	 * @return GetContractProps
	 */
	public function withIncludeClient($IncludeClient)
	{
		$new                = clone $this;
		$new->IncludeClient = $IncludeClient;

		return $new;
	}

	/**
	 * @return bool
	 */
	public function getIncludeMainProps()
	{
		return $this->IncludeMainProps;
	}

	/**
	 * @param   bool  $IncludeMainProps
	 *
	 * @return GetContractProps
	 */
	public function withIncludeMainProps($IncludeMainProps)
	{
		$new                   = clone $this;
		$new->IncludeMainProps = $IncludeMainProps;

		return $new;
	}

	/**
	 * @return bool
	 */
	public function getIncludeServices()
	{
		return $this->IncludeServices;
	}

	/**
	 * @param   bool  $IncludeServices
	 *
	 * @return GetContractProps
	 */
	public function withIncludeServices($IncludeServices)
	{
		$new                  = clone $this;
		$new->IncludeServices = $IncludeServices;

		return $new;
	}

	/**
	 * @return bool
	 */
	public function getIncludeManager()
	{
		return $this->IncludeManager;
	}

	/**
	 * @param   bool  $IncludeManager
	 *
	 * @return GetContractProps
	 */
	public function withIncludeManager($IncludeManager)
	{
		$new                 = clone $this;
		$new->IncludeManager = $IncludeManager;

		return $new;
	}

	/**
	 * @return bool
	 */
	public function getIncludeSumm()
	{
		return $this->IncludeSumm;
	}

	/**
	 * @param   bool  $IncludeSumm
	 *
	 * @return GetContractProps
	 */
	public function withIncludeSumm($IncludeSumm)
	{
		$new              = clone $this;
		$new->IncludeSumm = $IncludeSumm;

		return $new;
	}
}

