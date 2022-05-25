<?php

namespace GoetasWebservices\Client\EuroVies;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class SoapContainer extends Container
{
    private $parameters = [];
    private $targetDirs = [];

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = [];
        $this->methodMap = [
            'goetas_webservices.soap.metadata_loader.array' => 'getGoetasWebservices_Soap_MetadataLoader_ArrayService',
        ];
        $this->aliases = [
            'goetas_webservices.soap.metadata_reader' => 'goetas_webservices.soap.metadata_loader.array',
        ];
    }

    public function getRemovedIds()
    {
        return [
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'goetas_webservices.soap.metadata.generator' => true,
            'goetas_webservices.soap.metadata_loader.dev' => true,
            'goetas_webservices.soap.stub.class_writer' => true,
            'goetas_webservices.soap.stub.client_generator' => true,
            'goetas_webservices.wsdl2php.converter.jms' => true,
            'goetas_webservices.wsdl2php.converter.php' => true,
            'goetas_webservices.wsdl2php.event_dispatcher' => true,
            'goetas_webservices.wsdl2php.soap_reader' => true,
            'goetas_webservices.wsdl2php.wsdl_reader' => true,
            'goetas_webservices.xsd2php.class_writer.php' => true,
            'goetas_webservices.xsd2php.converter.jms' => true,
            'goetas_webservices.xsd2php.converter.php' => true,
            'goetas_webservices.xsd2php.naming_convention' => true,
            'goetas_webservices.xsd2php.naming_convention.long' => true,
            'goetas_webservices.xsd2php.naming_convention.short' => true,
            'goetas_webservices.xsd2php.path_generator.jms' => true,
            'goetas_webservices.xsd2php.path_generator.jms.psr4' => true,
            'goetas_webservices.xsd2php.path_generator.php' => true,
            'goetas_webservices.xsd2php.path_generator.php.psr4' => true,
            'goetas_webservices.xsd2php.php.class_generator' => true,
            'goetas_webservices.xsd2php.schema_reader' => true,
            'goetas_webservices.xsd2php.writer.jms' => true,
            'goetas_webservices.xsd2php.writer.php' => true,
            'logger' => true,
        ];
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /*
     * Gets the public 'goetas_webservices.soap.metadata_loader.array' shared service.
     *
     * @return \GoetasWebservices\SoapServices\Metadata\Loader\ArrayMetadataLoader
     */
    protected function getGoetasWebservices_Soap_MetadataLoader_ArrayService()
    {
        return $this->services['goetas_webservices.soap.metadata_loader.array'] = new \GoetasWebservices\SoapServices\Metadata\Loader\ArrayMetadataLoader($this->parameters['goetas_webservices.soap.metadata']);
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [];
    private $dynamicParameters = [];

    /*
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    private $normalizedParameterNames = [];

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'goetas_webservices.soap.metadata' => [
                'http://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl' => [
                    'checkVatService' => [
                        'checkVatPort' => [
                            'operations' => [
                                'checkVat' => [
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'checkVat',
                                    'method' => 'checkVat',
                                    'input' => [
                                        'message_fqcn' => 'GoetasWebservices\\Client\\EuroVies\\SoapEnvelope\\Messages\\CheckVatInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\EuroVies\\SoapEnvelope\\Headers\\CheckVatInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\EuroVies\\SoapParts\\CheckVatInput',
                                        'parts' => [
                                            'checkVat' => 'CheckVat',
                                        ],
                                    ],
                                    'output' => [
                                        'message_fqcn' => 'GoetasWebservices\\Client\\EuroVies\\SoapEnvelope\\Messages\\CheckVatOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\EuroVies\\SoapEnvelope\\Headers\\CheckVatOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\EuroVies\\SoapParts\\CheckVatOutput',
                                        'parts' => [
                                            'checkVatResponse' => 'CheckVatResponse',
                                        ],
                                    ],
                                    'fault' => [

                                    ],
                                ],
                                'checkVatApprox' => [
                                    'action' => NULL,
                                    'style' => 'rpc',
                                    'version' => '1.1',
                                    'name' => 'checkVatApprox',
                                    'method' => 'checkVatApprox',
                                    'input' => [
                                        'message_fqcn' => 'GoetasWebservices\\Client\\EuroVies\\SoapEnvelope\\Messages\\CheckVatApproxInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\EuroVies\\SoapEnvelope\\Headers\\CheckVatApproxInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\EuroVies\\SoapParts\\CheckVatApproxInput',
                                        'parts' => [
                                            'checkVatApprox' => 'CheckVatApprox',
                                        ],
                                    ],
                                    'output' => [
                                        'message_fqcn' => 'GoetasWebservices\\Client\\EuroVies\\SoapEnvelope\\Messages\\CheckVatApproxOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\EuroVies\\SoapEnvelope\\Headers\\CheckVatApproxOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\EuroVies\\SoapParts\\CheckVatApproxOutput',
                                        'parts' => [
                                            'checkVatApproxResponse' => 'CheckVatApproxResponse',
                                        ],
                                    ],
                                    'fault' => [

                                    ],
                                ],
                            ],
                            'unwrap' => false,
                            'endpoint' => 'http://ec.europa.eu/taxation_customs/vies/services/checkVatService',
                            'version' => '1.1',
                        ],
                    ],
                ],
            ],
            'goetas_webservices.soap.config' => [
                'namespaces' => [
                    'urn:ec.europa.eu:taxud:vies:services:checkVat' => 'GoetasWebservices\\Client\\EuroVies',
                    'urn:ec.europa.eu:taxud:vies:services:checkVat:types' => 'GoetasWebservices\\Client\\EuroVies\\Types',
                ],
                'destinations_php' => [
                    'GoetasWebservices\\Client\\EuroVies' => 'src',
                ],
                'destinations_jms' => [
                    'GoetasWebservices\\Client\\EuroVies' => 'metadata',
                ],
                'metadata' => [
                    'http://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl' => NULL,
                ],
                'alternative_endpoints' => [

                ],
                'unwrap_returns' => false,
                'naming_strategy' => 'short',
                'path_generator' => 'psr4',
                'known_locations' => [

                ],
                'aliases' => [

                ],
            ],
            'goetas_webservices.soap.unwrap_returns' => false,
        ];
    }
}
