<?php

namespace Bangpound\Atom\Model;

/**
 * TextType.
 *
 * The Atom text construct is defined in section 3.1 of the format spec.
 *
 * @category DTOs
 *
 * @author   xsd-php
 *
 * @link     https://github.com/dalanhurst/xsd-php
 *
 * @internal targetNamespace = http://www.w3.org/2005/Atom
 */
interface TextTypeInterface extends CommonAttributesInterface
{
    /**
     * @return string
     */
    public function getText();

    /**
     * @param string $text
     */
    public function setText($text = null);

    /**
     * @return string
     */
    public function getType();

    /**
     * @param string $type
     */
    public function setType($type = null);
}
