<?php

namespace Bangpound\Atom\Model;

/**
 * SourceType.
 *
 * The Atom source construct is defined in section 4.2.11 of the format spec.
 *
 * @category DTOs
 *
 * @author   xsd-php
 *
 * @link     https://github.com/dalanhurst/xsd-php
 *
 * @internal targetNamespace = http://www.w3.org/2005/Atom
 */
interface SourceTypeInterface extends CommonAttributesInterface
{
    /**
     * @return \DateTimeInterface
     */
    public function getUpdated();

    /**
     * @param \DateTimeInterface $updated
     */
    public function setUpdated(\DateTimeInterface $updated);

    /**
     * @return TextTypeInterface
     */
    public function getTitle();

    /**
     * @param TextTypeInterface $title
     */
    public function setTitle(TextTypeInterface $title);

    /**
     * @return TextTypeInterface
     */
    public function getSubtitle();

    /**
     * @param TextTypeInterface $subtitle
     */
    public function setSubtitle(TextTypeInterface $subtitle);

    /**
     * @return TextTypeInterface
     */
    public function getRights();

    /**
     * @param TextTypeInterface $rights
     */
    public function setRights(TextTypeInterface $rights);

    /**
     * @return string
     */
    public function getLogo();

    /**
     * @param string $logo
     */
    public function setLogo($logo);

    /**
     * @return string
     */
    public function getId();

    /**
     * @param string $id
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getIcon();

    /**
     * @param string $icon
     */
    public function setIcon($icon);

    /**
     * @return GeneratorTypeInterface
     */
    public function getGenerator();

    /**
     * @param GeneratorTypeInterface $generator
     */
    public function setGenerator(GeneratorTypeInterface $generator);
}