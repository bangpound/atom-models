<?php

namespace Bangpound\Atom\Model;

/**
 * EntryType.
 *
 * The Atom entry construct is defined in section 4.1.2 of the format spec.
 *
 * @category DTOs
 *
 * @author   xsd-php
 *
 * @link     https://github.com/dalanhurst/xsd-php
 *
 * @internal targetNamespace = http://www.w3.org/2005/Atom
 */
interface EntryTypeInterface extends CommonTypesInterface
{
    /**
     * @return ContentTypeInterface
     */
    public function getContent();

    /**
     * @param ContentTypeInterface $content
     */
    public function setContent(ContentTypeInterface $content = null);

    /**
     * @return string
     */
    public function getId();

    /**
     * @param string $id
     */
    public function setId($id = null);

    /**
     * @return \DateTimeInterface
     */
    public function getUpdated();

    /**
     * @param \DateTimeInterface $updated
     */
    public function setUpdated(\DateTimeInterface $updated = null);

    /**
     * @return TextTypeInterface
     */
    public function getSummary();

    /**
     * @param TextTypeInterface $summary
     */
    public function setSummary(TextTypeInterface $summary = null);

    /**
     * @return \DateTimeInterface
     */
    public function getPublished();

    /**
     * @param \DateTimeInterface $published
     */
    public function setPublished(\DateTimeInterface $published = null);

    /**
     * @return TextTypeInterface
     */
    public function getRights();

    /**
     * @param TextTypeInterface $rights
     */
    public function setRights(TextTypeInterface $rights = null);

    /**
     * @return SourceTypeInterface
     */
    public function getSource();

    /**
     * @param SourceTypeInterface $source
     */
    public function setSource(SourceTypeInterface $source = null);

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param TextTypeInterface $title
     */
    public function setTitle(TextTypeInterface $title = null);
}
