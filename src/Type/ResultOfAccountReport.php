<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ResultOfAccountReport
{
	/**
	 * @var   StringOfAccountReport
	 */
	private $StringsOfAccountReport;

	/**
	 * @return   StringOfAccountReport
	 */
	public function getStringsOfAccountReport()
	{
		return $this->StringsOfAccountReport;
	}

	/**
	 * @param   StringOfAccountReport  $StringsOfAccountReport
	 *
	 * @return ResultOfAccountReport
	 */
	public function withStringsOfAccountReport($StringsOfAccountReport)
	{
		$new                         = clone $this;
		$new->StringsOfAccountReport = $StringsOfAccountReport;

		return $new;
	}
}

