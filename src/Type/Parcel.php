<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class Parcel
{
    /**
     * @var float
     */
    private $Weight;

    /**
     * @var int
     */
    private $Count;

    /**
     * @var string
     */
    private $Index;

    /**
     * @var string
     */
    private $ApplicationUrgencyCode;

    /**
     * @var string
     */
    private $ApplicationParcelTypeCode;

    /**
     * @var string
     */
    private $ApplicationParcelImportanceCode;

    /**
     * @var string
     */
    private $Comment;

    /**
     * @var float
     */
    private $Price;

    /**
     * @var string
     */
    private $ApplicationParcelStatusCode;

    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\Addressee
     */
    private $Addressee;

    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\Address
     */
    private $Address;

    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\ContactPerson
     */
    private $ContactPerson;

    /**
     * @var string
     */
    private $MaxDimension;

    /**
     * @var string
     */
    private $Number;

    /**
     * @var float
     */
    private $NalPlatezhSum;

    /**
     * @var string
     */
    private $SalesOrderNumber;

    /**
     * @var string
     */
    private $CustomerNumber;

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
     * @return float
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * @param float $Weight
     * @return Parcel
     */
    public function withWeight($Weight)
    {
        $new = clone $this;
        $new->Weight = $Weight;

        return $new;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->Count;
    }

    /**
     * @param int $Count
     * @return Parcel
     */
    public function withCount($Count)
    {
        $new = clone $this;
        $new->Count = $Count;

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
     * @param string $Index
     * @return Parcel
     */
    public function withIndex($Index)
    {
        $new = clone $this;
        $new->Index = $Index;

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
     * @param string $ApplicationUrgencyCode
     * @return Parcel
     */
    public function withApplicationUrgencyCode($ApplicationUrgencyCode)
    {
        $new = clone $this;
        $new->ApplicationUrgencyCode = $ApplicationUrgencyCode;

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
     * @param string $ApplicationParcelTypeCode
     * @return Parcel
     */
    public function withApplicationParcelTypeCode($ApplicationParcelTypeCode)
    {
        $new = clone $this;
        $new->ApplicationParcelTypeCode = $ApplicationParcelTypeCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getApplicationParcelImportanceCode()
    {
        return $this->ApplicationParcelImportanceCode;
    }

    /**
     * @param string $ApplicationParcelImportanceCode
     * @return Parcel
     */
    public function withApplicationParcelImportanceCode($ApplicationParcelImportanceCode)
    {
        $new = clone $this;
        $new->ApplicationParcelImportanceCode = $ApplicationParcelImportanceCode;

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
     * @param string $Comment
     * @return Parcel
     */
    public function withComment($Comment)
    {
        $new = clone $this;
        $new->Comment = $Comment;

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
     * @return Parcel
     */
    public function withPrice($Price)
    {
        $new = clone $this;
        $new->Price = $Price;

        return $new;
    }

    /**
     * @return string
     */
    public function getApplicationParcelStatusCode()
    {
        return $this->ApplicationParcelStatusCode;
    }

    /**
     * @param string $ApplicationParcelStatusCode
     * @return Parcel
     */
    public function withApplicationParcelStatusCode($ApplicationParcelStatusCode)
    {
        $new = clone $this;
        $new->ApplicationParcelStatusCode = $ApplicationParcelStatusCode;

        return $new;
    }

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\Addressee
     */
    public function getAddressee()
    {
        return $this->Addressee;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\Addressee $Addressee
     * @return Parcel
     */
    public function withAddressee($Addressee)
    {
        $new = clone $this;
        $new->Addressee = $Addressee;

        return $new;
    }

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\Address
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\Address $Address
     * @return Parcel
     */
    public function withAddress($Address)
    {
        $new = clone $this;
        $new->Address = $Address;

        return $new;
    }

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\ContactPerson
     */
    public function getContactPerson()
    {
        return $this->ContactPerson;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\ContactPerson $ContactPerson
     * @return Parcel
     */
    public function withContactPerson($ContactPerson)
    {
        $new = clone $this;
        $new->ContactPerson = $ContactPerson;

        return $new;
    }

    /**
     * @return string
     */
    public function getMaxDimension()
    {
        return $this->MaxDimension;
    }

    /**
     * @param string $MaxDimension
     * @return Parcel
     */
    public function withMaxDimension($MaxDimension)
    {
        $new = clone $this;
        $new->MaxDimension = $MaxDimension;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param string $Number
     * @return Parcel
     */
    public function withNumber($Number)
    {
        $new = clone $this;
        $new->Number = $Number;

        return $new;
    }

    /**
     * @return float
     */
    public function getNalPlatezhSum()
    {
        return $this->NalPlatezhSum;
    }

    /**
     * @param float $NalPlatezhSum
     * @return Parcel
     */
    public function withNalPlatezhSum($NalPlatezhSum)
    {
        $new = clone $this;
        $new->NalPlatezhSum = $NalPlatezhSum;

        return $new;
    }

    /**
     * @return string
     */
    public function getSalesOrderNumber()
    {
        return $this->SalesOrderNumber;
    }

    /**
     * @param string $SalesOrderNumber
     * @return Parcel
     */
    public function withSalesOrderNumber($SalesOrderNumber)
    {
        $new = clone $this;
        $new->SalesOrderNumber = $SalesOrderNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomerNumber()
    {
        return $this->CustomerNumber;
    }

    /**
     * @param string $CustomerNumber
     * @return Parcel
     */
    public function withCustomerNumber($CustomerNumber)
    {
        $new = clone $this;
        $new->CustomerNumber = $CustomerNumber;

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
     * @return Parcel
     */
    public function withLength($Length)
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
     * @return Parcel
     */
    public function withWidth($Width)
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
     * @return Parcel
     */
    public function withHeight($Height)
    {
        $new = clone $this;
        $new->Height = $Height;

        return $new;
    }
}

