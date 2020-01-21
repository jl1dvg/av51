<?php namespace HL7\FHIR\STU3\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
 */

use HL7\FHIR\STU3\FHIRResource\FHIRDomainResource;

/**
 * A definition of a FHIR structure. This resource is used to describe the underlying resources, data types defined in FHIR, and also for describing extensions and constraints on resources and data types.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRStructureDefinition extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * An absolute URI that is used to identify this structure definition when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this structure definition is (or will be) published. The URL SHOULD include the major version of the structure definition. For more information see [Technical and Business Versions](resource.html#versions).
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * A formal identifier that is used to identify this structure definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * The identifier that is used to identify this version of the structure definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the structure definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * A natural language name identifying the structure definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * A short, descriptive, user-friendly title for the structure definition.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * The status of this structure definition. Enables tracking the life-cycle of the content.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRPublicationStatus
     */
    public $status = null;

    /**
     * A boolean value to indicate that this structure definition is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * The date  (and optionally time) when the structure definition was published. The date must change if and when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the structure definition changes.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * The name of the individual or organization that published the structure definition.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRContactDetail[]
     */
    public $contact = [];

    /**
     * A free text natural language description of the structure definition from a consumer's perspective.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate structure definition instances.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRUsageContext[]
     */
    public $useContext = [];

    /**
     * A legal or geographic region in which the structure definition is intended to be used.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public $jurisdiction = [];

    /**
     * Explaination of why this structure definition is needed and why it has been designed as it has.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRMarkdown
     */
    public $purpose = null;

    /**
     * A copyright statement relating to the structure definition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the structure definition.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRMarkdown
     */
    public $copyright = null;

    /**
     * A set of key words or terms from external terminologies that may be used to assist with indexing and searching of templates.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCoding[]
     */
    public $keyword = [];

    /**
     * The version of the FHIR specification on which this StructureDefinition is based - this is the formal version of the specification, without the revision number, e.g. [publication].[major].[minor], which is 3.0.1 for this version.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRId
     */
    public $fhirVersion = null;

    /**
     * An external specification that the content is mapped to.
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRStructureDefinition\FHIRStructureDefinitionMapping[]
     */
    public $mapping = [];

    /**
     * Defines the kind of structure that this definition is describing.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRStructureDefinitionKind
     */
    public $kind = null;

    /**
     * Whether structure this definition describes is abstract or not  - that is, whether the structure is not intended to be instantiated. For Resources and Data types, abstract types will never be exchanged  between systems.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public $abstract = null;

    /**
     * If this is an extension, Identifies the context within FHIR resources where the extension can be used.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRExtensionContext
     */
    public $contextType = null;

    /**
     * Identifies the types of resource or data type elements to which the extension can be applied.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString[]
     */
    public $context = [];

    /**
     * A set of rules as Fluent Invariants about when the extension can be used (e.g. co-occurrence variants for the extension).
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString[]
     */
    public $contextInvariant = [];

    /**
     * The type this structure describes. If the derivation kind is 'specialization' then this is the master definition for a type, and there is always one of these (a data type, an extension, a resource, including abstract ones). Otherwise the structure definition is a constraint on the stated type (and in this case, the type cannot be an abstract type).
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCode
     */
    public $type = null;

    /**
     * An absolute URI that is the base structure from which this type is derived, either by specialization or constraint.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRUri
     */
    public $baseDefinition = null;

    /**
     * How the type relates to the baseDefinition.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRTypeDerivationRule
     */
    public $derivation = null;

    /**
     * A snapshot view is expressed in a stand alone form that can be used and interpreted without considering the base StructureDefinition.
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot
     */
    public $snapshot = null;

    /**
     * A differential view is expressed relative to the base StructureDefinition - a statement of differences that it applies.
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRStructureDefinition\FHIRStructureDefinitionDifferential
     */
    public $differential = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'StructureDefinition';

    /**
     * An absolute URI that is used to identify this structure definition when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this structure definition is (or will be) published. The URL SHOULD include the major version of the structure definition. For more information see [Technical and Business Versions](resource.html#versions).
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * An absolute URI that is used to identify this structure definition when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this structure definition is (or will be) published. The URL SHOULD include the major version of the structure definition. For more information see [Technical and Business Versions](resource.html#versions).
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * A formal identifier that is used to identify this structure definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A formal identifier that is used to identify this structure definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the structure definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the structure definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The identifier that is used to identify this version of the structure definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the structure definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * A natural language name identifying the structure definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A natural language name identifying the structure definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * A short, descriptive, user-friendly title for the structure definition.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A short, descriptive, user-friendly title for the structure definition.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * The status of this structure definition. Enables tracking the life-cycle of the content.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of this structure definition. Enables tracking the life-cycle of the content.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRPublicationStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A boolean value to indicate that this structure definition is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * A boolean value to indicate that this structure definition is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBoolean $experimental
     * @return $this
     */
    public function setExperimental($experimental)
    {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * The date  (and optionally time) when the structure definition was published. The date must change if and when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the structure definition changes.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date  (and optionally time) when the structure definition was published. The date must change if and when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the structure definition changes.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * The name of the individual or organization that published the structure definition.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * The name of the individual or organization that published the structure definition.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $publisher
     * @return $this
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRContactDetail[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRContactDetail $contact
     * @return $this
     */
    public function addContact($contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * A free text natural language description of the structure definition from a consumer's perspective.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A free text natural language description of the structure definition from a consumer's perspective.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRMarkdown $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate structure definition instances.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRUsageContext[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate structure definition instances.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRUsageContext $useContext
     * @return $this
     */
    public function addUseContext($useContext)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * A legal or geographic region in which the structure definition is intended to be used.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * A legal or geographic region in which the structure definition is intended to be used.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return $this
     */
    public function addJurisdiction($jurisdiction)
    {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * Explaination of why this structure definition is needed and why it has been designed as it has.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRMarkdown
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Explaination of why this structure definition is needed and why it has been designed as it has.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRMarkdown $purpose
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * A copyright statement relating to the structure definition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the structure definition.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRMarkdown
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * A copyright statement relating to the structure definition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the structure definition.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRMarkdown $copyright
     * @return $this
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * A set of key words or terms from external terminologies that may be used to assist with indexing and searching of templates.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCoding[]
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * A set of key words or terms from external terminologies that may be used to assist with indexing and searching of templates.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCoding $keyword
     * @return $this
     */
    public function addKeyword($keyword)
    {
        $this->keyword[] = $keyword;
        return $this;
    }

    /**
     * The version of the FHIR specification on which this StructureDefinition is based - this is the formal version of the specification, without the revision number, e.g. [publication].[major].[minor], which is 3.0.1 for this version.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRId
     */
    public function getFhirVersion()
    {
        return $this->fhirVersion;
    }

    /**
     * The version of the FHIR specification on which this StructureDefinition is based - this is the formal version of the specification, without the revision number, e.g. [publication].[major].[minor], which is 3.0.1 for this version.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRId $fhirVersion
     * @return $this
     */
    public function setFhirVersion($fhirVersion)
    {
        $this->fhirVersion = $fhirVersion;
        return $this;
    }

    /**
     * An external specification that the content is mapped to.
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRStructureDefinition\FHIRStructureDefinitionMapping[]
     */
    public function getMapping()
    {
        return $this->mapping;
    }

    /**
     * An external specification that the content is mapped to.
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRStructureDefinition\FHIRStructureDefinitionMapping $mapping
     * @return $this
     */
    public function addMapping($mapping)
    {
        $this->mapping[] = $mapping;
        return $this;
    }

    /**
     * Defines the kind of structure that this definition is describing.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRStructureDefinitionKind
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Defines the kind of structure that this definition is describing.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRStructureDefinitionKind $kind
     * @return $this
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * Whether structure this definition describes is abstract or not  - that is, whether the structure is not intended to be instantiated. For Resources and Data types, abstract types will never be exchanged  between systems.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * Whether structure this definition describes is abstract or not  - that is, whether the structure is not intended to be instantiated. For Resources and Data types, abstract types will never be exchanged  between systems.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBoolean $abstract
     * @return $this
     */
    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;
        return $this;
    }

    /**
     * If this is an extension, Identifies the context within FHIR resources where the extension can be used.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRExtensionContext
     */
    public function getContextType()
    {
        return $this->contextType;
    }

    /**
     * If this is an extension, Identifies the context within FHIR resources where the extension can be used.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRExtensionContext $contextType
     * @return $this
     */
    public function setContextType($contextType)
    {
        $this->contextType = $contextType;
        return $this;
    }

    /**
     * Identifies the types of resource or data type elements to which the extension can be applied.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString[]
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Identifies the types of resource or data type elements to which the extension can be applied.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $context
     * @return $this
     */
    public function addContext($context)
    {
        $this->context[] = $context;
        return $this;
    }

    /**
     * A set of rules as Fluent Invariants about when the extension can be used (e.g. co-occurrence variants for the extension).
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString[]
     */
    public function getContextInvariant()
    {
        return $this->contextInvariant;
    }

    /**
     * A set of rules as Fluent Invariants about when the extension can be used (e.g. co-occurrence variants for the extension).
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $contextInvariant
     * @return $this
     */
    public function addContextInvariant($contextInvariant)
    {
        $this->contextInvariant[] = $contextInvariant;
        return $this;
    }

    /**
     * The type this structure describes. If the derivation kind is 'specialization' then this is the master definition for a type, and there is always one of these (a data type, an extension, a resource, including abstract ones). Otherwise the structure definition is a constraint on the stated type (and in this case, the type cannot be an abstract type).
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCode
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type this structure describes. If the derivation kind is 'specialization' then this is the master definition for a type, and there is always one of these (a data type, an extension, a resource, including abstract ones). Otherwise the structure definition is a constraint on the stated type (and in this case, the type cannot be an abstract type).
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCode $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * An absolute URI that is the base structure from which this type is derived, either by specialization or constraint.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRUri
     */
    public function getBaseDefinition()
    {
        return $this->baseDefinition;
    }

    /**
     * An absolute URI that is the base structure from which this type is derived, either by specialization or constraint.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRUri $baseDefinition
     * @return $this
     */
    public function setBaseDefinition($baseDefinition)
    {
        $this->baseDefinition = $baseDefinition;
        return $this;
    }

    /**
     * How the type relates to the baseDefinition.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRTypeDerivationRule
     */
    public function getDerivation()
    {
        return $this->derivation;
    }

    /**
     * How the type relates to the baseDefinition.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRTypeDerivationRule $derivation
     * @return $this
     */
    public function setDerivation($derivation)
    {
        $this->derivation = $derivation;
        return $this;
    }

    /**
     * A snapshot view is expressed in a stand alone form that can be used and interpreted without considering the base StructureDefinition.
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot
     */
    public function getSnapshot()
    {
        return $this->snapshot;
    }

    /**
     * A snapshot view is expressed in a stand alone form that can be used and interpreted without considering the base StructureDefinition.
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot $snapshot
     * @return $this
     */
    public function setSnapshot($snapshot)
    {
        $this->snapshot = $snapshot;
        return $this;
    }

    /**
     * A differential view is expressed relative to the base StructureDefinition - a statement of differences that it applies.
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRStructureDefinition\FHIRStructureDefinitionDifferential
     */
    public function getDifferential()
    {
        return $this->differential;
    }

    /**
     * A differential view is expressed relative to the base StructureDefinition - a statement of differences that it applies.
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRStructureDefinition\FHIRStructureDefinitionDifferential $differential
     * @return $this
     */
    public function setDifferential($differential)
    {
        $this->differential = $differential;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = [])
    {
        if (is_array($data)) {
            if (isset($data['url'])) {
                $this->setUrl($data['url']);
            }
            if (isset($data['identifier'])) {
                if (is_array($data['identifier'])) {
                    foreach ($data['identifier'] as $d) {
                        $this->addIdentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.');
                }
            }
            if (isset($data['version'])) {
                $this->setVersion($data['version']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['title'])) {
                $this->setTitle($data['title']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['experimental'])) {
                $this->setExperimental($data['experimental']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['publisher'])) {
                $this->setPublisher($data['publisher']);
            }
            if (isset($data['contact'])) {
                if (is_array($data['contact'])) {
                    foreach ($data['contact'] as $d) {
                        $this->addContact($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"contact" must be array of objects or null, '.gettype($data['contact']).' seen.');
                }
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['useContext'])) {
                if (is_array($data['useContext'])) {
                    foreach ($data['useContext'] as $d) {
                        $this->addUseContext($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"useContext" must be array of objects or null, '.gettype($data['useContext']).' seen.');
                }
            }
            if (isset($data['jurisdiction'])) {
                if (is_array($data['jurisdiction'])) {
                    foreach ($data['jurisdiction'] as $d) {
                        $this->addJurisdiction($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"jurisdiction" must be array of objects or null, '.gettype($data['jurisdiction']).' seen.');
                }
            }
            if (isset($data['purpose'])) {
                $this->setPurpose($data['purpose']);
            }
            if (isset($data['copyright'])) {
                $this->setCopyright($data['copyright']);
            }
            if (isset($data['keyword'])) {
                if (is_array($data['keyword'])) {
                    foreach ($data['keyword'] as $d) {
                        $this->addKeyword($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"keyword" must be array of objects or null, '.gettype($data['keyword']).' seen.');
                }
            }
            if (isset($data['fhirVersion'])) {
                $this->setFhirVersion($data['fhirVersion']);
            }
            if (isset($data['mapping'])) {
                if (is_array($data['mapping'])) {
                    foreach ($data['mapping'] as $d) {
                        $this->addMapping($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"mapping" must be array of objects or null, '.gettype($data['mapping']).' seen.');
                }
            }
            if (isset($data['kind'])) {
                $this->setKind($data['kind']);
            }
            if (isset($data['abstract'])) {
                $this->setAbstract($data['abstract']);
            }
            if (isset($data['contextType'])) {
                $this->setContextType($data['contextType']);
            }
            if (isset($data['context'])) {
                if (is_array($data['context'])) {
                    foreach ($data['context'] as $d) {
                        $this->addContext($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"context" must be array of objects or null, '.gettype($data['context']).' seen.');
                }
            }
            if (isset($data['contextInvariant'])) {
                if (is_array($data['contextInvariant'])) {
                    foreach ($data['contextInvariant'] as $d) {
                        $this->addContextInvariant($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"contextInvariant" must be array of objects or null, '.gettype($data['contextInvariant']).' seen.');
                }
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['baseDefinition'])) {
                $this->setBaseDefinition($data['baseDefinition']);
            }
            if (isset($data['derivation'])) {
                $this->setDerivation($data['derivation']);
            }
            if (isset($data['snapshot'])) {
                $this->setSnapshot($data['snapshot']);
            }
            if (isset($data['differential'])) {
                $this->setDifferential($data['differential']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (isset($this->url)) {
            $json['url'] = $this->url;
        }
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach ($this->identifier as $identifier) {
                $json['identifier'][] = $identifier;
            }
        }
        if (isset($this->version)) {
            $json['version'] = $this->version;
        }
        if (isset($this->name)) {
            $json['name'] = $this->name;
        }
        if (isset($this->title)) {
            $json['title'] = $this->title;
        }
        if (isset($this->status)) {
            $json['status'] = $this->status;
        }
        if (isset($this->experimental)) {
            $json['experimental'] = $this->experimental;
        }
        if (isset($this->date)) {
            $json['date'] = $this->date;
        }
        if (isset($this->publisher)) {
            $json['publisher'] = $this->publisher;
        }
        if (0 < count($this->contact)) {
            $json['contact'] = [];
            foreach ($this->contact as $contact) {
                $json['contact'][] = $contact;
            }
        }
        if (isset($this->description)) {
            $json['description'] = $this->description;
        }
        if (0 < count($this->useContext)) {
            $json['useContext'] = [];
            foreach ($this->useContext as $useContext) {
                $json['useContext'][] = $useContext;
            }
        }
        if (0 < count($this->jurisdiction)) {
            $json['jurisdiction'] = [];
            foreach ($this->jurisdiction as $jurisdiction) {
                $json['jurisdiction'][] = $jurisdiction;
            }
        }
        if (isset($this->purpose)) {
            $json['purpose'] = $this->purpose;
        }
        if (isset($this->copyright)) {
            $json['copyright'] = $this->copyright;
        }
        if (0 < count($this->keyword)) {
            $json['keyword'] = [];
            foreach ($this->keyword as $keyword) {
                $json['keyword'][] = $keyword;
            }
        }
        if (isset($this->fhirVersion)) {
            $json['fhirVersion'] = $this->fhirVersion;
        }
        if (0 < count($this->mapping)) {
            $json['mapping'] = [];
            foreach ($this->mapping as $mapping) {
                $json['mapping'][] = $mapping;
            }
        }
        if (isset($this->kind)) {
            $json['kind'] = $this->kind;
        }
        if (isset($this->abstract)) {
            $json['abstract'] = $this->abstract;
        }
        if (isset($this->contextType)) {
            $json['contextType'] = $this->contextType;
        }
        if (0 < count($this->context)) {
            $json['context'] = [];
            foreach ($this->context as $context) {
                $json['context'][] = $context;
            }
        }
        if (0 < count($this->contextInvariant)) {
            $json['contextInvariant'] = [];
            foreach ($this->contextInvariant as $contextInvariant) {
                $json['contextInvariant'][] = $contextInvariant;
            }
        }
        if (isset($this->type)) {
            $json['type'] = $this->type;
        }
        if (isset($this->baseDefinition)) {
            $json['baseDefinition'] = $this->baseDefinition;
        }
        if (isset($this->derivation)) {
            $json['derivation'] = $this->derivation;
        }
        if (isset($this->snapshot)) {
            $json['snapshot'] = $this->snapshot;
        }
        if (isset($this->differential)) {
            $json['differential'] = $this->differential;
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<StructureDefinition xmlns="http://hl7.org/fhir"></StructureDefinition>');
        }
        parent::xmlSerialize(true, $sxe);
        if (isset($this->url)) {
            $this->url->xmlSerialize(true, $sxe->addChild('url'));
        }
        if (0 < count($this->identifier)) {
            foreach ($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->version)) {
            $this->version->xmlSerialize(true, $sxe->addChild('version'));
        }
        if (isset($this->name)) {
            $this->name->xmlSerialize(true, $sxe->addChild('name'));
        }
        if (isset($this->title)) {
            $this->title->xmlSerialize(true, $sxe->addChild('title'));
        }
        if (isset($this->status)) {
            $this->status->xmlSerialize(true, $sxe->addChild('status'));
        }
        if (isset($this->experimental)) {
            $this->experimental->xmlSerialize(true, $sxe->addChild('experimental'));
        }
        if (isset($this->date)) {
            $this->date->xmlSerialize(true, $sxe->addChild('date'));
        }
        if (isset($this->publisher)) {
            $this->publisher->xmlSerialize(true, $sxe->addChild('publisher'));
        }
        if (0 < count($this->contact)) {
            foreach ($this->contact as $contact) {
                $contact->xmlSerialize(true, $sxe->addChild('contact'));
            }
        }
        if (isset($this->description)) {
            $this->description->xmlSerialize(true, $sxe->addChild('description'));
        }
        if (0 < count($this->useContext)) {
            foreach ($this->useContext as $useContext) {
                $useContext->xmlSerialize(true, $sxe->addChild('useContext'));
            }
        }
        if (0 < count($this->jurisdiction)) {
            foreach ($this->jurisdiction as $jurisdiction) {
                $jurisdiction->xmlSerialize(true, $sxe->addChild('jurisdiction'));
            }
        }
        if (isset($this->purpose)) {
            $this->purpose->xmlSerialize(true, $sxe->addChild('purpose'));
        }
        if (isset($this->copyright)) {
            $this->copyright->xmlSerialize(true, $sxe->addChild('copyright'));
        }
        if (0 < count($this->keyword)) {
            foreach ($this->keyword as $keyword) {
                $keyword->xmlSerialize(true, $sxe->addChild('keyword'));
            }
        }
        if (isset($this->fhirVersion)) {
            $this->fhirVersion->xmlSerialize(true, $sxe->addChild('fhirVersion'));
        }
        if (0 < count($this->mapping)) {
            foreach ($this->mapping as $mapping) {
                $mapping->xmlSerialize(true, $sxe->addChild('mapping'));
            }
        }
        if (isset($this->kind)) {
            $this->kind->xmlSerialize(true, $sxe->addChild('kind'));
        }
        if (isset($this->abstract)) {
            $this->abstract->xmlSerialize(true, $sxe->addChild('abstract'));
        }
        if (isset($this->contextType)) {
            $this->contextType->xmlSerialize(true, $sxe->addChild('contextType'));
        }
        if (0 < count($this->context)) {
            foreach ($this->context as $context) {
                $context->xmlSerialize(true, $sxe->addChild('context'));
            }
        }
        if (0 < count($this->contextInvariant)) {
            foreach ($this->contextInvariant as $contextInvariant) {
                $contextInvariant->xmlSerialize(true, $sxe->addChild('contextInvariant'));
            }
        }
        if (isset($this->type)) {
            $this->type->xmlSerialize(true, $sxe->addChild('type'));
        }
        if (isset($this->baseDefinition)) {
            $this->baseDefinition->xmlSerialize(true, $sxe->addChild('baseDefinition'));
        }
        if (isset($this->derivation)) {
            $this->derivation->xmlSerialize(true, $sxe->addChild('derivation'));
        }
        if (isset($this->snapshot)) {
            $this->snapshot->xmlSerialize(true, $sxe->addChild('snapshot'));
        }
        if (isset($this->differential)) {
            $this->differential->xmlSerialize(true, $sxe->addChild('differential'));
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}
