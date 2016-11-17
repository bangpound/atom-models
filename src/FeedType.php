<?php

namespace Bangpound\Atom\Model;

/**
 * FeedType.
 *
 * The Atom feed construct is defined in section 4.1.1 of the format spec.
 *
 * @category DTOs
 *
 * @author   xsd-php
 *
 * @link     https://github.com/dalanhurst/xsd-php
 *
 * @internal targetNamespace = http://www.w3.org/2005/Atom
 */
abstract class FeedType extends CommonTypes implements FeedTypeInterface
{
    /**
     * @var GeneratorTypeInterface (atom:generatorType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $generator;

    /**
     * @var string (atom:iconType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $icon;

    /**
     * @var string (atom:idType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $id;

    /**
     * @var string (atom:logoType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $logo;

    /**
     * @var TextTypeInterface (atom:textType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $rights;

    /**
     * @var TextTypeInterface (atom:textType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $subtitle;

    /**
     * @var TextTypeInterface (atom:textType)
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
     * @var array (atom:entryType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $entries;

    /**
     * @return GeneratorTypeInterface
     */
    public function getGenerator()
    {
        return $this->generator;
    }

    /**
     * @param GeneratorTypeInterface $generator
     */
    public function setGenerator(GeneratorTypeInterface $generator)
    {
        $this->generator = $generator;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
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
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
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
     * @return TextTypeInterface
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * @param TextTypeInterface $subtitle
     */
    public function setSubtitle(TextTypeInterface $subtitle)
    {
        $this->subtitle = $subtitle;
    }

    /**
     * @return TextTypeInterface
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
    public function setUpdated(\DateTimeInterface $updated)
    {
        $this->updated = $updated;
    }

    /**
     * Add entry.
     *
     * @param EntryTypeInterface $entry
     */
    public function addEntry(EntryTypeInterface $entry)
    {
        $this->entries[] = $entry;
    }

    /**
     * Remove entry.
     *
     * @param EntryTypeInterface $entry
     */
    public function removeEntry(EntryTypeInterface $entry)
    {
        $this->entries = array_diff($this->entries, [$entry]);
    }

    /**
     * Get entries.
     *
     * @return array
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * Set entries.
     *
     * @param array $entries
     */
    public function setEntries(array $entries)
    {
        $this->entries = $entries;
    }
}
