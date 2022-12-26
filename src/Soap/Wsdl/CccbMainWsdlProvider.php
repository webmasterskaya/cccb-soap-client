<?php

namespace Webmasterskaya\Soap\CCCB\Soap\Wsdl;

use Soap\ExtSoapEngine\Wsdl\WsdlProvider;

class CccbMainWsdlProvider implements WsdlProvider, CccbWsdlProviderInterface
{

    public function __invoke(string $location): string
    {
        return 'http://eis-web.cccb.ru/eis-web/ws/ExchangePC.1cws?wsdl';
    }
}