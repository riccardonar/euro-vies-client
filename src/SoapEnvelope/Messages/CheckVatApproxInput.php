<?php

namespace GoetasWebservices\Client\EuroVies\SoapEnvelope\Messages;

/**
 * Class representing CheckVatApproxInput
 */
class CheckVatApproxInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \GoetasWebservices\Client\EuroVies\SoapParts\CheckVatApproxInput $body
     */
    private $body = null;

    /**
     * @var \GoetasWebservices\Client\EuroVies\SoapEnvelope\Headers\CheckVatApproxInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \GoetasWebservices\Client\EuroVies\SoapParts\CheckVatApproxInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \GoetasWebservices\Client\EuroVies\SoapParts\CheckVatApproxInput $body
     * @return self
     */
    public function setBody(\GoetasWebservices\Client\EuroVies\SoapParts\CheckVatApproxInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \GoetasWebservices\Client\EuroVies\SoapEnvelope\Headers\CheckVatApproxInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \GoetasWebservices\Client\EuroVies\SoapEnvelope\Headers\CheckVatApproxInput $header
     * @return self
     */
    public function setHeader(\GoetasWebservices\Client\EuroVies\SoapEnvelope\Headers\CheckVatApproxInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

