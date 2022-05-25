<?php

namespace GoetasWebservices\Client\EuroVies\SoapEnvelope\Messages;

/**
 * Class representing CheckVatInput
 */
class CheckVatInput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \GoetasWebservices\Client\EuroVies\SoapParts\CheckVatInput $body
     */
    private $body = null;

    /**
     * @var \GoetasWebservices\Client\EuroVies\SoapEnvelope\Headers\CheckVatInput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \GoetasWebservices\Client\EuroVies\SoapParts\CheckVatInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \GoetasWebservices\Client\EuroVies\SoapParts\CheckVatInput $body
     * @return self
     */
    public function setBody(\GoetasWebservices\Client\EuroVies\SoapParts\CheckVatInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \GoetasWebservices\Client\EuroVies\SoapEnvelope\Headers\CheckVatInput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \GoetasWebservices\Client\EuroVies\SoapEnvelope\Headers\CheckVatInput $header
     * @return self
     */
    public function setHeader(\GoetasWebservices\Client\EuroVies\SoapEnvelope\Headers\CheckVatInput $header)
    {
        $this->header = $header;
        return $this;
    }


}

