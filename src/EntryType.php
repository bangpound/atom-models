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
abstract class EntryType extends CommonTypes implements EntryTypeInterface
{
    /**
     * @var ContentTypeInterface
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
     * @var \DateTimeInterface (atom:dateTimeType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $published;

    /**
     * @var TextTypeInterface
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
     * @var TextTypeInterface
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $summary;

    /**
     * @var TextTypeInterface
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $title;

    /**
     * @var \DateTimeInterface (atom:dateTimeType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $updated;

    /**
     * @return ContentTypeInterface
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param ContentTypeInterface $content
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
     * @return \DateTimeInterface
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param \DateTimeInterface $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * @return TextTypeInterface
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param TextTypeInterface $summary
     */
    public function setSummary(TextTypeInterface $summary)
    {
        $this->summary = $summary;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @param \DateTimeInterface $published
     */
    public function setPublished($published)
    {
        $this->published = $published;
    }

    /**
     * @return TextTypeInterface
     */
    public function getRights()
    {
        return $this->rights;
    }

    /**
     * @param TextTypeInterface $rights
     */
    public function setRights(TextTypeInterface $rights)
    {
        $this->rights = $rights;
    }

    /**
     * @return SourceTypeInterface
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param SourceTypeInterface $source
     */
    public function setSource(SourceTypeInterface $source)
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
     * @param TextTypeInterface $title
     */
    public function setTitle(TextTypeInterface $title)
    {
        $this->title = $title;
    }
}
