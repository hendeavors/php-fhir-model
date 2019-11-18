<?php

namespace FHIR\Tests\Integration;

use HL7\FHIR\STU3\FHIRResource\FHIRDomainResource\FHIRPatient;
use HL7\FHIR\STU3\PHPFHIRResponseParser;
use PHPUnit\Framework\TestCase;

class ScalarJsonExtensionsTest extends TestCase
{
    /**
     * @var PHPFHIRResponseParser
     */
    private $parser;

    protected function setUp()
    {
        parent::setUp();
        $this->parser = new PHPFHIRResponseParser();
    }

    public function testThatItParsesAnExtensionOnAScalarJsonValue()
    {
        // Assert fix for https://github.com/dcarbone/php-fhir/issues/38

        $json = '{"resourceType":"Patient","name":[{"family":"Jansen","_family":{"extension":[{"url":"http://hl7.org/fhir/StructureDefinition/humanname-own-prefix","valueString":"van"}]},"given":["Jan"]}]}';
        /** @var FHIRPatient $patientResource */
        $patientResource = $this->parser->parse($json);

        $name = $patientResource->getName()[0];
        $givenName = $name->getGiven()[0];
        $familyName = $name->getFamily();
        $familyExtension = $familyName->getExtension()[0];

        $this->assertEquals('Jan', $givenName->getValue());
        $this->assertEquals('http://hl7.org/fhir/StructureDefinition/humanname-own-prefix', $familyExtension->getUrl()->getValue());
        $this->assertEquals('van', $familyExtension->getValueString()->getValue());
        $this->assertEquals('Jansen', $familyName->getValue());
    }
}
