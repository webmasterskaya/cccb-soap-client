<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ContractMainProps
{
    /**
     * @var string
     */
    private $guid;

    /**
     * @var string
     */
    private $uss_code;

    /**
     * @var string
     */
    private $user_guid;

    /**
     * @var \DateTimeInterface
     */
    private $date_start;

    /**
     * @var \DateTimeInterface
     */
    private $date_end;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTimeInterface
     */
    private $date;

    /**
     * @var string
     */
    private $number;

    /**
     * @var bool
     */
    private $nal_platezh;

    /**
     * @var string
     */
    private $contract_status_code;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $email;

    /**
     * @var bool
     */
    private $express_flag;

    /**
     * @var bool
     */
    private $business_flag;

    /**
     * @var bool
     */
    private $superexpress_flag;

    /**
     * @var bool
     */
    private $summ_flag;

    /**
     * @var bool
     */
    private $application_flag;

    /**
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * @param string $guid
     * @return ContractMainProps
     */
    public function withGuid($guid)
    {
        $new = clone $this;
        $new->guid = $guid;

        return $new;
    }

    /**
     * @return string
     */
    public function getUss_code()
    {
        return $this->uss_code;
    }

    /**
     * @param string $uss_code
     * @return ContractMainProps
     */
    public function withUss_code($uss_code)
    {
        $new = clone $this;
        $new->uss_code = $uss_code;

        return $new;
    }

    /**
     * @return string
     */
    public function getUser_guid()
    {
        return $this->user_guid;
    }

    /**
     * @param string $user_guid
     * @return ContractMainProps
     */
    public function withUser_guid($user_guid)
    {
        $new = clone $this;
        $new->user_guid = $user_guid;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate_start()
    {
        return $this->date_start;
    }

    /**
     * @param \DateTimeInterface $date_start
     * @return ContractMainProps
     */
    public function withDate_start($date_start)
    {
        $new = clone $this;
        $new->date_start = $date_start;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate_end()
    {
        return $this->date_end;
    }

    /**
     * @param \DateTimeInterface $date_end
     * @return ContractMainProps
     */
    public function withDate_end($date_end)
    {
        $new = clone $this;
        $new->date_end = $date_end;

        return $new;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ContractMainProps
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTimeInterface $date
     * @return ContractMainProps
     */
    public function withDate($date)
    {
        $new = clone $this;
        $new->date = $date;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @return ContractMainProps
     */
    public function withNumber($number)
    {
        $new = clone $this;
        $new->number = $number;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNal_platezh()
    {
        return $this->nal_platezh;
    }

    /**
     * @param bool $nal_platezh
     * @return ContractMainProps
     */
    public function withNal_platezh($nal_platezh)
    {
        $new = clone $this;
        $new->nal_platezh = $nal_platezh;

        return $new;
    }

    /**
     * @return string
     */
    public function getContract_status_code()
    {
        return $this->contract_status_code;
    }

    /**
     * @param string $contract_status_code
     * @return ContractMainProps
     */
    public function withContract_status_code($contract_status_code)
    {
        $new = clone $this;
        $new->contract_status_code = $contract_status_code;

        return $new;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return ContractMainProps
     */
    public function withLogin($login)
    {
        $new = clone $this;
        $new->login = $login;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return ContractMainProps
     */
    public function withEmail($email)
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }

    /**
     * @return bool
     */
    public function getExpress_flag()
    {
        return $this->express_flag;
    }

    /**
     * @param bool $express_flag
     * @return ContractMainProps
     */
    public function withExpress_flag($express_flag)
    {
        $new = clone $this;
        $new->express_flag = $express_flag;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBusiness_flag()
    {
        return $this->business_flag;
    }

    /**
     * @param bool $business_flag
     * @return ContractMainProps
     */
    public function withBusiness_flag($business_flag)
    {
        $new = clone $this;
        $new->business_flag = $business_flag;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSuperexpress_flag()
    {
        return $this->superexpress_flag;
    }

    /**
     * @param bool $superexpress_flag
     * @return ContractMainProps
     */
    public function withSuperexpress_flag($superexpress_flag)
    {
        $new = clone $this;
        $new->superexpress_flag = $superexpress_flag;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSumm_flag()
    {
        return $this->summ_flag;
    }

    /**
     * @param bool $summ_flag
     * @return ContractMainProps
     */
    public function withSumm_flag($summ_flag)
    {
        $new = clone $this;
        $new->summ_flag = $summ_flag;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplication_flag()
    {
        return $this->application_flag;
    }

    /**
     * @param bool $application_flag
     * @return ContractMainProps
     */
    public function withApplication_flag($application_flag)
    {
        $new = clone $this;
        $new->application_flag = $application_flag;

        return $new;
    }
}

