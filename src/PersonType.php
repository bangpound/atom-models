<?php

namespace Bangpound\Atom\Model;

/**
 * PersonType.
 *
 * The Atom person construct is defined in section 3.2 of the format spec.
 *
 * @category DTOs
 *
 * @author   xsd-php
 *
 * @link     https://github.com/dalanhurst/xsd-php
 *
 * @internal targetNamespace = http://www.w3.org/2005/Atom
 */
abstract class PersonType extends CommonAttributes implements PersonTypeInterface
{
    /**
     * @var string
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $name;

    /**
     * @var string
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $uri;

    /**
     * @var string
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $email;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     */
    public function setUri($uri = null)
    {
        $this->uri = $uri;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email = null)
    {
        $this->email = $email;
    }
}
