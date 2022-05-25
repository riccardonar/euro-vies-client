<?php

namespace GoetasWebservices\Client\EuroVies\SoapParts;

/**
 * Class representing CheckVatInput
 */
class CheckVatInput
{

    /**
     * @var \GoetasWebservices\Client\EuroVies\Types\CheckVat $checkVat
     */
    private $checkVat = null;

    /**
     * Gets as checkVat
     *
     * @return \GoetasWebservices\Client\EuroVies\Types\CheckVat
     */
    public function getCheckVat()
    {
        return $this->checkVat;
    }

    /**
     * Sets a new checkVat
     *
     * @param \GoetasWebservices\Client\EuroVies\Types\CheckVat $checkVat
     * @return self
     */
    public function setCheckVat(\GoetasWebservices\Client\EuroVies\Types\CheckVat $checkVat)
    {
        $this->checkVat = $checkVat;
        return $this;
    }


}

