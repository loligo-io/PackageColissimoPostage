<?php
/**
 * Composer autoload
 */
require_once __DIR__ . '/../vendor/autoload.php';
/**
 * Used classes
 */
use WsdlToPhp\PackageBase\AbstractSoapClientBase;
use ColissimoPostage\ClassMap;
use ColissimoPostage\ServiceType\Generate;
use ColissimoPostage\StructType\GenerateLabelRequest;
use ColissimoPostage\StructType\OutputFormat;
use ColissimoPostage\StructType\Letter;
use ColissimoPostage\StructType\Fields;
use ColissimoPostage\StructType\GenerateLabel;
use ColissimoPostage\StructType\Service;
use ColissimoPostage\StructType\Parcel;
use ColissimoPostage\StructType\CustomsDeclarations;
use ColissimoPostage\StructType\Contents;
use ColissimoPostage\StructType\Article;
use ColissimoPostage\StructType\Category;
use ColissimoPostage\StructType\Sender;
use ColissimoPostage\StructType\Address;
use ColissimoPostage\StructType\Addressee;
/**
 * Your Colissimo credentials
 */
define('COLISSIMO_WS_CONTRACT_NUMBER', '******');
/**
 * Your Office 365 passowrd
 */
define('COLISSIMO_WS_PASSWORD', '************');
/**
 * Minimal options
 */
$options = array(
    AbstractSoapClientBase::WSDL_URL => 'https://ws.colissimo.fr/sls-ws/SlsServiceWS?wsdl',
    AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get()
);
/**
 * Samples for Generate ServiceType
 */
$generate = new Generate($options);
/**
 * Send the request
 */
$result = $generate->generateLabel(
    new GenerateLabel(
        new GenerateLabelRequest(
            COLISSIMO_WS_CONTRACT_NUMBER,
            COLISSIMO_WS_PASSWORD,
            new OutputFormat(0, 0, 'PDF_A4_300dpi', true, ''),
            new Letter(
                new Service('A2P', date('Y-m-d', strtotime('next monday')), false, null, null, null, null, 1040, 1222, '123465', 'MONSITE.COM', 2),
                new Parcel(null, null, 15000, null, '1', false, null, null, null, 'Remettre au gardien', '005727', null),
                new CustomsDeclarations(
                    1,
                    new Contents(array(
                        new Article('Produit neuf', 1, 1, 1500, '0102', 'FR')
                        ),
                        new Category(2)
                    )
                ),
                new Sender(
                    'refsenderXXX',
                    new Address('sender company', 'Jean', 'Dupont', 'etag 00', 'entrée', 'ligne principale', 'lieu dit', 'FR', 'PARIS', '75001', '0102030405', '0708090102', '0054', '88FF', 'foo@bar.com', 'FFFF', 'FR')
                ),
                new Addressee(
                    '123456',
                    false,
                    'service info',
                    null,
                    new Address('sender company', 'Jean', 'Dupont', 'etag 00', 'entrée', 'ligne principale', 'lieu dit', 'FR', 'PARIS', '75001', '0102030405', '0708090102', '0054', '88FF', 'foo@bar.com', 'FFFF', 'FR')
                )
            )
        )
    )
);
/**
 * Debug informations provided by the utility methods
 */
if (true) {
    echo 'XML Request: ' . $generate->getLastRequest() . "\r\n";
    echo 'Headers Request: ' . $generate->getLastRequestHeaders() . "\r\n";
    echo 'XML Response: ' . $generate->getLastResponse() . "\r\n";
    echo 'Headers Response: ' . $generate->getLastResponseHeaders() . "\r\n";
}
/**
 * Sample call for getProductInter operation/method
 */
if ($generate->getLastResponse(true) instanceof \DOMDocument) {
    echo PHP_EOL . 'PDF url: ' . $generate->getLastResponse(true)
        ->getElementsByTagName('pdfUrl')
        ->item(0)->nodeValue . PHP_EOL;
} else {
    echo PHP_EOL . 'An error occurred: ' . $generate->getLastErrorForMethod('ColissimoPostage\ServiceType\Generate::generateLabel')->getMessage() . PHP_EOL;
}
