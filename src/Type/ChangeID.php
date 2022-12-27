<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class ChangeID implements RequestInterface
{
    /**
     * @var string
     */
    private $ContractGUID;

    /**
     * @var string
     */
    private $Login;

    /**
     * @var string
     */
    private $Password;

    /**
     * Constructor
     *
     * @param string|null $ContractGUID
     * @param string|null $Login
     * @param string|null $Password
     */
    public function __construct(string $ContractGUID = null, string $Login = null, string $Password = null)
    {
        $this->ContractGUID = $ContractGUID;
        $this->Login = $Login;
        $this->Password = $Password;
    }

    /**
     * @return string
     */
    public function getContractGUID(): string
    {
        return $this->ContractGUID;
    }

    /**
     * @param string $ContractGUID
     * @return ChangeID
     */
    public function withContractGUID(string $ContractGUID): ChangeID
    {
        $new = clone $this;
        $new->ContractGUID = $ContractGUID;

        return $new;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->Login;
    }

    /**
     * @param string $Login
     * @return ChangeID
     */
    public function withLogin(string $Login): ChangeID
    {
        $new = clone $this;
        $new->Login = $Login;

        return $new;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->Password;
    }

    /**
     * @param string $Password
     * @return ChangeID
     */
    public function withPassword(string $Password): ChangeID
    {
        $new = clone $this;
        $new->Password = $Password;

        return $new;
    }
}

