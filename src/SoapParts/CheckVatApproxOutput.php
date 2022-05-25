<?php

namespace GoetasWebservices\Client\EuroVies\SoapParts;

/**
 * Class representing CheckVatApproxOutput
 */
class CheckVatApproxOutput
{

    /**
     * @var \GoetasWebservices\Client\EuroVies\Types\CheckVatApproxResponse $checkVatApproxResponse
     */
    private $checkVatApproxResponse = null;

    /**
     * Gets as checkVatApproxResponse
     *
     * @return \GoetasWebservices\Client\EuroVies\Types\CheckVatApproxResponse
     */
    public function getCheckVatApproxResponse()
    {
        return $this->checkVatApproxResponse;
    }

    /**
     * Sets a new checkVatApproxResponse
     *
     * @param \GoetasWebservices\Client\EuroVies\Types\CheckVatApproxResponse $checkVatApproxResponse
     * @return self
     */
    public function setCheckVatApproxResponse(\GoetasWebservices\Client\EuroVies\Types\CheckVatApproxResponse $checkVatApproxResponse)
    {
        $this->checkVatApproxResponse = $checkVatApproxResponse;
        return $this;
    }


}

