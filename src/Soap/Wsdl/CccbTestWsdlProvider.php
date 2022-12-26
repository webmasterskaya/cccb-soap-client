<?php

namespace Webmasterskaya\Soap\CCCB\Soap\Wsdl;

use Soap\ExtSoapEngine\Wsdl\WsdlProvider;

class CccbTestWsdlProvider implements WsdlProvider, CccbWsdlProviderInterface
{

    public function __invoke(string $location): string
    {
        return 'http://eis-test.cccb.ru/eis-test/ws/ExchangePC.1cws?wsdl';
    }
}