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
interface LinkTypeInterface extends CommonAttributesInterface
{
    /**
     * @return string
     */
    public function getHref();

    /**
     * @param string $href
     */
    public function setHref($href);

    /**
     * @return string
     */
    public function getRel();

    /**
     * @param string $rel
     */
    public function setRel($rel);

    /**
     * @return string
     */
    public function getType();

    /**
     * @param string $type
     */
    public function setType($type);

    /**
     * @return string
     */
    public function getHreflang();

    /**
     * @param string $hreflang
     */
    public function setHreflang($hreflang);

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $title
     */
    public function setTitle($title);

    /**
     * @return int
     */
    public function getLength();

    /**
     * @param int $length
     */
    public function setLength($length);
}