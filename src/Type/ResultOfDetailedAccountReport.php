<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ResultOfDetailedAccountReport
{
	/**
	 * @var   StringOfDetailedAccountReport
	 */
	private $StringsOfDetailedAccountReport;

	/**
	 * @return   StringOfDetailedAccountReport
	 */
	public function getStringsOfDetailedAccountReport()
	{
		return $this->StringsOfDetailedAccountReport;
	}

	/**
	 * @param   StringOfDetailedAccountReport  $StringsOfDetailedAccountReport
	 *
	 * @return ResultOfDetailedAccountReport
	 */
	public function withStringsOfDetailedAccountReport($StringsOfDetailedAccountReport)
	{
		$new                                 = clone $this;
		$new->StringsOfDetailedAccountReport = $StringsOfDetailedAccountReport;

		return $new;
	}
}

