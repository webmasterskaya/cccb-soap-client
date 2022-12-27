<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\CCCB\Constants\IMPORTANCE;
use Webmasterskaya\Soap\CCCB\Constants\TYPE;
use Webmasterskaya\Soap\CCCB\Constants\URGENCY;

class Parcel
{
    /**
     * @var float Вес в кг
     */
    private $Weight = 0;

    /**
     * @var int Количество мест. Если отправление много местно указывается количество мест
     */
    private $Count = 1;

    /**
     * @var string Индекс вложения
     * @see \Webmasterskaya\Soap\CCCB\Constants\INDEX
     */
    private $Index;

    /**
     * @var string Тип срочности, в зависимости от договра
     * @see \Webmasterskaya\Soap\CCCB\Constants\URGENCY
     */
    private $ApplicationUrgencyCode = URGENCY::STANDARD;

    /**
     * @var string Вид отправления
     * @see \Webmasterskaya\Soap\CCCB\Constants\TYPE
     */
    private $ApplicationParcelTypeCode = TYPE::PARCEL;

    /**
     * @var string Тип важности
     * @see \Webmasterskaya\Soap\CCCB\Constants\IMPORTANCE
     */
    private $ApplicationParcelImportanceCode = IMPORTANCE::CEN;

    /**
     * @var string Комментарий
     */
    private $Comment;

    /**
     * @var float Оценочная стоимость
     */
    private $Price = 0;

    /**
     * @var string Статус отправления
     */
    private $ApplicationParcelStatusCode;

    /**
     * @var Addressee Получатель
     */
    private $Addressee;

    /**
     * @var Address Адрес получателя
     */
    private $Address;

    /**
     * @var ContactPerson Контактное лицо получателя
     */
    private $ContactPerson;

    /**
     * @var string Максимальный габарит
     */
    private $MaxDimension;

    /**
     * @var string Номер отправления
     */
    private $Number;

    /**
     * @var float Сумма наложеного платежа
     */
    private $NalPlatezhSum = 0;

    /**
     * @var string
     */
    private $SalesOrderNumber;

    /**
     * @var string Номер отправления отправителя
     */
    private $CustomerNumber;

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
    public function withWeight(float $Weight): Parcel
    {
        $new = clone $this;
        $new->Weight = $Weight;

        return $new;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->Count;
    }

    /**
     * @param int $Count
     * @return Parcel
     */
    public function withCount(int $Count): Parcel
    {
        $new = clone $this;
        $new->Count = $Count;

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
     * @return Parcel
     */
    public function withIndex(string $Index): Parcel
    {
        $new = clone $this;
        $new->Index = $Index;

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
     * @return Parcel
     */
    public function withApplicationUrgencyCode(string $ApplicationUrgencyCode): Parcel
    {
        $new = clone $this;
        $new->ApplicationUrgencyCode = $ApplicationUrgencyCode;

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
     * @return Parcel
     */
    public function withApplicationParcelTypeCode(string $ApplicationParcelTypeCode): Parcel
    {
        $new = clone $this;
        $new->ApplicationParcelTypeCode = $ApplicationParcelTypeCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getApplicationParcelImportanceCode(): string
    {
        return $this->ApplicationParcelImportanceCode;
    }

    /**
     * @param string $ApplicationParcelImportanceCode
     * @return Parcel
     */
    public function withApplicationParcelImportanceCode(string $ApplicationParcelImportanceCode): Parcel
    {
        $new = clone $this;
        $new->ApplicationParcelImportanceCode = $ApplicationParcelImportanceCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return Parcel
     */
    public function withComment(string $Comment): Parcel
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
    public function withPrice(float $Price): Parcel
    {
        $new = clone $this;
        $new->Price = $Price;

        return $new;
    }

    /**
     * @return string
     */
    public function getApplicationParcelStatusCode(): string
    {
        return $this->ApplicationParcelStatusCode;
    }

    /**
     * @param string $ApplicationParcelStatusCode
     * @return Parcel
     */
    public function withApplicationParcelStatusCode(string $ApplicationParcelStatusCode): Parcel
    {
        $new = clone $this;
        $new->ApplicationParcelStatusCode = $ApplicationParcelStatusCode;

        return $new;
    }

    /**
     * @return Addressee
     */
    public function getAddressee(): Addressee
    {
        return $this->Addressee;
    }

    /**
     * @param Addressee $Addressee
     * @return Parcel
     */
    public function withAddressee(Addressee $Addressee): Parcel
    {
        $new = clone $this;
        $new->Addressee = $Addressee;

        return $new;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->Address;
    }

    /**
     * @param Address $Address
     * @return Parcel
     */
    public function withAddress(Address $Address): Parcel
    {
        $new = clone $this;
        $new->Address = $Address;

        return $new;
    }

    /**
     * @return ContactPerson
     */
    public function getContactPerson(): ContactPerson
    {
        return $this->ContactPerson;
    }

    /**
     * @param ContactPerson $ContactPerson
     * @return Parcel
     */
    public function withContactPerson(ContactPerson $ContactPerson): Parcel
    {
        $new = clone $this;
        $new->ContactPerson = $ContactPerson;

        return $new;
    }

    /**
     * @return string
     */
    public function getMaxDimension(): string
    {
        return $this->MaxDimension;
    }

    /**
     * @param string $MaxDimension
     * @return Parcel
     */
    public function withMaxDimension(string $MaxDimension): Parcel
    {
        $new = clone $this;
        $new->MaxDimension = $MaxDimension;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->Number;
    }

    /**
     * @param string $Number
     * @return Parcel
     */
    public function withNumber(string $Number): Parcel
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
    public function withNalPlatezhSum(float $NalPlatezhSum): Parcel
    {
        $new = clone $this;
        $new->NalPlatezhSum = $NalPlatezhSum;

        return $new;
    }

    /**
     * @return string
     */
    public function getSalesOrderNumber(): string
    {
        return $this->SalesOrderNumber;
    }

    /**
     * @param string $SalesOrderNumber
     * @return Parcel
     */
    public function withSalesOrderNumber(string $SalesOrderNumber): Parcel
    {
        $new = clone $this;
        $new->SalesOrderNumber = $SalesOrderNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomerNumber(): string
    {
        return $this->CustomerNumber;
    }

    /**
     * @param string $CustomerNumber
     * @return Parcel
     */
    public function withCustomerNumber(string $CustomerNumber): Parcel
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
    public function withLength(float $Length): Parcel
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
    public function withWidth(float $Width): Parcel
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
    public function withHeight(float $Height): Parcel
    {
        $new = clone $this;
        $new->Height = $Height;

        return $new;
    }
}

