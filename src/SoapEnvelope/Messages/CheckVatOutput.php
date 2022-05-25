<?php

namespace GoetasWebservices\Client\EuroVies\SoapEnvelope\Messages;

/**
 * Class representing CheckVatOutput
 */
class CheckVatOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \GoetasWebservices\Client\EuroVies\SoapParts\CheckVatOutput $body
     */
    private $body = null;

    /**
     * @var \GoetasWebservices\Client\EuroVies\SoapEnvelope\Headers\CheckVatOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \GoetasWebservices\Client\EuroVies\SoapParts\CheckVatOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \GoetasWebservices\Client\EuroVies\SoapParts\CheckVatOutput $body
     * @return self
     */
    public function setBody(\GoetasWebservices\Client\EuroVies\SoapParts\CheckVatOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \GoetasWebservices\Client\EuroVies\SoapEnvelope\Headers\CheckVatOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \GoetasWebservices\Client\EuroVies\SoapEnvelope\Headers\CheckVatOutput $header
     * @return self
     */
    public function setHeader(\GoetasWebservices\Client\EuroVies\SoapEnvelope\Headers\CheckVatOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

