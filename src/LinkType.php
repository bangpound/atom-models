<?php

namespace Bangpound\Atom\Model;

/**
 * LinkType.
 *
 * The Atom link construct is defined in section 3.4 of the format spec.
 *
 * @category DTOs
 *
 * @author   xsd-php
 *
 * @link     https://github.com/dalanhurst/xsd-php
 *
 * @internal targetNamespace = http://www.w3.org/2005/Atom
 */
abstract class LinkType extends CommonAttributes implements LinkTypeInterface
{
    /**
     * @var string
     *
     * @internal attribute (http://www.w3.org/2001/XMLSchema)
     */
    protected $href;

    /**
     * @var string
     *
     * @internal attribute (http://www.w3.org/2001/XMLSchema)
     */
    protected $rel;

    /**
     * @var string
     *
     * @internal attribute (http://www.w3.org/2001/XMLSchema)
     */
    protected $type;

    /**
     * @var string
     *
     * @internal attribute (http://www.w3.org/2001/XMLSchema)
     */
    protected $hreflang;

    /**
     * @var string
     *
     * @internal attribute (http://www.w3.org/2001/XMLSchema)
     */
    protected $title;

    /**
     * @var int
     *
     * @internal attribute (http://www.w3.org/2001/XMLSchema)
     */
    protected $length;

    /**
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * @param string $href
     */
    public function setHref($href = null)
    {
        $this->href = $href;
    }

    /**
     * @return string
     */
    public function getRel()
    {
        return $this->rel;
    }

    /**
     * @param string $rel
     */
    public function setRel($rel = null)
    {
        $this->rel = $rel;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type = null)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getHreflang()
    {
        return $this->hreflang;
    }

    /**
     * @param string $hreflang
     */
    public function setHreflang($hreflang = null)
    {
        $this->hreflang = $hreflang;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title = null)
    {
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param int $length
     */
    public function setLength($length = null)
    {
        $this->length = $length;
    }
}
