<?php

namespace GoetasWebservices\Client\EuroVies\SoapParts;

/**
 * Class representing CheckVatApproxInput
 */
class CheckVatApproxInput
{

    /**
     * @var \GoetasWebservices\Client\EuroVies\Types\CheckVatApprox $checkVatApprox
     */
    private $checkVatApprox = null;

    /**
     * Gets as checkVatApprox
     *
     * @return \GoetasWebservices\Client\EuroVies\Types\CheckVatApprox
     */
    public function getCheckVatApprox()
    {
        return $this->checkVatApprox;
    }

    /**
     * Sets a new checkVatApprox
     *
     * @param \GoetasWebservices\Client\EuroVies\Types\CheckVatApprox $checkVatApprox
     * @return self
     */
    public function setCheckVatApprox(\GoetasWebservices\Client\EuroVies\Types\CheckVatApprox $checkVatApprox)
    {
        $this->checkVatApprox = $checkVatApprox;
        return $this;
    }


}

