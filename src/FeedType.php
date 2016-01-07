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
abstract class FeedType extends CommonAttributes
{
    use CommonTypes;

    /**
     * @var PersonType (atom:personType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $authors;

    /**
     * @var CategoryType (atom:categoryType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $categories;

    /**
     * @var PersonType (atom:personType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $contributors;

    /**
     * @var LinkType (atom:linksType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $links;

    /**
     * @var GeneratorType (atom:generatorType)
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
     * @var TextType (atom:textType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $rights;

    /**
     * @var TextType (atom:textType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $subtitle;

    /**
     * @var TextType (atom:textType)
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
     * @var array (atom:entryType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $entries;

    /**
     * @return \Bangpound\Atom\Model\GeneratorType
     */
    public function getGenerator()
    {
        return $this->generator;
    }

    /**
     * @param \Bangpound\Atom\Model\GeneratorType $generator
     */
    public function setGenerator(GeneratorType $generator)
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
     * @return \Bangpound\Atom\Model\TextType
     */
    public function getRights()
    {
        return $this->rights;
    }

    /**
     * @param \Bangpound\Atom\Model\TextType $rights
     */
    public function setRights($rights)
    {
        $this->rights = $rights;
    }

    /**
     * @return \Bangpound\Atom\Model\TextType
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * @param \Bangpound\Atom\Model\TextType $subtitle
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }

    /**
     * @return \Bangpound\Atom\Model\TextType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param \Bangpound\Atom\Model\TextType $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * Add entry.
     *
     * @param EntryType $entry
     *
     * @return EntryType
     */
    public function addEntry(EntryType $entry)
    {
        $this->entries[] = $entry;

        return $this;
    }

    /**
     * Remove entry.
     *
     * @param EntryType $entry
     */
    public function removeEntry(EntryType $entry)
    {
        $this->entries = array_filter($this->entries, function (EntryType $value) use ($entry) {
            return $entry !== $value;
        });
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
     *
     * @return EntryType
     */
    public function setEntries(array $entries)
    {
        $this->entries = $entries;

        return $this;
    }
}
