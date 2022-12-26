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
     * @var string $ContractGUID
     * @var string $Login
     * @var string $Password
     */
    public function __construct($ContractGUID, $Login, $Password)
    {
        $this->ContractGUID = $ContractGUID;
        $this->Login = $Login;
        $this->Password = $Password;
    }

    /**
     * @return string
     */
    public function getContractGUID()
    {
        return $this->ContractGUID;
    }

    /**
     * @param string $ContractGUID
     * @return ChangeID
     */
    public function withContractGUID($ContractGUID)
    {
        $new = clone $this;
        $new->ContractGUID = $ContractGUID;

        return $new;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * @param string $Login
     * @return ChangeID
     */
    public function withLogin($Login)
    {
        $new = clone $this;
        $new->Login = $Login;

        return $new;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param string $Password
     * @return ChangeID
     */
    public function withPassword($Password)
    {
        $new = clone $this;
        $new->Password = $Password;

        return $new;
    }
}

