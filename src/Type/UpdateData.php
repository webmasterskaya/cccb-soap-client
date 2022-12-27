<?php

namespace Webmasterskaya\Soap\CCCB\Type;

class UpdateData
{
    /**
     * @var string
     */
    private $ApplicationGUID;

    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\Parcel
     */
    private $Parcels;

    /**
     * @return string
     */
    public function getApplicationGUID()
    {
        return $this->ApplicationGUID;
    }

    /**
     * @param string $ApplicationGUID
     * @return UpdateData
     */
    public function withApplicationGUID($ApplicationGUID)
    {
        $new = clone $this;
        $new->ApplicationGUID = $ApplicationGUID;

        return $new;
    }

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\Parcel
     */
    public function getParcels()
    {
        return $this->Parcels;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\Parcel $Parcels
     * @return UpdateData
     */
    public function withParcels($Parcels)
    {
        $new = clone $this;
        $new->Parcels = $Parcels;

        return $new;
    }
}

