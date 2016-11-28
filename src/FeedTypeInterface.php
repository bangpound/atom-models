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
interface FeedTypeInterface extends CommonTypesInterface
{
    /**
     * @return GeneratorTypeInterface
     */
    public function getGenerator();

    /**
     * @param GeneratorTypeInterface $generator
     */
    public function setGenerator(GeneratorTypeInterface $generator = null);

    /**
     * @return string
     */
    public function getIcon();

    /**
     * @param string $icon
     */
    public function setIcon($icon);

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
    public function getLogo();

    /**
     * @param string $logo
     */
    public function setLogo($logo);

    /**
     * @return TextTypeInterface
     */
    public function getRights();

    /**
     * @param TextTypeInterface $rights
     */
    public function setRights(TextTypeInterface $rights = null);

    /**
     * @return TextTypeInterface
     */
    public function getSubtitle();

    /**
     * @param TextTypeInterface $subtitle
     */
    public function setSubtitle(TextTypeInterface $subtitle = null);

    /**
     * @return TextTypeInterface
     */
    public function getTitle();

    /**
     * @param TextTypeInterface $title
     */
    public function setTitle(TextTypeInterface $title = null);

    /**
     * @return \DateTimeInterface
     */
    public function getUpdated();

    /**
     * @param \DateTimeInterface $updated
     */
    public function setUpdated(\DateTimeInterface $updated = null);

    /**
     * Add entry.
     *
     * @param EntryTypeInterface $entry
     */
    public function addEntry(EntryTypeInterface $entry);

    /**
     * Remove entry.
     *
     * @param EntryTypeInterface $entry
     */
    public function removeEntry(EntryTypeInterface $entry);

    /**
     * Get entries.
     *
     * @return EntryTypeInterface[]
     */
    public function getEntries();

    /**
     * Set entries.
     *
     * @param EntryTypeInterface[] $entries
     */
    public function setEntries(array $entries);
}
