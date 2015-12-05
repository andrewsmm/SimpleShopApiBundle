<?php

namespace SimpleShopApiBundle\Entity;

/**
 * Product
 */
class Product
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $price;

    /**
     * @var \DateTime
     */
    private $dtCreated;

    /**
     * @var \DateTime
     */
    private $dtUpdated;

    /**
     * @var \SimpleShopApiBundle\Entity\Category
     */
    private $category;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Product
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set dtCreated
     *
     * @param \DateTime $dtCreated
     *
     * @return Product
     */
    public function setDtCreated($dtCreated)
    {
        $this->dtCreated = $dtCreated;

        return $this;
    }

    /**
     * Get dtCreated
     *
     * @return \DateTime
     */
    public function getDtCreated()
    {
        return $this->dtCreated;
    }

    /**
     * Set dtUpdated
     *
     * @param \DateTime $dtUpdated
     *
     * @return Product
     */
    public function setDtUpdated($dtUpdated)
    {
        $this->dtUpdated = $dtUpdated;

        return $this;
    }

    /**
     * Get dtUpdated
     *
     * @return \DateTime
     */
    public function getDtUpdated()
    {
        return $this->dtUpdated;
    }

    /**
     * Set category
     *
     * @param \SimpleShopApiBundle\Entity\Category $category
     *
     * @return Product
     */
    public function setCategory(\SimpleShopApiBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \SimpleShopApiBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }
}

