<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use DateTimeInterface;

class Application
{
    /**
     * @var string Идентификатор договора контрагента. Выдается сотрниками ИТ блока ФГУП ГЦСС,
     * в случае некоректного заполнения поля или информации в системе возможны ошибки
     * "Не найден контрагент" или "Не найден договор"
     */
    private $ContractGUID;

    /**
     * @var string Идентификатор услуги (по заключенному договору). Выдается сотрниками ИТ блока ФГУП ГЦСС
     */
    private $ServiceGUID;

    /**
     * @var mixed Всегда пустое служебное поле
     */
    private $ApplicationStatusCode;

    /**
     * @var DateTimeInterface Дата сбора
     */
    private $PickupDate;

    /**
     * @var string Время сбора "от" в формате hh:mm:ss
     */
    private $PickupTimeFrom = '00:00:00';

    /**
     * @var string Время сбора "до" в формате hh:mm:ss
     */
    private $PickupTimeTo = '00:00:00';

    /**
     * @var Addressee Адресат сбора
     */
    private $PickupAddressee;

    /**
     * @var Address Адрес сбора
     */
    private $PickupAddress;

    /**
     * @var ContactPerson Информация о контактном лице отправителя
     */
    private $PickupContactPerson;

    /**
     * @var bool Указание на прямую доставку
     */
    private $IsDirect = false;

    /**
     * @var string Комментарий к заявке
     */
    private $Comment;

    /**
     * @var Parcel Описание отправления/посылки.
     */
    private $Parcels;

    /**
     * @var string Номер реестра Ф1
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
    public function getContractGUID(): string
    {
        return $this->ContractGUID;
    }

    /**
     * @param string $ContractGUID
     * @return Application
     */
    public function withContractGUID(string $ContractGUID): Application
    {
        $new = clone $this;
        $new->ContractGUID = $ContractGUID;

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
     * @param mixed $ApplicationStatusCode
     * @return Application
     */
    public function withApplicationStatusCode($ApplicationStatusCode): Application
    {
        $new = clone $this;
        $new->ApplicationStatusCode = $ApplicationStatusCode;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getPickupDate(): DateTimeInterface
    {
        return $this->PickupDate;
    }

    /**
     * @param DateTimeInterface $PickupDate
     * @return Application
     */
    public function withPickupDate(DateTimeInterface $PickupDate): Application
    {
        $new = clone $this;
        $new->PickupDate = $PickupDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getPickupTimeFrom(): string
    {
        return $this->PickupTimeFrom;
    }

    /**
     * @param string $PickupTimeFrom
     * @return Application
     */
    public function withPickupTimeFrom(string $PickupTimeFrom): Application
    {
        $new = clone $this;
        $new->PickupTimeFrom = $PickupTimeFrom;

        return $new;
    }

    /**
     * @return string
     */
    public function getPickupTimeTo(): string
    {
        return $this->PickupTimeTo;
    }

    /**
     * @param string $PickupTimeTo
     * @return Application
     */
    public function withPickupTimeTo(string $PickupTimeTo): Application
    {
        $new = clone $this;
        $new->PickupTimeTo = $PickupTimeTo;

        return $new;
    }

    /**
     * @return Addressee
     */
    public function getPickupAddressee(): Addressee
    {
        return $this->PickupAddressee;
    }

    /**
     * @param Addressee $PickupAddressee
     * @return Application
     */
    public function withPickupAddressee(Addressee $PickupAddressee): Application
    {
        $new = clone $this;
        $new->PickupAddressee = $PickupAddressee;

        return $new;
    }

    /**
     * @return Address
     */
    public function getPickupAddress(): Address
    {
        return $this->PickupAddress;
    }

    /**
     * @param Address $PickupAddress
     * @return Application
     */
    public function withPickupAddress(Address $PickupAddress): Application
    {
        $new = clone $this;
        $new->PickupAddress = $PickupAddress;

        return $new;
    }

    /**
     * @return ContactPerson
     */
    public function getPickupContactPerson(): ContactPerson
    {
        return $this->PickupContactPerson;
    }

    /**
     * @param ContactPerson $PickupContactPerson
     * @return Application
     */
    public function withPickupContactPerson(ContactPerson $PickupContactPerson): Application
    {
        $new = clone $this;
        $new->PickupContactPerson = $PickupContactPerson;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsDirect(): bool
    {
        return $this->IsDirect;
    }

    /**
     * @param bool $IsDirect
     * @return Application
     */
    public function withIsDirect(bool $IsDirect): Application
    {
        $new = clone $this;
        $new->IsDirect = $IsDirect;

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
     * @return Application
     */
    public function withComment(string $Comment): Application
    {
        $new = clone $this;
        $new->Comment = $Comment;

        return $new;
    }

    /**
     * @return Parcel
     */
    public function getParcels(): Parcel
    {
        return $this->Parcels;
    }

    /**
     * @param Parcel $Parcels
     * @return Application
     */
    public function withParcels(Parcel $Parcels): Application
    {
        $new = clone $this;
        $new->Parcels = $Parcels;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegisterNumber(): string
    {
        return $this->RegisterNumber;
    }

    /**
     * @param string $RegisterNumber
     * @return Application
     */
    public function withRegisterNumber(string $RegisterNumber): Application
    {
        $new = clone $this;
        $new->RegisterNumber = $RegisterNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getIncomingNumber(): string
    {
        return $this->IncomingNumber;
    }

    /**
     * @param string $IncomingNumber
     * @return Application
     */
    public function withIncomingNumber(string $IncomingNumber): Application
    {
        $new = clone $this;
        $new->IncomingNumber = $IncomingNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getAttachedFileName(): string
    {
        return $this->AttachedFileName;
    }

    /**
     * @param string $AttachedFileName
     * @return Application
     */
    public function withAttachedFileName(string $AttachedFileName): Application
    {
        $new = clone $this;
        $new->AttachedFileName = $AttachedFileName;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRoundTrip(): bool
    {
        return $this->RoundTrip;
    }

    /**
     * @param bool $RoundTrip
     * @return Application
     */
    public function withRoundTrip(bool $RoundTrip): Application
    {
        $new = clone $this;
        $new->RoundTrip = $RoundTrip;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDangerousCargo(): bool
    {
        return $this->DangerousCargo;
    }

    /**
     * @param bool $DangerousCargo
     * @return Application
     */
    public function withDangerousCargo(bool $DangerousCargo): Application
    {
        $new = clone $this;
        $new->DangerousCargo = $DangerousCargo;

        return $new;
    }

    /**
     * @return string
     */
    public function getServiceGUID(): string
    {
        return $this->ServiceGUID;
    }

    /**
     * @param string $ServiceGUID
     * @return Application
     */
    public function withServiceGUID(string $ServiceGUID): Application
    {
        $new = clone $this;
        $new->ServiceGUID = $ServiceGUID;

        return $new;
    }
}

