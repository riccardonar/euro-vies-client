<?php

namespace GoetasWebservices\Client\EuroVies\SoapEnvelope\Messages;

/**
 * Class representing CheckVatApproxOutput
 */
class CheckVatApproxOutput implements \GoetasWebservices\SoapServices\Metadata\Envelope\Envelope
{

    /**
     * @var \GoetasWebservices\Client\EuroVies\SoapParts\CheckVatApproxOutput $body
     */
    private $body = null;

    /**
     * @var \GoetasWebservices\Client\EuroVies\SoapEnvelope\Headers\CheckVatApproxOutput $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \GoetasWebservices\Client\EuroVies\SoapParts\CheckVatApproxOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \GoetasWebservices\Client\EuroVies\SoapParts\CheckVatApproxOutput $body
     * @return self
     */
    public function setBody(\GoetasWebservices\Client\EuroVies\SoapParts\CheckVatApproxOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \GoetasWebservices\Client\EuroVies\SoapEnvelope\Headers\CheckVatApproxOutput
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \GoetasWebservices\Client\EuroVies\SoapEnvelope\Headers\CheckVatApproxOutput $header
     * @return self
     */
    public function setHeader(\GoetasWebservices\Client\EuroVies\SoapEnvelope\Headers\CheckVatApproxOutput $header)
    {
        $this->header = $header;
        return $this;
    }


}

