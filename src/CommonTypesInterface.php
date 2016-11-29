<?php

namespace Bangpound\Atom\Model;

/**
 * Interface CommonTypesInterface.
 */
interface CommonTypesInterface extends CommonAttributesInterface
{
    /**
     * Add author.
     *
     * @param PersonTypeInterface $author
     */
    public function addAuthor(PersonTypeInterface $author);

    /**
     * Remove author.
     *
     * @param PersonTypeInterface $author
     */
    public function removeAuthor(PersonTypeInterface $author);

    /**
     * Get authors.
     *
     * @return PersonTypeInterface[]
     */
    public function getAuthors();

    /**
     * Set authors.
     *
     * @param PersonTypeInterface[] $authors
     */
    public function setAuthors(array $authors = []);

    /**
     * Add category.
     *
     * @param CategoryTypeInterface $category
     */
    public function addCategory(CategoryTypeInterface $category);

    /**
     * Remove category.
     *
     * @param CategoryTypeInterface $category
     */
    public function removeCategory(CategoryTypeInterface $category);

    /**
     * Get category.
     *
     * @return CategoryTypeInterface[]
     */
    public function getCategories();

    /**
     * Set category.
     *
     * @param CategoryTypeInterface[] $categories
     */
    public function setCategories(array $categories = []);

    /**
     * Add contributor.
     *
     * @param PersonTypeInterface $contributor
     */
    public function addContributor(PersonTypeInterface $contributor);

    /**
     * Remove contributor.
     *
     * @param PersonTypeInterface $contributor
     */
    public function removeContributor(PersonTypeInterface $contributor);

    /**
     * Get contributors.
     *
     * @return PersonTypeInterface[]
     */
    public function getContributors();

    /**
     * Set contributors.
     *
     * @param PersonTypeInterface[] $contributors
     */
    public function setContributors(array $contributors = []);

    /**
     * Add link.
     *
     * @param LinkTypeInterface $link
     */
    public function addLink(LinkTypeInterface $link);

    /**
     * Remove link.
     *
     * @param LinkTypeInterface $link
     */
    public function removeLink(LinkTypeInterface $link);

    /**
     * Get links.
     *
     * @return LinkTypeInterface[]
     */
    public function getLinks();

    /**
     * Set links.
     *
     * @param LinkTypeInterface[] $links
     */
    public function setLinks(array $links = []);
}
