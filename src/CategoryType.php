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
abstract class CategoryType extends CommonAttributes implements CategoryTypeInterface
{
    /**
     * @var string
     *
     * @internal attribute (http://www.w3.org/2001/XMLSchema)
     */
    protected $term;

    /**
     * @var string
     *
     * @internal attribute (http://www.w3.org/2001/XMLSchema)
     */
    protected $scheme;

    /**
     * @var string
     *
     * @internal attribute (http://www.w3.org/2001/XMLSchema)
     */
    protected $label;

    /**
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * @param string $term
     */
    public function setTerm($term = null)
    {
        $this->term = $term;
    }

    /**
     * @return string
     */
    public function getScheme()
    {
        return $this->scheme;
    }

    /**
     * @param string $scheme
     */
    public function setScheme($scheme = null)
    {
        $this->scheme = $scheme;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel($label = null)
    {
        $this->label = $label;
    }
}
