<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ResultOfRegistration
{
    /**
     * @var bool
     */
    private $Result;

    /**
     * @var string
     */
    private $Reason;

    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\User
     */
    private $User;

    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\Contract
     */
    private $Contract;

    /**
     * @var bool
     */
    private $Business_flag;

    /**
     * @var bool
     */
    private $Express_flag;

    /**
     * @var bool
     */
    private $Superexpress_flag;

    /**
     * @return bool
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param bool $Result
     * @return ResultOfRegistration
     */
    public function withResult($Result)
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->Reason;
    }

    /**
     * @param string $Reason
     * @return ResultOfRegistration
     */
    public function withReason($Reason)
    {
        $new = clone $this;
        $new->Reason = $Reason;

        return $new;
    }

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\User
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\User $User
     * @return ResultOfRegistration
     */
    public function withUser($User)
    {
        $new = clone $this;
        $new->User = $User;

        return $new;
    }

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\Contract
     */
    public function getContract()
    {
        return $this->Contract;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\Contract $Contract
     * @return ResultOfRegistration
     */
    public function withContract($Contract)
    {
        $new = clone $this;
        $new->Contract = $Contract;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBusiness_flag()
    {
        return $this->Business_flag;
    }

    /**
     * @param bool $Business_flag
     * @return ResultOfRegistration
     */
    public function withBusiness_flag($Business_flag)
    {
        $new = clone $this;
        $new->Business_flag = $Business_flag;

        return $new;
    }

    /**
     * @return bool
     */
    public function getExpress_flag()
    {
        return $this->Express_flag;
    }

    /**
     * @param bool $Express_flag
     * @return ResultOfRegistration
     */
    public function withExpress_flag($Express_flag)
    {
        $new = clone $this;
        $new->Express_flag = $Express_flag;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSuperexpress_flag()
    {
        return $this->Superexpress_flag;
    }

    /**
     * @param bool $Superexpress_flag
     * @return ResultOfRegistration
     */
    public function withSuperexpress_flag($Superexpress_flag)
    {
        $new = clone $this;
        $new->Superexpress_flag = $Superexpress_flag;

        return $new;
    }
}

