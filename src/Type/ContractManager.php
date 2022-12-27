<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class ContractManager
{
    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $EMail;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return ContractManager
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getEMail()
    {
        return $this->EMail;
    }

    /**
     * @param string $EMail
     * @return ContractManager
     */
    public function withEMail($EMail)
    {
        $new = clone $this;
        $new->EMail = $EMail;

        return $new;
    }
}

