<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class StringOfContractInfo
{
	/**
	 * @var string
	 */
	private $ApplicationNumber;

	/**
	 * @var \DateTimeInterface
	 */
	private $ApplicationDate;

	/**
	 * @var string
	 */
	private $ParcelNumber;

	/**
	 * @var string
	 */
	private $ParcelTypeCode;

	/**
	 * @var int
	 */
	private $ParcelCount;

	/**
	 * @var float
	 */
	private $ParcelWeight;

	/**
	 * @var float
	 */
	private $ParcelLength;

	/**
	 * @var float
	 */
	private $ParcelHeight;

	/**
	 * @var float
	 */
	private $ParcelWidth;

	/**
	 * @var string
	 */
	private $ParcelIndex;

	/**
	 * @var float
	 */
	private $ParcelEstimatedCost;

	/**
	 * @var float
	 */
	private $ChargeForTheEstimatedCost;

	/**
	 * @var float
	 */
	private $CostOfAdditionalServices;

	/**
	 * @var float
	 */
	private $TotalCost;

	/**
	 * @var string
	 */
	private $Sender;

	/**
	 * @var string
	 */
	private $SenderCity;

	/**
	 * @var string
	 */
	private $SenderRegion;

	/**
	 * @var string
	 */
	private $Receiver;

	/**
	 * @var string
	 */
	private $ReceiverCity;

	/**
	 * @var string
	 */
	private $ReceiverRegion;

	/**
	 * @var \DateTimeInterface
	 */
	private $DateOfCollection;

	/**
	 * @var string
	 */
	private $ParcelStatusCode;

	/**
	 * @var \DateTimeInterface
	 */
	private $DateOfDelivery;

	/**
	 * @var string
	 */
	private $IncomingNumber;

	/**
	 * @var string
	 */
	private $Awarded;

	/**
	 * @return string
	 */
	public function getApplicationNumber()
	{
		return $this->ApplicationNumber;
	}

	/**
	 * @param   string  $ApplicationNumber
	 *
	 * @return StringOfContractInfo
	 */
	public function withApplicationNumber($ApplicationNumber)
	{
		$new                    = clone $this;
		$new->ApplicationNumber = $ApplicationNumber;

		return $new;
	}

	/**
	 * @return \DateTimeInterface
	 */
	public function getApplicationDate()
	{
		return $this->ApplicationDate;
	}

	/**
	 * @param   \DateTimeInterface  $ApplicationDate
	 *
	 * @return StringOfContractInfo
	 */
	public function withApplicationDate($ApplicationDate)
	{
		$new                  = clone $this;
		$new->ApplicationDate = $ApplicationDate;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getParcelNumber()
	{
		return $this->ParcelNumber;
	}

	/**
	 * @param   string  $ParcelNumber
	 *
	 * @return StringOfContractInfo
	 */
	public function withParcelNumber($ParcelNumber)
	{
		$new               = clone $this;
		$new->ParcelNumber = $ParcelNumber;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getParcelTypeCode()
	{
		return $this->ParcelTypeCode;
	}

	/**
	 * @param   string  $ParcelTypeCode
	 *
	 * @return StringOfContractInfo
	 */
	public function withParcelTypeCode($ParcelTypeCode)
	{
		$new                 = clone $this;
		$new->ParcelTypeCode = $ParcelTypeCode;

		return $new;
	}

	/**
	 * @return int
	 */
	public function getParcelCount()
	{
		return $this->ParcelCount;
	}

	/**
	 * @param   int  $ParcelCount
	 *
	 * @return StringOfContractInfo
	 */
	public function withParcelCount($ParcelCount)
	{
		$new              = clone $this;
		$new->ParcelCount = $ParcelCount;

		return $new;
	}

	/**
	 * @return float
	 */
	public function getParcelWeight()
	{
		return $this->ParcelWeight;
	}

	/**
	 * @param   float  $ParcelWeight
	 *
	 * @return StringOfContractInfo
	 */
	public function withParcelWeight($ParcelWeight)
	{
		$new               = clone $this;
		$new->ParcelWeight = $ParcelWeight;

		return $new;
	}

	/**
	 * @return float
	 */
	public function getParcelLength()
	{
		return $this->ParcelLength;
	}

	/**
	 * @param   float  $ParcelLength
	 *
	 * @return StringOfContractInfo
	 */
	public function withParcelLength($ParcelLength)
	{
		$new               = clone $this;
		$new->ParcelLength = $ParcelLength;

		return $new;
	}

	/**
	 * @return float
	 */
	public function getParcelHeight()
	{
		return $this->ParcelHeight;
	}

	/**
	 * @param   float  $ParcelHeight
	 *
	 * @return StringOfContractInfo
	 */
	public function withParcelHeight($ParcelHeight)
	{
		$new               = clone $this;
		$new->ParcelHeight = $ParcelHeight;

		return $new;
	}

	/**
	 * @return float
	 */
	public function getParcelWidth()
	{
		return $this->ParcelWidth;
	}

	/**
	 * @param   float  $ParcelWidth
	 *
	 * @return StringOfContractInfo
	 */
	public function withParcelWidth($ParcelWidth)
	{
		$new              = clone $this;
		$new->ParcelWidth = $ParcelWidth;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getParcelIndex()
	{
		return $this->ParcelIndex;
	}

	/**
	 * @param   string  $ParcelIndex
	 *
	 * @return StringOfContractInfo
	 */
	public function withParcelIndex($ParcelIndex)
	{
		$new              = clone $this;
		$new->ParcelIndex = $ParcelIndex;

		return $new;
	}

	/**
	 * @return float
	 */
	public function getParcelEstimatedCost()
	{
		return $this->ParcelEstimatedCost;
	}

	/**
	 * @param   float  $ParcelEstimatedCost
	 *
	 * @return StringOfContractInfo
	 */
	public function withParcelEstimatedCost($ParcelEstimatedCost)
	{
		$new                      = clone $this;
		$new->ParcelEstimatedCost = $ParcelEstimatedCost;

		return $new;
	}

	/**
	 * @return float
	 */
	public function getChargeForTheEstimatedCost()
	{
		return $this->ChargeForTheEstimatedCost;
	}

	/**
	 * @param   float  $ChargeForTheEstimatedCost
	 *
	 * @return StringOfContractInfo
	 */
	public function withChargeForTheEstimatedCost($ChargeForTheEstimatedCost)
	{
		$new                            = clone $this;
		$new->ChargeForTheEstimatedCost = $ChargeForTheEstimatedCost;

		return $new;
	}

	/**
	 * @return float
	 */
	public function getCostOfAdditionalServices()
	{
		return $this->CostOfAdditionalServices;
	}

	/**
	 * @param   float  $CostOfAdditionalServices
	 *
	 * @return StringOfContractInfo
	 */
	public function withCostOfAdditionalServices($CostOfAdditionalServices)
	{
		$new                           = clone $this;
		$new->CostOfAdditionalServices = $CostOfAdditionalServices;

		return $new;
	}

	/**
	 * @return float
	 */
	public function getTotalCost()
	{
		return $this->TotalCost;
	}

	/**
	 * @param   float  $TotalCost
	 *
	 * @return StringOfContractInfo
	 */
	public function withTotalCost($TotalCost)
	{
		$new            = clone $this;
		$new->TotalCost = $TotalCost;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getSender()
	{
		return $this->Sender;
	}

	/**
	 * @param   string  $Sender
	 *
	 * @return StringOfContractInfo
	 */
	public function withSender($Sender)
	{
		$new         = clone $this;
		$new->Sender = $Sender;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getSenderCity()
	{
		return $this->SenderCity;
	}

	/**
	 * @param   string  $SenderCity
	 *
	 * @return StringOfContractInfo
	 */
	public function withSenderCity($SenderCity)
	{
		$new             = clone $this;
		$new->SenderCity = $SenderCity;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getSenderRegion()
	{
		return $this->SenderRegion;
	}

	/**
	 * @param   string  $SenderRegion
	 *
	 * @return StringOfContractInfo
	 */
	public function withSenderRegion($SenderRegion)
	{
		$new               = clone $this;
		$new->SenderRegion = $SenderRegion;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getReceiver()
	{
		return $this->Receiver;
	}

	/**
	 * @param   string  $Receiver
	 *
	 * @return StringOfContractInfo
	 */
	public function withReceiver($Receiver)
	{
		$new           = clone $this;
		$new->Receiver = $Receiver;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getReceiverCity()
	{
		return $this->ReceiverCity;
	}

	/**
	 * @param   string  $ReceiverCity
	 *
	 * @return StringOfContractInfo
	 */
	public function withReceiverCity($ReceiverCity)
	{
		$new               = clone $this;
		$new->ReceiverCity = $ReceiverCity;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getReceiverRegion()
	{
		return $this->ReceiverRegion;
	}

	/**
	 * @param   string  $ReceiverRegion
	 *
	 * @return StringOfContractInfo
	 */
	public function withReceiverRegion($ReceiverRegion)
	{
		$new                 = clone $this;
		$new->ReceiverRegion = $ReceiverRegion;

		return $new;
	}

	/**
	 * @return \DateTimeInterface
	 */
	public function getDateOfCollection()
	{
		return $this->DateOfCollection;
	}

	/**
	 * @param   \DateTimeInterface  $DateOfCollection
	 *
	 * @return StringOfContractInfo
	 */
	public function withDateOfCollection($DateOfCollection)
	{
		$new                   = clone $this;
		$new->DateOfCollection = $DateOfCollection;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getParcelStatusCode()
	{
		return $this->ParcelStatusCode;
	}

	/**
	 * @param   string  $ParcelStatusCode
	 *
	 * @return StringOfContractInfo
	 */
	public function withParcelStatusCode($ParcelStatusCode)
	{
		$new                   = clone $this;
		$new->ParcelStatusCode = $ParcelStatusCode;

		return $new;
	}

	/**
	 * @return \DateTimeInterface
	 */
	public function getDateOfDelivery()
	{
		return $this->DateOfDelivery;
	}

	/**
	 * @param   \DateTimeInterface  $DateOfDelivery
	 *
	 * @return StringOfContractInfo
	 */
	public function withDateOfDelivery($DateOfDelivery)
	{
		$new                 = clone $this;
		$new->DateOfDelivery = $DateOfDelivery;

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
	 * @return StringOfContractInfo
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
	public function getAwarded()
	{
		return $this->Awarded;
	}

	/**
	 * @param   string  $Awarded
	 *
	 * @return StringOfContractInfo
	 */
	public function withAwarded($Awarded)
	{
		$new          = clone $this;
		$new->Awarded = $Awarded;

		return $new;
	}
}

