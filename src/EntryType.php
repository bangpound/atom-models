<?php

namespace Bangpound\Atom\Model;

/**
 * EntryType.
 *
 * The Atom entry construct is defined in section 4.1.2 of the format spec.
 *
 * @category DTOs
 *
 * @author   xsd-php
 *
 * @link     https://github.com/dalanhurst/xsd-php
 *
 * @internal targetNamespace = http://www.w3.org/2005/Atom
 */
abstract class EntryType extends CommonAttributes
{
    use CommonTypes;

    /**
     * @var ContentType
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $content;

    /**
     * @var string (atom:textType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $id;

    /**
     * @var \DateTime (atom:dateTimeType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $published;

    /**
     * @var TextType
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $rights;

    /**
     * @var SourceType
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $source;

    /**
     * @var TextType
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $summary;

    /**
     * @var TextType
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $title;

    /**
     * @var \DateTime (atom:dateTimeType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $updated;

    /**
     * @return ContentType
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param ContentType $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param \DateTime $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * @return TextType
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param TextType $summary
     */
    public function setSummary(TextType $summary)
    {
        $this->summary = $summary;
    }

    /**
     * @return \DateTime
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @param \DateTime $published
     */
    public function setPublished($published)
    {
        $this->published = $published;
    }

    /**
     * @return TextType
     */
    public function getRights()
    {
        return $this->rights;
    }

    /**
     * @param TextType $rights
     */
    public function setRights(TextType $rights)
    {
        $this->rights = $rights;
    }

    /**
     * @return SourceType
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param SourceType $source
     */
    public function setSource(SourceType $source)
    {
        $this->source = $source;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param TextType $title
     */
    public function setTitle(TextType $title)
    {
        $this->title = $title;
    }
}
