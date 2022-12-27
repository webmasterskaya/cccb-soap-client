<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ResultOfNewApplication
{
    /**
     * @var bool Заявка создана удачно
     */
    private $Result;

    /**
     * @var string Если заявка не создана, то будет указана причина
     */
    private $Reason;

    /**
     * @var string GUID созданной заявки
     */
    private $ApplicationGUID;

    /**
     * @var string Номер заявки
     */
    private $ApplicationNumber;

    /**
     * @var string Номер отправлеиня (используется для отслеживания)
     */
    private $Numbers;

    /**
     * @return bool
     */
    public function getResult(): bool
    {
        return $this->Result;
    }

    /**
     * @param bool $Result
     * @return ResultOfNewApplication
     */
    public function withResult(bool $Result): ResultOfNewApplication
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->Reason;
    }

    /**
     * @param string $Reason
     * @return ResultOfNewApplication
     */
    public function withReason(string $Reason): ResultOfNewApplication
    {
        $new = clone $this;
        $new->Reason = $Reason;

        return $new;
    }

    /**
     * @return string
     */
    public function getApplicationGUID(): string
    {
        return $this->ApplicationGUID;
    }

    /**
     * @param string $ApplicationGUID
     * @return ResultOfNewApplication
     */
    public function withApplicationGUID(string $ApplicationGUID): ResultOfNewApplication
    {
        $new = clone $this;
        $new->ApplicationGUID = $ApplicationGUID;

        return $new;
    }

    /**
     * @return string
     */
    public function getApplicationNumber(): string
    {
        return $this->ApplicationNumber;
    }

    /**
     * @param string $ApplicationNumber
     * @return ResultOfNewApplication
     */
    public function withApplicationNumber(string $ApplicationNumber): ResultOfNewApplication
    {
        $new = clone $this;
        $new->ApplicationNumber = $ApplicationNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumbers(): string
    {
        return $this->Numbers;
    }

    /**
     * @param string $Numbers
     * @return ResultOfNewApplication
     */
    public function withNumbers(string $Numbers): ResultOfNewApplication
    {
        $new = clone $this;
        $new->Numbers = $Numbers;

        return $new;
    }
}

