<?php

namespace Bangpound\Atom\Model;

/**
 * Interface CommonTypesInterface.
 */
interface CommonTypesInterface extends CommonAttributesInterface
{
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
    public function setAuthors($authors = []);

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
    public function setCategories($categories = []);

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
    public function setContributors($contributors = []);

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
    public function setLinks($links = []);
}
