<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ParcelStatus
{
	/**
	 * @var \DateTimeInterface
	 */
	private $EventDate;

	/**
	 * @var string
	 */
	private $EventType;

	/**
	 * @var string
	 */
	private $Additionally;

	/**
	 * @return \DateTimeInterface
	 */
	public function getEventDate()
	{
		return $this->EventDate;
	}

	/**
	 * @param   \DateTimeInterface  $EventDate
	 *
	 * @return ParcelStatus
	 */
	public function withEventDate($EventDate)
	{
		$new            = clone $this;
		$new->EventDate = $EventDate;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getEventType()
	{
		return $this->EventType;
	}

	/**
	 * @param   string  $EventType
	 *
	 * @return ParcelStatus
	 */
	public function withEventType($EventType)
	{
		$new            = clone $this;
		$new->EventType = $EventType;

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
	 * @return ParcelStatus
	 */
	public function withAdditionally($Additionally)
	{
		$new               = clone $this;
		$new->Additionally = $Additionally;

		return $new;
	}
}

