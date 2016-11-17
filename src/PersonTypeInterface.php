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
interface PersonTypeInterface extends CommonAttributesInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getUri();

    /**
     * @param string $uri
     */
    public function setUri($uri);

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @param string $email
     */
    public function setEmail($email);
}
