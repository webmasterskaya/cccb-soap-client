<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\ResponseInterface;

class AccountReportResponse implements ResponseInterface
{
	/**
	 * @var  ResultOfAccountReport
	 */
	private $return;

	/**
	 * @return  ResultOfAccountReport
	 */
	public function getReturn()
	{
		return $this->return;
	}
}

