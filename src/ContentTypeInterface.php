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
interface ContentTypeInterface extends CommonAttributesInterface
{
    /**
     * @return string
     */
    public function getType();

    /**
     * @param string $type
     */
    public function setType($type = null);

    /**
     * @return string
     */
    public function getSrc();

    /**
     * @param string $src
     */
    public function setSrc($src = null);

    /**
     * @return string
     */
    public function getContent();

    /**
     * @param string $content
     */
    public function setContent($content = null);
}
