<?php

namespace HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement;

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
use HL7\FHIR\STU3\FHIRElement\FHIRRestfulCapabilityMode;
use HL7\FHIR\STU3\FHIRElement\FHIRString;
use HL7\FHIR\STU3\FHIRElement\FHIRUri;
use HL7\FHIR\STU3\PHPFHIRConstants;
use HL7\FHIR\STU3\PHPFHIRTypeInterface;

/**
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
 * Server that may be used as a statement of actual server functionality or a
 * statement of required or desired server implementation.
 *
 * Class FHIRCapabilityStatementRest
 * @package \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement
 */
class FHIRCapabilityStatementRest extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_REST;
    const FIELD_COMPARTMENT = 'compartment';
    const FIELD_COMPARTMENT_EXT = '_compartment';
    const FIELD_DOCUMENTATION = 'documentation';
    const FIELD_DOCUMENTATION_EXT = '_documentation';
    const FIELD_INTERACTION = 'interaction';
    const FIELD_MODE = 'mode';
    const FIELD_MODE_EXT = '_mode';
    const FIELD_OPERATION = 'operation';
    const FIELD_RESOURCE = 'resource';
    const FIELD_SEARCH_PARAM = 'searchParam';
    const FIELD_SECURITY = 'security';

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI which is a reference to the definition of a compartment that the
     * system supports. The reference is to a CompartmentDefinition resource by its
     * canonical URL .
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRUri[]
     */
    protected $compartment = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Information about the system's restful capabilities that apply across all
     * applications, such as security.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected $documentation = null;

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * A specification of restful operations supported by the system.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction1[]
     */
    protected $interaction = [];

    /**
     * The mode of a RESTful capability statement.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies whether this portion of the statement is describing the ability to
     * initiate or receive restful operations.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRRestfulCapabilityMode
     */
    protected $mode = null;

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Definition of an operation or a named query together with its parameters and
     * their meaning and type.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementOperation[]
     */
    protected $operation = [];

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * A specification of the restful capabilities of the solution for a specific
     * resource type.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource[]
     */
    protected $resource = [];

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Search parameters that are supported for searching all resources for
     * implementations to support and/or make use of - either references to ones
     * defined in the specification, or additional ones defined for/by the
     * implementation.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam[]
     */
    protected $searchParam = [];

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Information about security implementation from an interface perspective - what a
     * client needs to know.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSecurity
     */
    protected $security = null;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    /**
     * FHIRCapabilityStatementRest Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementRest::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_COMPARTMENT])) {
            $ext = (isset($data[self::FIELD_COMPARTMENT_EXT]) && is_array($data[self::FIELD_COMPARTMENT_EXT]))
                ? $data[self::FIELD_COMPARTMENT_EXT]
                : null;
            if (is_array($data[self::FIELD_COMPARTMENT])) {
                foreach($data[self::FIELD_COMPARTMENT] as $i => $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRUri) {
                        $this->addCompartment($v);
                    } elseif (null !== $ext && isset($ext[$i]) && is_array($ext[$i])) {
                        if (is_scalar($v)) {
                            $this->addCompartment(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $ext[$i]));
                        } elseif (is_array($v)) {
                            $this->addCompartment(new FHIRUri(array_merge($v, $ext[$i])));
                        }
                    } else {
                        $this->addCompartment(new FHIRUri($v));
                    }
                }
            } elseif ($data[self::FIELD_COMPARTMENT] instanceof FHIRUri) {
                $this->addCompartment($data[self::FIELD_COMPARTMENT]);
            } elseif (null !== $ext && is_scalar($data[self::FIELD_COMPARTMENT])) {
                $this->addCompartment(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_COMPARTMENT]] + $ext));
            } else {
                $this->addCompartment(new FHIRUri($data[self::FIELD_COMPARTMENT]));
            }
        }
        if (isset($data[self::FIELD_DOCUMENTATION])) {
            $ext = (isset($data[self::FIELD_DOCUMENTATION_EXT]) && is_array($data[self::FIELD_DOCUMENTATION_EXT]))
                ? $data[self::FIELD_DOCUMENTATION_EXT]
                : null;
            if ($data[self::FIELD_DOCUMENTATION] instanceof FHIRString) {
                $this->setDocumentation($data[self::FIELD_DOCUMENTATION]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DOCUMENTATION])) {
                    $this->setDocumentation(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DOCUMENTATION]] + $ext));
                } else if (is_array($data[self::FIELD_DOCUMENTATION])) {
                    $this->setDocumentation(new FHIRString(array_merge($ext, $data[self::FIELD_DOCUMENTATION])));
                }
            } else {
                $this->setDocumentation(new FHIRString($data[self::FIELD_DOCUMENTATION]));
            }
        }
        if (isset($data[self::FIELD_INTERACTION])) {
            if (is_array($data[self::FIELD_INTERACTION])) {
                foreach($data[self::FIELD_INTERACTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCapabilityStatementInteraction1) {
                        $this->addInteraction($v);
                    } else {
                        $this->addInteraction(new FHIRCapabilityStatementInteraction1($v));
                    }
                }
            } else if ($data[self::FIELD_INTERACTION] instanceof FHIRCapabilityStatementInteraction1) {
                $this->addInteraction($data[self::FIELD_INTERACTION]);
            } else {
                $this->addInteraction(new FHIRCapabilityStatementInteraction1($data[self::FIELD_INTERACTION]));
            }
        }
        if (isset($data[self::FIELD_MODE])) {
            $ext = (isset($data[self::FIELD_MODE_EXT]) && is_array($data[self::FIELD_MODE_EXT]))
                ? $data[self::FIELD_MODE_EXT]
                : null;
            if ($data[self::FIELD_MODE] instanceof FHIRRestfulCapabilityMode) {
                $this->setMode($data[self::FIELD_MODE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_MODE])) {
                    $this->setMode(new FHIRRestfulCapabilityMode([FHIRRestfulCapabilityMode::FIELD_VALUE => $data[self::FIELD_MODE]] + $ext));
                } else if (is_array($data[self::FIELD_MODE])) {
                    $this->setMode(new FHIRRestfulCapabilityMode(array_merge($ext, $data[self::FIELD_MODE])));
                }
            } else {
                $this->setMode(new FHIRRestfulCapabilityMode($data[self::FIELD_MODE]));
            }
        }
        if (isset($data[self::FIELD_OPERATION])) {
            if (is_array($data[self::FIELD_OPERATION])) {
                foreach($data[self::FIELD_OPERATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCapabilityStatementOperation) {
                        $this->addOperation($v);
                    } else {
                        $this->addOperation(new FHIRCapabilityStatementOperation($v));
                    }
                }
            } else if ($data[self::FIELD_OPERATION] instanceof FHIRCapabilityStatementOperation) {
                $this->addOperation($data[self::FIELD_OPERATION]);
            } else {
                $this->addOperation(new FHIRCapabilityStatementOperation($data[self::FIELD_OPERATION]));
            }
        }
        if (isset($data[self::FIELD_RESOURCE])) {
            if (is_array($data[self::FIELD_RESOURCE])) {
                foreach($data[self::FIELD_RESOURCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCapabilityStatementResource) {
                        $this->addResource($v);
                    } else {
                        $this->addResource(new FHIRCapabilityStatementResource($v));
                    }
                }
            } else if ($data[self::FIELD_RESOURCE] instanceof FHIRCapabilityStatementResource) {
                $this->addResource($data[self::FIELD_RESOURCE]);
            } else {
                $this->addResource(new FHIRCapabilityStatementResource($data[self::FIELD_RESOURCE]));
            }
        }
        if (isset($data[self::FIELD_SEARCH_PARAM])) {
            if (is_array($data[self::FIELD_SEARCH_PARAM])) {
                foreach($data[self::FIELD_SEARCH_PARAM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCapabilityStatementSearchParam) {
                        $this->addSearchParam($v);
                    } else {
                        $this->addSearchParam(new FHIRCapabilityStatementSearchParam($v));
                    }
                }
            } else if ($data[self::FIELD_SEARCH_PARAM] instanceof FHIRCapabilityStatementSearchParam) {
                $this->addSearchParam($data[self::FIELD_SEARCH_PARAM]);
            } else {
                $this->addSearchParam(new FHIRCapabilityStatementSearchParam($data[self::FIELD_SEARCH_PARAM]));
            }
        }
        if (isset($data[self::FIELD_SECURITY])) {
            if ($data[self::FIELD_SECURITY] instanceof FHIRCapabilityStatementSecurity) {
                $this->setSecurity($data[self::FIELD_SECURITY]);
            } else {
                $this->setSecurity(new FHIRCapabilityStatementSecurity($data[self::FIELD_SECURITY]));
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
        return "<CapabilityStatementRest{$xmlns}></CapabilityStatementRest>";
    }


    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI which is a reference to the definition of a compartment that the
     * system supports. The reference is to a CompartmentDefinition resource by its
     * canonical URL .
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRUri[]
     */
    public function getCompartment()
    {
        return $this->compartment;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI which is a reference to the definition of a compartment that the
     * system supports. The reference is to a CompartmentDefinition resource by its
     * canonical URL .
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRUri $compartment
     * @return static
     */
    public function addCompartment($compartment = null)
    {
        if (null === $compartment) {
            $this->compartment = [];
            return $this;
        }
        if ($compartment instanceof FHIRUri) {
            $this->compartment[] = $compartment;
            return $this;
        }
        $this->compartment[] = new FHIRUri($compartment);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI which is a reference to the definition of a compartment that the
     * system supports. The reference is to a CompartmentDefinition resource by its
     * canonical URL .
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRUri[] $compartment
     * @return static
     */
    public function setCompartment(array $compartment = [])
    {
        $this->compartment = [];
        if ([] === $compartment) {
            return $this;
        }
        foreach($compartment as $v) {
            if ($v instanceof FHIRUri) {
                $this->addCompartment($v);
            } else {
                $this->addCompartment(new FHIRUri($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Information about the system's restful capabilities that apply across all
     * applications, such as security.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Information about the system's restful capabilities that apply across all
     * applications, such as security.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRString $documentation
     * @return static
     */
    public function setDocumentation($documentation = null)
    {
        if (null === $documentation) {
            $this->documentation = null;
            return $this;
        }
        if ($documentation instanceof FHIRString) {
            $this->documentation = $documentation;
            return $this;
        }
        $this->documentation = new FHIRString($documentation);
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * A specification of restful operations supported by the system.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction1[]
     */
    public function getInteraction()
    {
        return $this->interaction;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * A specification of restful operations supported by the system.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction1 $interaction
     * @return static
     */
    public function addInteraction(FHIRCapabilityStatementInteraction1 $interaction = null)
    {
        $this->interaction[] = $interaction;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * A specification of restful operations supported by the system.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction1[] $interaction
     * @return static
     */
    public function setInteraction(array $interaction = [])
    {
        $this->interaction = [];
        if ([] === $interaction) {
            return $this;
        }
        foreach($interaction as $v) {
            if ($v instanceof FHIRCapabilityStatementInteraction1) {
                $this->addInteraction($v);
            } else {
                $this->addInteraction(new FHIRCapabilityStatementInteraction1($v));
            }
        }
        return $this;
    }

    /**
     * The mode of a RESTful capability statement.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies whether this portion of the statement is describing the ability to
     * initiate or receive restful operations.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRRestfulCapabilityMode
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * The mode of a RESTful capability statement.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies whether this portion of the statement is describing the ability to
     * initiate or receive restful operations.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRRestfulCapabilityMode $mode
     * @return static
     */
    public function setMode(FHIRRestfulCapabilityMode $mode = null)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Definition of an operation or a named query together with its parameters and
     * their meaning and type.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementOperation[]
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Definition of an operation or a named query together with its parameters and
     * their meaning and type.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementOperation $operation
     * @return static
     */
    public function addOperation(FHIRCapabilityStatementOperation $operation = null)
    {
        $this->operation[] = $operation;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Definition of an operation or a named query together with its parameters and
     * their meaning and type.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementOperation[] $operation
     * @return static
     */
    public function setOperation(array $operation = [])
    {
        $this->operation = [];
        if ([] === $operation) {
            return $this;
        }
        foreach($operation as $v) {
            if ($v instanceof FHIRCapabilityStatementOperation) {
                $this->addOperation($v);
            } else {
                $this->addOperation(new FHIRCapabilityStatementOperation($v));
            }
        }
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * A specification of the restful capabilities of the solution for a specific
     * resource type.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource[]
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * A specification of the restful capabilities of the solution for a specific
     * resource type.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource $resource
     * @return static
     */
    public function addResource(FHIRCapabilityStatementResource $resource = null)
    {
        $this->resource[] = $resource;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * A specification of the restful capabilities of the solution for a specific
     * resource type.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource[] $resource
     * @return static
     */
    public function setResource(array $resource = [])
    {
        $this->resource = [];
        if ([] === $resource) {
            return $this;
        }
        foreach($resource as $v) {
            if ($v instanceof FHIRCapabilityStatementResource) {
                $this->addResource($v);
            } else {
                $this->addResource(new FHIRCapabilityStatementResource($v));
            }
        }
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Search parameters that are supported for searching all resources for
     * implementations to support and/or make use of - either references to ones
     * defined in the specification, or additional ones defined for/by the
     * implementation.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam[]
     */
    public function getSearchParam()
    {
        return $this->searchParam;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Search parameters that are supported for searching all resources for
     * implementations to support and/or make use of - either references to ones
     * defined in the specification, or additional ones defined for/by the
     * implementation.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam $searchParam
     * @return static
     */
    public function addSearchParam(FHIRCapabilityStatementSearchParam $searchParam = null)
    {
        $this->searchParam[] = $searchParam;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Search parameters that are supported for searching all resources for
     * implementations to support and/or make use of - either references to ones
     * defined in the specification, or additional ones defined for/by the
     * implementation.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam[] $searchParam
     * @return static
     */
    public function setSearchParam(array $searchParam = [])
    {
        $this->searchParam = [];
        if ([] === $searchParam) {
            return $this;
        }
        foreach($searchParam as $v) {
            if ($v instanceof FHIRCapabilityStatementSearchParam) {
                $this->addSearchParam($v);
            } else {
                $this->addSearchParam(new FHIRCapabilityStatementSearchParam($v));
            }
        }
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Information about security implementation from an interface perspective - what a
     * client needs to know.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSecurity
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Information about security implementation from an interface perspective - what a
     * client needs to know.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSecurity $security
     * @return static
     */
    public function setSecurity(FHIRCapabilityStatementSecurity $security = null)
    {
        $this->security = $security;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementRest $type
     * @param null|int $libxmlOpts
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementRest
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
                throw new \DomainException(sprintf('FHIRCapabilityStatementRest::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCapabilityStatementRest::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRCapabilityStatementRest;
        } elseif (!is_object($type) || !($type instanceof FHIRCapabilityStatementRest)) {
            throw new \RuntimeException(sprintf(
                'FHIRCapabilityStatementRest::xmlUnserialize - $type must be instance of \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementRest or null, %s seen.',
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
        if (isset($attributes->compartment)) {
            $type->addCompartment((string)$attributes->compartment);
        }
        if (isset($children->compartment)) {
            foreach($children->compartment as $child) {
                $type->addCompartment(FHIRUri::xmlUnserialize($child));
            }
        }
        if (isset($attributes->documentation)) {
            $type->setDocumentation((string)$attributes->documentation);
        }
        if (isset($children->documentation)) {
            $type->setDocumentation(FHIRString::xmlUnserialize($children->documentation));
        }
        if (isset($children->interaction)) {
            foreach($children->interaction as $child) {
                $type->addInteraction(FHIRCapabilityStatementInteraction1::xmlUnserialize($child));
            }
        }
        if (isset($children->mode)) {
            $type->setMode(FHIRRestfulCapabilityMode::xmlUnserialize($children->mode));
        }
        if (isset($children->operation)) {
            foreach($children->operation as $child) {
                $type->addOperation(FHIRCapabilityStatementOperation::xmlUnserialize($child));
            }
        }
        if (isset($children->resource)) {
            foreach($children->resource as $child) {
                $type->addResource(FHIRCapabilityStatementResource::xmlUnserialize($child));
            }
        }
        if (isset($children->searchParam)) {
            foreach($children->searchParam as $child) {
                $type->addSearchParam(FHIRCapabilityStatementSearchParam::xmlUnserialize($child));
            }
        }
        if (isset($children->security)) {
            $type->setSecurity(FHIRCapabilityStatementSecurity::xmlUnserialize($children->security));
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

        if ([] !== ($vs = $this->getCompartment())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COMPARTMENT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDocumentation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOCUMENTATION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getInteraction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INTERACTION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getMode())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MODE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getOperation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_OPERATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getResource())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RESOURCE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getSearchParam())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SEARCH_PARAM, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSecurity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SECURITY, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getCompartment())) {
            $a[self::FIELD_COMPARTMENT] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if (null !== ($val = $v->getValue())) {
                    $a[self::FIELD_COMPARTMENT][] = $val;
                    if (1 < count($enc = $v->jsonSerialize())) {
                        unset($enc[$v::FIELD_VALUE]);
                        $a[self::FIELD_COMPARTMENT_EXT][] = $enc;
                    } else {
                        $a[self::FIELD_COMPARTMENT_EXT][] = null;
                    }
                } else {
                    $a[self::FIELD_COMPARTMENT][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getDocumentation())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DOCUMENTATION] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_DOCUMENTATION_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_DOCUMENTATION] = $v;
            }
        }
        if ([] !== ($vs = $this->getInteraction())) {
            $a[self::FIELD_INTERACTION] = $vs;
        }
        if (null !== ($v = $this->getMode())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_MODE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_MODE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_MODE] = $v;
            }
        }
        if ([] !== ($vs = $this->getOperation())) {
            $a[self::FIELD_OPERATION] = $vs;
        }
        if ([] !== ($vs = $this->getResource())) {
            $a[self::FIELD_RESOURCE] = $vs;
        }
        if ([] !== ($vs = $this->getSearchParam())) {
            $a[self::FIELD_SEARCH_PARAM] = $vs;
        }
        if (null !== ($v = $this->getSecurity())) {
            $a[self::FIELD_SECURITY] = $v;
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