<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ContactPerson
{
	/**
	 * @var string
	 */
	private $Name;

	/**
	 * @var string
	 */
	private $Position;

	/**
	 * @var string
	 */
	private $Phone;

	/**
	 * @var string
	 */
	private $Comment;

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}

	/**
	 * @param   string  $Name
	 *
	 * @return ContactPerson
	 */
	public function withName($Name)
	{
		$new       = clone $this;
		$new->Name = $Name;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getPosition()
	{
		return $this->Position;
	}

	/**
	 * @param   string  $Position
	 *
	 * @return ContactPerson
	 */
	public function withPosition($Position)
	{
		$new           = clone $this;
		$new->Position = $Position;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getPhone()
	{
		return $this->Phone;
	}

	/**
	 * @param   string  $Phone
	 *
	 * @return ContactPerson
	 */
	public function withPhone($Phone)
	{
		$new        = clone $this;
		$new->Phone = $Phone;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getComment()
	{
		return $this->Comment;
	}

	/**
	 * @param   string  $Comment
	 *
	 * @return ContactPerson
	 */
	public function withComment($Comment)
	{
		$new          = clone $this;
		$new->Comment = $Comment;

		return $new;
	}
}

