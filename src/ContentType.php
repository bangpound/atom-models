<?php

namespace Bangpound\Atom\Model;

/**
 * ContentType.
 *
 * The Atom content construct is defined in section 4.1.3 of the format spec.
 *
 * @category DTOs
 *
 * @author   xsd-php
 *
 * @link     https://github.com/dalanhurst/xsd-php
 *
 * @internal targetNamespace = http://www.w3.org/2005/Atom
 */
abstract class ContentType extends CommonAttributes
{
    /**
     * @var string (xs:string)
     *
     * @internal attribute (http://www.w3.org/2001/XMLSchema)
     */
    protected $type = 'text';

    /**
     * @var string (xs:anyURI)
     *
     * @internal attribute (http://www.w3.org/2001/XMLSchema)
     */
    protected $src;

    /**
     * @var string
     */
    protected $content;

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
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * @param string $src
     */
    public function setSrc($src)
    {
        $this->src = $src;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array_filter(array(
            'type' => $this->getType(),
            'src' => $this->getSrc(),
            'content' => $this->getContent(),
        ));
    }
}
