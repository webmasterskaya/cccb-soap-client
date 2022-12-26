<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class StringOfDetailedAccountReport
{
    /**
     * @var string
     */
    private $CheckNumber;

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
     * @var float
     */
    private $SumWithoutNDS;

    /**
     * @var float
     */
    private $NDS;

    /**
     * @var float
     */
    private $TotalSum;

    /**
     * @var string
     */
    private $IncomingNumber;

    /**
     * @return string
     */
    public function getCheckNumber()
    {
        return $this->CheckNumber;
    }

    /**
     * @param string $CheckNumber
     * @return StringOfDetailedAccountReport
     */
    public function withCheckNumber($CheckNumber)
    {
        $new = clone $this;
        $new->CheckNumber = $CheckNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getApplicationNumber()
    {
        return $this->ApplicationNumber;
    }

    /**
     * @param string $ApplicationNumber
     * @return StringOfDetailedAccountReport
     */
    public function withApplicationNumber($ApplicationNumber)
    {
        $new = clone $this;
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
     * @param \DateTimeInterface $ApplicationDate
     * @return StringOfDetailedAccountReport
     */
    public function withApplicationDate($ApplicationDate)
    {
        $new = clone $this;
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
     * @param string $ParcelNumber
     * @return StringOfDetailedAccountReport
     */
    public function withParcelNumber($ParcelNumber)
    {
        $new = clone $this;
        $new->ParcelNumber = $ParcelNumber;

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
     * @param string $Sender
     * @return StringOfDetailedAccountReport
     */
    public function withSender($Sender)
    {
        $new = clone $this;
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
     * @param string $SenderCity
     * @return StringOfDetailedAccountReport
     */
    public function withSenderCity($SenderCity)
    {
        $new = clone $this;
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
     * @param string $SenderRegion
     * @return StringOfDetailedAccountReport
     */
    public function withSenderRegion($SenderRegion)
    {
        $new = clone $this;
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
     * @param string $Receiver
     * @return StringOfDetailedAccountReport
     */
    public function withReceiver($Receiver)
    {
        $new = clone $this;
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
     * @param string $ReceiverCity
     * @return StringOfDetailedAccountReport
     */
    public function withReceiverCity($ReceiverCity)
    {
        $new = clone $this;
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
     * @param string $ReceiverRegion
     * @return StringOfDetailedAccountReport
     */
    public function withReceiverRegion($ReceiverRegion)
    {
        $new = clone $this;
        $new->ReceiverRegion = $ReceiverRegion;

        return $new;
    }

    /**
     * @return float
     */
    public function getSumWithoutNDS()
    {
        return $this->SumWithoutNDS;
    }

    /**
     * @param float $SumWithoutNDS
     * @return StringOfDetailedAccountReport
     */
    public function withSumWithoutNDS($SumWithoutNDS)
    {
        $new = clone $this;
        $new->SumWithoutNDS = $SumWithoutNDS;

        return $new;
    }

    /**
     * @return float
     */
    public function getNDS()
    {
        return $this->NDS;
    }

    /**
     * @param float $NDS
     * @return StringOfDetailedAccountReport
     */
    public function withNDS($NDS)
    {
        $new = clone $this;
        $new->NDS = $NDS;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotalSum()
    {
        return $this->TotalSum;
    }

    /**
     * @param float $TotalSum
     * @return StringOfDetailedAccountReport
     */
    public function withTotalSum($TotalSum)
    {
        $new = clone $this;
        $new->TotalSum = $TotalSum;

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
     * @param string $IncomingNumber
     * @return StringOfDetailedAccountReport
     */
    public function withIncomingNumber($IncomingNumber)
    {
        $new = clone $this;
        $new->IncomingNumber = $IncomingNumber;

        return $new;
    }
}

