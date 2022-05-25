<?php

namespace GoetasWebservices\Client\EuroVies\SoapParts;

/**
 * Class representing CheckVatOutput
 */
class CheckVatOutput
{

    /**
     * @var \GoetasWebservices\Client\EuroVies\Types\CheckVatResponse $checkVatResponse
     */
    private $checkVatResponse = null;

    /**
     * Gets as checkVatResponse
     *
     * @return \GoetasWebservices\Client\EuroVies\Types\CheckVatResponse
     */
    public function getCheckVatResponse()
    {
        return $this->checkVatResponse;
    }

    /**
     * Sets a new checkVatResponse
     *
     * @param \GoetasWebservices\Client\EuroVies\Types\CheckVatResponse $checkVatResponse
     * @return self
     */
    public function setCheckVatResponse(\GoetasWebservices\Client\EuroVies\Types\CheckVatResponse $checkVatResponse)
    {
        $this->checkVatResponse = $checkVatResponse;
        return $this;
    }


}

