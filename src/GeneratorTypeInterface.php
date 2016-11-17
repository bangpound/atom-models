<?php

namespace Bangpound\Atom\Model;

/**
 * FeedType.
 *
 * The Atom feed construct is defined in section 4.1.1 of the format spec.
 *
 * @category DTOs
 *
 * @author   xsd-php
 *
 * @link     https://github.com/dalanhurst/xsd-php
 *
 * @internal targetNamespace = http://www.w3.org/2005/Atom
 */
interface GeneratorTypeInterface extends CommonAttributesInterface
{
    /**
     * @return mixed
     */
    public function getUri();

    /**
     * @param mixed $uri
     */
    public function setUri($uri);

    /**
     * @return mixed
     */
    public function getVersion();

    /**
     * @param mixed $version
     */
    public function setVersion($version);

    /**
     * @return mixed
     */
    public function getGenerator();

    /**
     * @param mixed $generator
     */
    public function setGenerator($generator);
}
