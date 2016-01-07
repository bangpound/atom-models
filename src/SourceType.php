<?php

namespace Bangpound\Atom\Model;

/**
 * SourceType.
 *
 * The Atom source construct is defined in section 4.2.11 of the format spec.
 *
 * @category DTOs
 *
 * @author   xsd-php
 *
 * @link     https://github.com/dalanhurst/xsd-php
 *
 * @internal targetNamespace = http://www.w3.org/2005/Atom
 */
abstract class SourceType extends CommonAttributes
{
    use CommonTypes;

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
     * @return \Bangpound\Atom\Model\GeneratorType
     */
    public function getGenerator()
    {
        return $this->generator;
    }

    /**
     * @param \Bangpound\Atom\Model\GeneratorType $generator
     */
    public function setGenerator($generator)
    {
        $this->generator = $generator;
    }
}
