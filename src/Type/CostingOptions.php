<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\CCCB\Constants\TYPE;
use Webmasterskaya\Soap\CCCB\Constants\URGENCY;

class CostingOptions
{
    /**
     * @var string Идентификатор договора контрагента СпецСвязи
     */
    private $ContractGUID;

    /**
     * @var string Регион отправителя
     */
    private $SenderRegion;

    /**
     * @var string Район отправителя
     */
    private $SenderDistrict;

    /**
     * @var string Город отправителя
     */
    private $SenderCity;

    /**
     * @var string Населеный пункт отправителя
     */
    private $SenderLocality;

    /**
     * @var bool Иностраный адрес получателя
     */
    private $InternationalDelivery = false;

    /**
     * @var bool Адрес получателя в стлице иностранного государства
     */
    private $InternationalDeliveryToCapital = false;

    /**
     * @var string Страна получателя
     */
    private $ReceiverCountry;

    /**
     * @var string Регион отправителя
     */
    private $ReceiverRegion;

    /**
     * @var string Район отправителя
     */
    private $ReceiverDistrict;

    /**
     * @var string Город отправителя
     */
    private $ReceiverCity;

    /**
     * @var string  Населеный пункт отправителя
     */
    private $ReceiverLocality;

    /**
     * @var string Тип срочности, в зависимости от договра
     */
    private $ApplicationUrgencyCode = URGENCY::STANDARD;

    /**
     * @var string
     */
    private $TypeDeliveryCode;

    /**
     * @var string Вид отправления
     */
    private $ApplicationParcelTypeCode = TYPE::PARCEL;

    /**
     * @var float Вес в кг
     */
    private $Weight = 0;

    /**
     * @var float Оценочная стоимость
     */
    private $Price = 0;

    /**
     * @var float Длинна
     */
    private $Length = 0;

    /**
     * @var float Ширина
     */
    private $Width = 0;

    /**
     * @var float Высота
     */
    private $Height = 0;

    /**
     * @var float Радиус (если вы хотите отправить шар)
     */
    private $Radius = 0;

    /**
     * @var string Индекс вложения
     */
    private $Index;

    /**
     * @return string
     */
    public function getContractGUID(): string
    {
        return $this->ContractGUID;
    }

    /**
     * @param string $ContractGUID
     * @return CostingOptions
     */
    public function withContractGUID(string $ContractGUID): CostingOptions
    {
        $new = clone $this;
        $new->ContractGUID = $ContractGUID;

        return $new;
    }

    /**
     * @return string
     */
    public function getSenderRegion(): string
    {
        return $this->SenderRegion;
    }

    /**
     * @param string $SenderRegion
     * @return CostingOptions
     */
    public function withSenderRegion(string $SenderRegion): CostingOptions
    {
        $new = clone $this;
        $new->SenderRegion = $SenderRegion;

        return $new;
    }

    /**
     * @return string
     */
    public function getSenderDistrict(): string
    {
        return $this->SenderDistrict;
    }

    /**
     * @param string $SenderDistrict
     * @return CostingOptions
     */
    public function withSenderDistrict(string $SenderDistrict): CostingOptions
    {
        $new = clone $this;
        $new->SenderDistrict = $SenderDistrict;

        return $new;
    }

    /**
     * @return string
     */
    public function getSenderCity(): string
    {
        return $this->SenderCity;
    }

    /**
     * @param string $SenderCity
     * @return CostingOptions
     */
    public function withSenderCity(string $SenderCity): CostingOptions
    {
        $new = clone $this;
        $new->SenderCity = $SenderCity;

        return $new;
    }

    /**
     * @return string
     */
    public function getSenderLocality(): string
    {
        return $this->SenderLocality;
    }

    /**
     * @param string $SenderLocality
     * @return CostingOptions
     */
    public function withSenderLocality(string $SenderLocality): CostingOptions
    {
        $new = clone $this;
        $new->SenderLocality = $SenderLocality;

        return $new;
    }

    /**
     * @return bool
     */
    public function getInternationalDelivery(): bool
    {
        return $this->InternationalDelivery;
    }

    /**
     * @param bool $InternationalDelivery
     * @return CostingOptions
     */
    public function withInternationalDelivery(bool $InternationalDelivery): CostingOptions
    {
        $new = clone $this;
        $new->InternationalDelivery = $InternationalDelivery;

        return $new;
    }

    /**
     * @return bool
     */
    public function getInternationalDeliveryToCapital(): bool
    {
        return $this->InternationalDeliveryToCapital;
    }

