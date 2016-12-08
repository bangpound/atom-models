<?php

namespace Bangpound\Atom\Model;

/**
 * Class CommonTypes.
 */
abstract class CommonTypes extends CommonAttributes implements CommonTypesInterface
{
    /**
     * @var PersonTypeInterface[]
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $authors;

    /**
     * @var CategoryTypeInterface[]
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $categories;

    /**
     * @var PersonTypeInterface[]
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $contributors;

    /**
     * @var LinkTypeInterface[]
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $links;

    /**
     * Get authors.
     *
     * @return PersonTypeInterface[]
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * Set authors.
     *
     * @param PersonTypeInterface[] $authors
     */
    public function setAuthors($authors = [])
    {
        $this->authors = $authors;
    }

    /**
     * Get category.
     *
     * @return CategoryTypeInterface[]
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set category.
     *
     * @param CategoryTypeInterface[] $categories
     */
    public function setCategories($categories = [])
    {
        $this->categories = $categories;
    }

    /**
     * Get contributors.
     *
     * @return PersonTypeInterface[]
     */
    public function getContributors()
    {
        return $this->contributors;
    }

    /**
     * Set contributors.
     *
     * @param PersonTypeInterface[] $contributors
     */
    public function setContributors($contributors = [])
    {
        $this->contributors = $contributors;
    }

    /**
     * Get links.
     *
     * @return LinkTypeInterface[]
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Set links.
     *
     * @param LinkTypeInterface[] $links
     */
    public function setLinks($links = [])
    {
        $this->links = $links;
    }
}
