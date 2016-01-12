<?php

namespace Bangpound\Atom\Model;

use Doctrine\Common\Collections\Collection;

trait CommonTypes
{
    /**
     * @var Collection (atom:personType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $authors;

    /**
     * @var Collection (atom:categoryType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $categories;

    /**
     * @var Collection (atom:personType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $contributors;

    /**
     * @var Collection (atom:linksType)
     *
     * @internal element (http://www.w3.org/2001/XMLSchema)
     */
    protected $links;

    /**
     * Add author.
     *
     * @param PersonType $author
     *
     * @return EntryType
     */
    public function addAuthor(PersonType $author)
    {
        $this->authors->add($author);

        return $this;
    }

    /**
     * Remove author.
     *
     * @param PersonType $author
     */
    public function removeAuthor(PersonType $author)
    {
        $this->authors->removeElement($author);
    }

    /**
     * Get authors.
     *
     * @return Collection
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
        $this->categories->add($category);

        return $this;
    }

    /**
     * Remove category.
     *
     * @param CategoryType $category
     */
    public function removeCategory(CategoryType $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get category.
     *
     * @return Collection
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
        $this->contributors->add($contributor);

        return $this;
    }

    /**
     * Remove contributor.
     *
     * @param PersonType $contributor
     */
    public function removeContributor(PersonType $contributor)
    {
        $this->contributors->removeElement($contributor);
    }

    /**
     * Get contributors.
     *
     * @return Collection
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
        $this->links->add($link);

        return $this;
    }

    /**
     * Remove link.
     *
     * @param LinkType $link
     */
    public function removeLink(LinkType $link)
    {
        $this->links->removeElement($link);
    }

    /**
     * Get links.
     *
     * @return Collection
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