    /**
     * @param bool $InternationalDeliveryToCapital
     * @return CostingOptions
     */
    public function withInternationalDeliveryToCapital(bool $InternationalDeliveryToCapital): CostingOptions
    {
        $new = clone $this;
        $new->InternationalDeliveryToCapital = $InternationalDeliveryToCapital;

        return $new;
    }

    /**
     * @return string
     */
    public function getReceiverCountry(): string
    {
        return $this->ReceiverCountry;
    }

    /**
     * @param string $ReceiverCountry
     * @return CostingOptions
     */
    public function withReceiverCountry(string $ReceiverCountry): CostingOptions
    {
        $new = clone $this;
        $new->ReceiverCountry = $ReceiverCountry;

        return $new;
    }

    /**
     * @return string
     */
    public function getReceiverRegion(): string
    {
        return $this->ReceiverRegion;
    }

    /**
     * @param string $ReceiverRegion
     * @return CostingOptions
     */
    public function withReceiverRegion(string $ReceiverRegion): CostingOptions
    {
        $new = clone $this;
        $new->ReceiverRegion = $ReceiverRegion;

        return $new;
    }

    /**
     * @return string
     */
    public function getReceiverDistrict(): string
    {
        return $this->ReceiverDistrict;
    }

    /**
     * @param string $ReceiverDistrict
     * @return CostingOptions
     */
    public function withReceiverDistrict(string $ReceiverDistrict): CostingOptions
    {
        $new = clone $this;
        $new->ReceiverDistrict = $ReceiverDistrict;

        return $new;
    }

    /**
     * @return string
     */
    public function getReceiverCity(): string
    {
        return $this->ReceiverCity;
    }

    /**
     * @param string $ReceiverCity
     * @return CostingOptions
     */
    public function withReceiverCity(string $ReceiverCity): CostingOptions
    {
        $new = clone $this;
        $new->ReceiverCity = $ReceiverCity;

        return $new;
    }

    /**
     * @return string
     */
    public function getReceiverLocality(): string
    {
        return $this->ReceiverLocality;
    }

    /**
     * @param string $ReceiverLocality
     * @return CostingOptions
     */
    public function withReceiverLocality(string $ReceiverLocality): CostingOptions
    {
        $new = clone $this;
        $new->ReceiverLocality = $ReceiverLocality;

        return $new;
    }

    /**
     * @return string
     */
    public function getApplicationUrgencyCode(): string
    {
        return $this->ApplicationUrgencyCode;
    }

    /**
     * @param string $ApplicationUrgencyCode
     * @return CostingOptions
     */
    public function withApplicationUrgencyCode(string $ApplicationUrgencyCode): CostingOptions
    {
        $new = clone $this;
        $new->ApplicationUrgencyCode = $ApplicationUrgencyCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getTypeDeliveryCode(): string
    {
        return $this->TypeDeliveryCode;
    }

    /**
     * @param string $TypeDeliveryCode
     * @return CostingOptions
     */
    public function withTypeDeliveryCode(string $TypeDeliveryCode): CostingOptions
    {
        $new = clone $this;
        $new->TypeDeliveryCode = $TypeDeliveryCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getApplicationParcelTypeCode(): string
    {
        return $this->ApplicationParcelTypeCode;
    }

    /**
     * @param string $ApplicationParcelTypeCode
     * @return CostingOptions
     */
    public function withApplicationParcelTypeCode(string $ApplicationParcelTypeCode): CostingOptions
    {
        $new = clone $this;
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
     * @param float $Weight
     * @return CostingOptions
     */
    public function withWeight(float $Weight): CostingOptions
    {
        $new = clone $this;
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
     * @param float $Price
     * @return CostingOptions
     */
    public function withPrice(float $Price): CostingOptions
    {
        $new = clone $this;
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
     * @param float $Length
     * @return CostingOptions
     */
    public function withLength(float $Length): CostingOptions
    {
        $new = clone $this;
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
     * @param float $Width
     * @return CostingOptions
     */
    public function withWidth(float $Width): CostingOptions
    {
        $new = clone $this;
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
     * @param float $Height
     * @return CostingOptions
     */
    public function withHeight(float $Height): CostingOptions
    {
        $new = clone $this;
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
     * @param float $Radius
     * @return CostingOptions
     */
    public function withRadius(float $Radius): CostingOptions
    {
        $new = clone $this;
        $new->Radius = $Radius;

        return $new;
    }

    /**
     * @return string
     */
    public function getIndex(): string
    {
        return $this->Index;
    }

    /**
     * @param string $Index
     * @return CostingOptions
     */
    public function withIndex(string $Index): CostingOptions
    {
        $new = clone $this;
        $new->Index = $Index;

        return $new;
    }
}

