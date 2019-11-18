<?php

namespace HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 18th, 2019 08:27+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\STU3\FHIRElement\FHIRPositiveInt;
use HL7\FHIR\STU3\FHIRElement\FHIRReference;
use HL7\FHIR\STU3\FHIRElement\FHIRString;
use HL7\FHIR\STU3\PHPFHIRConstants;
use HL7\FHIR\STU3\PHPFHIRTypeInterface;

/**
 * A patient's point-in-time immunization and recommendation (i.e. forecasting a
 * patient's immunization eligibility according to a published schedule) with
 * optional supporting justification.
 *
 * Class FHIRImmunizationRecommendationProtocol
 * @package \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation
 */
class FHIRImmunizationRecommendationProtocol extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_PROTOCOL;
    const FIELD_AUTHORITY = 'authority';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_DOSE_SEQUENCE = 'doseSequence';
    const FIELD_DOSE_SEQUENCE_EXT = '_doseSequence';
    const FIELD_SERIES = 'series';
    const FIELD_SERIES_EXT = '_series';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the authority who published the protocol. For example, ACIP.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected $authority = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates the nominal position in a series of the next dose. This is the
     * recommended dose number as per a specified protocol.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRPositiveInt
     */
    protected $doseSequence = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected $series = null;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    /**
     * FHIRImmunizationRecommendationProtocol Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunizationRecommendationProtocol::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AUTHORITY])) {
            if ($data[self::FIELD_AUTHORITY] instanceof FHIRReference) {
                $this->setAuthority($data[self::FIELD_AUTHORITY]);
            } else {
                $this->setAuthority(new FHIRReference($data[self::FIELD_AUTHORITY]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRString) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DESCRIPTION])) {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
                } else if (is_array($data[self::FIELD_DESCRIPTION])) {
                    $this->setDescription(new FHIRString(array_merge($ext, $data[self::FIELD_DESCRIPTION])));
                }
            } else {
                $this->setDescription(new FHIRString($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_DOSE_SEQUENCE])) {
            $ext = (isset($data[self::FIELD_DOSE_SEQUENCE_EXT]) && is_array($data[self::FIELD_DOSE_SEQUENCE_EXT]))
                ? $data[self::FIELD_DOSE_SEQUENCE_EXT]
                : null;
            if ($data[self::FIELD_DOSE_SEQUENCE] instanceof FHIRPositiveInt) {
                $this->setDoseSequence($data[self::FIELD_DOSE_SEQUENCE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DOSE_SEQUENCE])) {
                    $this->setDoseSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_DOSE_SEQUENCE]] + $ext));
                } else if (is_array($data[self::FIELD_DOSE_SEQUENCE])) {
                    $this->setDoseSequence(new FHIRPositiveInt(array_merge($ext, $data[self::FIELD_DOSE_SEQUENCE])));
                }
            } else {
                $this->setDoseSequence(new FHIRPositiveInt($data[self::FIELD_DOSE_SEQUENCE]));
            }
        }
        if (isset($data[self::FIELD_SERIES])) {
            $ext = (isset($data[self::FIELD_SERIES_EXT]) && is_array($data[self::FIELD_SERIES_EXT]))
                ? $data[self::FIELD_SERIES_EXT]
                : null;
            if ($data[self::FIELD_SERIES] instanceof FHIRString) {
                $this->setSeries($data[self::FIELD_SERIES]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_SERIES])) {
                    $this->setSeries(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SERIES]] + $ext));
                } else if (is_array($data[self::FIELD_SERIES])) {
                    $this->setSeries(new FHIRString(array_merge($ext, $data[self::FIELD_SERIES])));
                }
            } else {
                $this->setSeries(new FHIRString($data[self::FIELD_SERIES]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return static
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<ImmunizationRecommendationProtocol{$xmlns}></ImmunizationRecommendationProtocol>";
    }


    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the authority who published the protocol. For example, ACIP.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the authority who published the protocol. For example, ACIP.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $authority
     * @return static
     */
    public function setAuthority(FHIRReference $authority = null)
    {
        $this->authority = $authority;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates the nominal position in a series of the next dose. This is the
     * recommended dose number as per a specified protocol.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRPositiveInt
     */
    public function getDoseSequence()
    {
        return $this->doseSequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Indicates the nominal position in a series of the next dose. This is the
     * recommended dose number as per a specified protocol.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRPositiveInt $doseSequence
     * @return static
     */
    public function setDoseSequence($doseSequence = null)
    {
        if (null === $doseSequence) {
            $this->doseSequence = null;
            return $this;
        }
        if ($doseSequence instanceof FHIRPositiveInt) {
            $this->doseSequence = $doseSequence;
            return $this;
        }
        $this->doseSequence = new FHIRPositiveInt($doseSequence);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRString $series
     * @return static
     */
    public function setSeries($series = null)
    {
        if (null === $series) {
            $this->series = null;
            return $this;
        }
        if ($series instanceof FHIRString) {
            $this->series = $series;
            return $this;
        }
        $this->series = new FHIRString($series);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol $type
     * @param null|int $libxmlOpts
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRImmunizationRecommendationProtocol::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImmunizationRecommendationProtocol::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRImmunizationRecommendationProtocol;
        } elseif (!is_object($type) || !($type instanceof FHIRImmunizationRecommendationProtocol)) {
            throw new \RuntimeException(sprintf(
                'FHIRImmunizationRecommendationProtocol::xmlUnserialize - $type must be instance of \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->authority)) {
            $type->setAuthority(FHIRReference::xmlUnserialize($children->authority));
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->doseSequence)) {
            $type->setDoseSequence((string)$attributes->doseSequence);
        }
        if (isset($children->doseSequence)) {
            $type->setDoseSequence(FHIRPositiveInt::xmlUnserialize($children->doseSequence));
        }
        if (isset($attributes->series)) {
            $type->setSeries((string)$attributes->series);
        }
        if (isset($children->series)) {
            $type->setSeries(FHIRString::xmlUnserialize($children->series));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getAuthority())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHORITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDoseSequence())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOSE_SEQUENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSeries())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SERIES, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAuthority())) {
            $a[self::FIELD_AUTHORITY] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DESCRIPTION] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DESCRIPTION_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DESCRIPTION] = $v;
            }
        }
        if (null !== ($v = $this->getDoseSequence())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DOSE_SEQUENCE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DOSE_SEQUENCE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DOSE_SEQUENCE] = $v;
            }
        }
        if (null !== ($v = $this->getSeries())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_SERIES] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_SERIES_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_SERIES] = $v;
            }
        }
        return $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}