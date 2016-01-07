<?php

namespace Bangpound\Atom\Model;

trait CommonTypes
{
    /**
     * @var array (atom:personType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $authors = array();

    /**
     * @var array (atom:categoryType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $categories = array();

    /**
     * @var array (atom:personType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $contributors = array();

    /**
     * @var array (atom:linksType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $links = array();

    /**
     * Add author.
     *
     * @param PersonType $author
     *
     * @return EntryType
     */
    public function addAuthor(PersonType $author)
    {
        $this->authors[] = $author;

        return $this;
    }

    /**
     * Remove author.
     *
     * @param PersonType $author
     */
    public function removeAuthor(PersonType $author)
    {
        $key = array_search($author, $this->authors, true);
        if ($key !== false) {
            unset($this->authors[$key]);
        }
        $this->authors = array_values($this->authors);
    }

    /**
     * Get authors.
     *
     * @return array
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * Set authors.
     *
     * @param array $authors
     *
     * @return EntryType
     */
    public function setAuthors($authors)
    {
        $this->authors = $authors;

        return $this;
    }

    /**
     * Add category.
     *
     * @param CategoryType $category
     *
     * @return EntryType
     */
    public function addCategory(CategoryType $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category.
     *
     * @param CategoryType $category
     */
    public function removeCategory(CategoryType $category)
    {
        $key = array_search($category, $this->categories, true);
        if ($key !== false) {
            unset($this->categories[$key]);
        }
        $this->categories = array_values($this->categories);
    }

    /**
     * Get category.
     *
     * @return array
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set category.
     *
     * @param array $categories
     *
     * @return EntryType
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Add contributor.
     *
     * @param PersonType $contributor
     *
     * @return EntryType
     */
    public function addContributor(PersonType $contributor)
    {
        $this->contributors[] = $contributor;

        return $this;
    }

    /**
     * Remove contributor.
     *
     * @param PersonType $contributor
     */
    public function removeContributor(PersonType $contributor)
    {
        $key = array_search($contributor, $this->contributors, true);
        if ($key !== false) {
            unset($this->contributors[$key]);
        }
        $this->contributors = array_values($this->contributors);
    }

    /**
     * Get contributors.
     *
     * @return array
     */
    public function getContributors()
    {
        return $this->contributors;
    }

    /**
     * Set contributors.
     *
     * @param array $contributors
     *
     * @return EntryType
     */
    public function setContributors($contributors)
    {
        $this->contributors = $contributors;

        return $this;
    }

    /**
     * Add link.
     *
     * @param LinkType $link
     *
     * @return EntryType
     */
    public function addLink(LinkType $link)
    {
        $this->links[] = $link;

        return $this;
    }

    /**
     * Remove link.
     *
     * @param LinkType $link
     */
    public function removeLink(LinkType $link)
    {
        $key = array_search($link, $this->links, true);
        if ($key !== false) {
            unset($this->links[$key]);
        }
        $this->links = array_values($this->links);
    }

    /**
     * Get links.
     *
     * @return array
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Set links.
     *
     * @param array $links
     *
     * @return EntryType
     */
    public function setLinks($links)
    {
        $this->links = $links;

        return $this;
    }
}
