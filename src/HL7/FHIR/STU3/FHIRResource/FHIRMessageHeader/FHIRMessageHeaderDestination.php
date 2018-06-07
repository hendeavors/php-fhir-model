<?php namespace HL7\FHIR\STU3\FHIRResource\FHIRMessageHeader;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 7th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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

/**
 * The header for a message exchange that is either requesting or responding to an action.  The reference(s) that are the subject of the action as well as other information related to the action are typically transmitted in a bundle in which the MessageHeader resource instance is the first resource in the bundle.
 */
class FHIRMessageHeaderDestination extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Human-readable name for the target system.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Identifies the target end system in situations where the initial message transmission is to an intermediary system.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $target = null;

    /**
     * Indicates where the message should be routed to.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRUri
     */
    public $endpoint = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'MessageHeader.Destination';

    /**
     * Human-readable name for the target system.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Human-readable name for the target system.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Identifies the target end system in situations where the initial message transmission is to an intermediary system.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getTarget() {
        return $this->target;
    }

    /**
     * Identifies the target end system in situations where the initial message transmission is to an intermediary system.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $target
     * @return $this
     */
    public function setTarget($target) {
        $this->target = $target;
        return $this;
    }

    /**
     * Indicates where the message should be routed to.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRUri
     */
    public function getEndpoint() {
        return $this->endpoint;
    }

    /**
     * Indicates where the message should be routed to.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRUri $endpoint
     * @return $this
     */
    public function setEndpoint($endpoint) {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['target'])) {
                $this->setTarget($data['target']);
            }
            if (isset($data['endpoint'])) {
                $this->setEndpoint($data['endpoint']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        if (isset($this->name)) $json['name'] = $this->name;
        if (isset($this->target)) $json['target'] = $this->target;
        if (isset($this->endpoint)) $json['endpoint'] = $this->endpoint;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MessageHeaderDestination xmlns="http://hl7.org/fhir"></MessageHeaderDestination>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->name)) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (isset($this->target)) $this->target->xmlSerialize(true, $sxe->addChild('target'));
        if (isset($this->endpoint)) $this->endpoint->xmlSerialize(true, $sxe->addChild('endpoint'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}