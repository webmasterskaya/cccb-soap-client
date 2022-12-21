<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class CostingOptions implements ContractGuidAwareInterface
{

	use ContractGuidAwareTrait;

	/**
	 * @var string
	 */
	private $SenderRegion;

	/**
	 * @var string
	 */
	private $SenderDistrict;

	/**
	 * @var string
	 */
	private $SenderCity;

	/**
	 * @var string
	 */
	private $SenderLocality;

	/**
	 * @var bool
	 */
	private $InternationalDelivery;

	/**
	 * @var bool
	 */
	private $InternationalDeliveryToCapital;

	/**
	 * @var string
	 */
	private $ReceiverCountry;

	/**
	 * @var string
	 */
	private $ReceiverRegion;

	/**
	 * @var string
	 */
	private $ReceiverDistrict;

	/**
	 * @var string
	 */
	private $ReceiverCity;

	/**
	 * @var string
	 */
	private $ReceiverLocality;

	/**
	 * @var string
	 */
	private $ApplicationUrgencyCode;

	/**
	 * @var string
	 */
	private $TypeDeliveryCode;

	/**
	 * @var string
	 */
	private $ApplicationParcelTypeCode;

	/**
	 * @var float
	 */
	private $Weight;

	/**
	 * @var float
	 */
	private $Price;

	/**
	 * @var float
	 */
	private $Length;

	/**
	 * @var float
	 */
	private $Width;

	/**
	 * @var float
	 */
	private $Height;

	/**
	 * @var float
	 */
	private $Radius;

	/**
	 * @var string
	 */
	private $Index;

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
	 * @return CostingOptions
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
	public function getSenderDistrict()
	{
		return $this->SenderDistrict;
	}

	/**
	 * @param   string  $SenderDistrict
	 *
	 * @return CostingOptions
	 */
	public function withSenderDistrict($SenderDistrict)
	{
		$new                 = clone $this;
		$new->SenderDistrict = $SenderDistrict;

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
	 * @return CostingOptions
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
	public function getSenderLocality()
	{
		return $this->SenderLocality;
	}

	/**
	 * @param   string  $SenderLocality
	 *
	 * @return CostingOptions
	 */
	public function withSenderLocality($SenderLocality)
	{
		$new                 = clone $this;
		$new->SenderLocality = $SenderLocality;

		return $new;
	}

	/**
	 * @return bool
	 */
	public function getInternationalDelivery()
	{
		return $this->InternationalDelivery;
	}

	/**
	 * @param   bool  $InternationalDelivery
	 *
	 * @return CostingOptions
	 */
	public function withInternationalDelivery($InternationalDelivery)
	{
		$new                        = clone $this;
		$new->InternationalDelivery = $InternationalDelivery;

		return $new;
	}

	/**
	 * @return bool
	 */
	public function getInternationalDeliveryToCapital()
	{
		return $this->InternationalDeliveryToCapital;
	}

	/**
	 * @param   bool  $InternationalDeliveryToCapital
	 *
	 * @return CostingOptions
	 */
	public function withInternationalDeliveryToCapital($InternationalDeliveryToCapital)
	{
		$new                                 = clone $this;
		$new->InternationalDeliveryToCapital = $InternationalDeliveryToCapital;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getReceiverCountry()
	{
		return $this->ReceiverCountry;
	}

	/**
	 * @param   string  $ReceiverCountry
	 *
	 * @return CostingOptions
	 */
	public function withReceiverCountry($ReceiverCountry)
	{
		$new                  = clone $this;
		$new->ReceiverCountry = $ReceiverCountry;

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
	 * @return CostingOptions
	 */
	public function withReceiverRegion($ReceiverRegion)
	{
		$new                 = clone $this;
		$new->ReceiverRegion = $ReceiverRegion;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getReceiverDistrict()
	{
		return $this->ReceiverDistrict;
	}

	/**
	 * @param   string  $ReceiverDistrict
	 *
	 * @return CostingOptions
	 */
	public function withReceiverDistrict($ReceiverDistrict)
	{
		$new                   = clone $this;
		$new->ReceiverDistrict = $ReceiverDistrict;

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
	 * @return CostingOptions
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
	public function getReceiverLocality()
	{
		return $this->ReceiverLocality;
	}

	/**
	 * @param   string  $ReceiverLocality
	 *
	 * @return CostingOptions
	 */
	public function withReceiverLocality($ReceiverLocality)
	{
		$new                   = clone $this;
		$new->ReceiverLocality = $ReceiverLocality;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getApplicationUrgencyCode()
	{
		return $this->ApplicationUrgencyCode;
	}

	/**
	 * @param   string  $ApplicationUrgencyCode
	 *
	 * @return CostingOptions
	 */
	public function withApplicationUrgencyCode($ApplicationUrgencyCode)
	{
		$new                         = clone $this;
		$new->ApplicationUrgencyCode = $ApplicationUrgencyCode;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getTypeDeliveryCode()
	{
		return $this->TypeDeliveryCode;
	}

	/**
	 * @param   string  $TypeDeliveryCode
	 *
	 * @return CostingOptions
	 */
	public function withTypeDeliveryCode($TypeDeliveryCode)
	{
		$new                   = clone $this;
		$new->TypeDeliveryCode = $TypeDeliveryCode;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getApplicationParcelTypeCode()
	{
		return $this->ApplicationParcelTypeCode;
	}

	/**
	 * @param   string  $ApplicationParcelTypeCode
	 *
	 * @return CostingOptions
	 */
	public function withApplicationParcelTypeCode($ApplicationParcelTypeCode)
	{
		$new                            = clone $this;
		$new->ApplicationParcelTypeCode = $ApplicationParcelTypeCode;

		return $new;
	}

	/**
	 * @return float
	 */
	public function getWeight()
	{
		return $this->Weight;
	}

	/**
	 * @param   float  $Weight
	 *
	 * @return CostingOptions
	 */
	public function withWeight($Weight)
	{
		$new         = clone $this;
		$new->Weight = $Weight;

		return $new;
	}

	/**
	 * @return float
	 */
	public function getPrice()
	{
		return $this->Price;
	}

	/**
	 * @param   float  $Price
	 *
	 * @return CostingOptions
	 */
	public function withPrice($Price)
	{
		$new        = clone $this;
		$new->Price = $Price;

		return $new;
	}

	/**
	 * @return float
	 */
	public function getLength()
	{
		return $this->Length;
	}

	/**
	 * @param   float  $Length
	 *
	 * @return CostingOptions
	 */
	public function withLength($Length)
	{
		$new         = clone $this;
		$new->Length = $Length;

		return $new;
	}

	/**
	 * @return float
	 */
	public function getWidth()
	{
		return $this->Width;
	}

	/**
	 * @param   float  $Width
	 *
	 * @return CostingOptions
	 */
	public function withWidth($Width)
	{
		$new        = clone $this;
		$new->Width = $Width;

		return $new;
	}

	/**
	 * @return float
	 */
	public function getHeight()
	{
		return $this->Height;
	}

	/**
	 * @param   float  $Height
	 *
	 * @return CostingOptions
	 */
	public function withHeight($Height)
	{
		$new         = clone $this;
		$new->Height = $Height;

		return $new;
	}

	/**
	 * @return float
	 */
	public function getRadius()
	{
		return $this->Radius;
	}

	/**
	 * @param   float  $Radius
	 *
	 * @return CostingOptions
	 */
	public function withRadius($Radius)
	{
		$new         = clone $this;
		$new->Radius = $Radius;

		return $new;
	}

	/**
	 * @return string
	 */
	public function getIndex()
	{
		return $this->Index;
	}

	/**
	 * @param   string  $Index
	 *
	 * @return CostingOptions
	 */
	public function withIndex($Index)
	{
		$new        = clone $this;
		$new->Index = $Index;

		return $new;
	}
}

