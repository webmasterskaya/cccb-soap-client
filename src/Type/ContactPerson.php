<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ContactPerson
{
    /**
     * @var string ФИО получателя
     */
    private $Name;

    /**
     * @var string Должность
     */
    private $Position;

    /**
     * @var string Телефон
     */
    private $Phone;

    /**
     * @var string Комментарий
     */
    private $Comment;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return ContactPerson
     */
    public function withName(string $Name): ContactPerson
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->Position;
    }

    /**
     * @param string $Position
     * @return ContactPerson
     */
    public function withPosition(string $Position): ContactPerson
    {
        $new = clone $this;
        $new->Position = $Position;

        return $new;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return ContactPerson
     */
    public function withPhone(string $Phone): ContactPerson
    {
        $new = clone $this;
        $new->Phone = $Phone;

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
     * @return ContactPerson
     */
    public function withComment(string $Comment): ContactPerson
    {
        $new = clone $this;
        $new->Comment = $Comment;

        return $new;
    }
}

