<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class Application implements ContractGuidAwareInterface
{

	use ContractGuidAwareTrait;

	/**
	 * @var string
	 */
	private $ServiceGUID;

	/**
	 * @var mixed
	 */
	private $ApplicationStatusCode;

	/**
	 * @var \DateTimeInterface
	 */
	private $PickupDate;

	/**
	 * @var string
	 */
	private $PickupTimeFrom;

	/**
	 * @var string
	 */
	private $PickupTimeTo;

	/**
	 * @var   Addressee
	 */
	private $PickupAddressee;

	/**
	 * @var   Address
	 */
	private $PickupAddress;

	/**
	 * @var   ContactPerson
	 */
	private $PickupContactPerson;

	/**
	 * @var bool
	 */
	private $IsDirect;

	/**
	 * @var string
	 */
	private $Comment;

	/**
	 * @var   Parcel
	 */
	private $Parcels;

	/**
	 * @var string
	 */
	private $RegisterNumber;

	/**
	 * @var string
	 */
	private $IncomingNumber;

	/**
	 * @var string
	 */
	private $AttachedFileName;

	/**
	 * @var bool
	 */
	private $RoundTrip;

	/**
	 * @var bool
	 */
	private $DangerousCargo;

	/**
	 * @return string
	 */
	public function getServiceGUID()
	{
		return $this->ServiceGUID;
	}

	/**
	 * @param   string  $ServiceGUID
	 *
	 * @return Application
	 */
	public function withServiceGUID($ServiceGUID)
	{
		$new              = clone $this;
		$new->ServiceGUID = $ServiceGUID;

		return $new;
	}

	/**
	 * @return mixed
	 */
	public function getApplicationStatusCode()
	{
		return $this->ApplicationStatusCode;
	}

	/**
	 * @param   mixed  $ApplicationStatusCode
	 *
	 * @return Application
	 */
	public function withApplicationStatusCode($ApplicationStatusCode)
	{
		$new                        = clone $this;
		$new->ApplicationStatusCode = $ApplicationStatusCode;

		return $new;
	}

	/**
	 * @return \DateTimeInterface
	 */
	public function getPickupDate()
	{
		return $this->PickupDate;
	}

	/**
	 * @param   \DateTimeInterface  $PickupDate
	 *
	 * @return Application
	 */
	public function withPickupDate($PickupDate)
	{
		$new             = clone $this;
		$new->PickupDate = $PickupDate;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getPickupTimeFrom()
	{
		return $this->PickupTimeFrom;
	}

	/**
	 * @param   string  $PickupTimeFrom
	 *
	 * @return Application
	 */
	public function withPickupTimeFrom($PickupTimeFrom)
	{
		$new                 = clone $this;
		$new->PickupTimeFrom = $PickupTimeFrom;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getPickupTimeTo()
	{
		return $this->PickupTimeTo;
	}

	/**
	 * @param   string  $PickupTimeTo
	 *
	 * @return Application
	 */
	public function withPickupTimeTo($PickupTimeTo)
	{
		$new               = clone $this;
		$new->PickupTimeTo = $PickupTimeTo;

		return $new;
	}

	/**
	 * @return   Addressee
	 */
	public function getPickupAddressee()
	{
		return $this->PickupAddressee;
	}

	/**
	 * @param   Addressee  $PickupAddressee
	 *
	 * @return Application
	 */
	public function withPickupAddressee($PickupAddressee)
	{
		$new                  = clone $this;
		$new->PickupAddressee = $PickupAddressee;

		return $new;
	}

	/**
	 * @return   Address
	 */
	public function getPickupAddress()
	{
		return $this->PickupAddress;
	}

	/**
	 * @param   Address  $PickupAddress
	 *
	 * @return Application
	 */
	public function withPickupAddress($PickupAddress)
	{
		$new                = clone $this;
		$new->PickupAddress = $PickupAddress;

		return $new;
	}

	/**
	 * @return   ContactPerson
	 */
	public function getPickupContactPerson()
	{
		return $this->PickupContactPerson;
	}

	/**
	 * @param   ContactPerson  $PickupContactPerson
	 *
	 * @return Application
	 */
	public function withPickupContactPerson($PickupContactPerson)
	{
		$new                      = clone $this;
		$new->PickupContactPerson = $PickupContactPerson;

		return $new;
	}

	/**
	 * @return bool
	 */
	public function getIsDirect()
	{
		return $this->IsDirect;
	}

	/**
	 * @param   bool  $IsDirect
	 *
	 * @return Application
	 */
	public function withIsDirect($IsDirect)
	{
		$new           = clone $this;
		$new->IsDirect = $IsDirect;

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
	 * @return Application
	 */
	public function withComment($Comment)
	{
		$new          = clone $this;
		$new->Comment = $Comment;

		return $new;
	}

	/**
	 * @return   Parcel
	 */
	public function getParcels()
	{
		return $this->Parcels;
	}

	/**
	 * @param   Parcel  $Parcels
	 *
	 * @return Application
	 */
	public function withParcels($Parcels)
	{
		$new          = clone $this;
		$new->Parcels = $Parcels;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getRegisterNumber()
	{
		return $this->RegisterNumber;
	}

	/**
	 * @param   string  $RegisterNumber
	 *
	 * @return Application
	 */
	public function withRegisterNumber($RegisterNumber)
	{
		$new                 = clone $this;
		$new->RegisterNumber = $RegisterNumber;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getIncomingNumber()
	{
		return $this->IncomingNumber;
	}

	/**
	 * @param   string  $IncomingNumber
	 *
	 * @return Application
	 */
	public function withIncomingNumber($IncomingNumber)
	{
		$new                 = clone $this;
		$new->IncomingNumber = $IncomingNumber;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getAttachedFileName()
	{
		return $this->AttachedFileName;
	}

	/**
	 * @param   string  $AttachedFileName
	 *
	 * @return Application
	 */
	public function withAttachedFileName($AttachedFileName)
	{
		$new                   = clone $this;
		$new->AttachedFileName = $AttachedFileName;

		return $new;
	}

	/**
	 * @return bool
	 */
	public function getRoundTrip()
	{
		return $this->RoundTrip;
	}

	/**
	 * @param   bool  $RoundTrip
	 *
	 * @return Application
	 */
	public function withRoundTrip($RoundTrip)
	{
		$new            = clone $this;
		$new->RoundTrip = $RoundTrip;

		return $new;
	}

	/**
	 * @return bool
	 */
	public function getDangerousCargo()
	{
		return $this->DangerousCargo;
	}

	/**
	 * @param   bool  $DangerousCargo
	 *
	 * @return Application
	 */
	public function withDangerousCargo($DangerousCargo)
	{
		$new                 = clone $this;
		$new->DangerousCargo = $DangerousCargo;

		return $new;
	}
}

