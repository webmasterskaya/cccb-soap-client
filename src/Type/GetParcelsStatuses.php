<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class GetParcelsStatuses implements RequestInterface
{
    /**
     * @var  Parcels
     */
    private $Parcels;

    /**
     * @var string
     */
    private $ContractGUID;

    /**
     * Constructor
     *
     * @var  Parcels $Parcels
     * @var string $ContractGUID
     */
    public function __construct($Parcels, $ContractGUID)
    {
        $this->Parcels = $Parcels;
        $this->ContractGUID = $ContractGUID;
    }

    /**
     * @return  Parcels
     */
    public function getParcels()
    {
        return $this->Parcels;
    }

    /**
     * @param  Parcels $Parcels
     * @return GetParcelsStatuses
     */
    public function withParcels($Parcels)
    {
        $new = clone $this;
        $new->Parcels = $Parcels;

        return $new;
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
     * @return GetParcelsStatuses
     */
    public function withContractGUID($ContractGUID)
    {
        $new = clone $this;
        $new->ContractGUID = $ContractGUID;

        return $new;
    }
}

