<?php

namespace Webmasterskaya\Soap\CCCB;

use Soap\Engine\Transport;
use Soap\ExtSoapEngine\Configuration\TypeConverter\TypeConverterCollection;
use Webmasterskaya\Soap\Base\ClientFactoryAbstract;
use Webmasterskaya\Soap\Base\ClientInterface;
use Webmasterskaya\Soap\Base\Exception\InvalidArgumentException;
use Webmasterskaya\Soap\Base\Helper\ClassHelper;
use Webmasterskaya\Soap\Base\Soap\ExtSoap\Configuration\ClientClassMapCollectionInterface;
use Webmasterskaya\Soap\Base\Soap\ExtSoap\Configuration\ClientTypeConverterCollectionInterface;
use Webmasterskaya\Soap\Base\Soap\Metadata\MetadataOptions;
use Webmasterskaya\Soap\CCCB\Soap\Wsdl\CccbMainWsdlProvider;
use Webmasterskaya\Soap\CCCB\Soap\Wsdl\CccbWsdlProviderInterface;

class CccbClientFactory extends ClientFactoryAbstract
{
    protected static $clientClass = CccbClient::class;

    /**
     * @return CccbClient
     */
    public static function create(
        array $options,
        string $wsdlProviderClass = CccbMainWsdlProvider::class,
        ?ClientClassMapCollectionInterface $classMap = null,
        ?ClientTypeConverterCollectionInterface $typeMap = null,
        ?Transport $transport = null,
        ?MetadataOptions $metadataOptions = null
    ): ClientInterface {
        if (!ClassHelper::shouldImplement($wsdlProviderClass, CccbWsdlProviderInterface::class)) {
            throw new InvalidArgumentException(
                sprintf('Wsdl provider class must be implement of "%s" got "%s"',
                    CccbWsdlProviderInterface::class,
                    implode('", "', class_implements($wsdlProviderClass))));
        }

        return parent::create($options, $wsdlProviderClass, $classMap, $typeMap, $transport, $metadataOptions);
    }

    public static function getDefaultClientClassMap(): ClientClassMapCollectionInterface
    {
        return new CccbClassMapCollection;
    }

    public static function getDefaultClientTypeMap(): ClientTypeConverterCollectionInterface
    {
        return new class implements ClientTypeConverterCollectionInterface {
            public function __invoke(): TypeConverterCollection
            {
                return new TypeConverterCollection();
            }
        };
    }
}