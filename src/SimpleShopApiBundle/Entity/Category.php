<?php

namespace SimpleShopApiBundle\Entity;

/**
 * Category
 */
class Category
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
     * @var integer
     */
    private $rootId;


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
     * @return Category
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
     * Set rootId
     *
     * @param integer $rootId
     *
     * @return Category
     */
    public function setRootId($rootId)
    {
        $this->rootId = $rootId;

        return $this;
    }

    /**
     * Get rootId
     *
     * @return integer
     */
    public function getRootId()
    {
        return $this->rootId;
    }
}

