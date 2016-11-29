<?php

namespace Bangpound\Atom\Model;

/**
 * CategoryType.
 *
 * The Atom category construct is defined in section 4.2.2 of the format spec.
 *
 * @category DTOs
 *
 * @author   xsd-php
 *
 * @link     https://github.com/dalanhurst/xsd-php
 *
 * @internal targetNamespace = http://www.w3.org/2005/Atom
 */
interface CategoryTypeInterface extends CommonAttributesInterface
{
    /**
     * @return string
     */
    public function getTerm();

    /**
     * @param string $term
     */
    public function setTerm($term = null);

    /**
     * @return string
     */
    public function getScheme();

    /**
     * @param string $scheme
     */
    public function setScheme($scheme = null);

    /**
     * @return string
     */
    public function getLabel();

    /**
     * @param string $label
     */
    public function setLabel($label = null);
}
