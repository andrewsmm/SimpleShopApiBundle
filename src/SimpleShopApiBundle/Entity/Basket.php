<?php

namespace SimpleShopApiBundle\Entity;

/**
 * Basket
 */
class Basket
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $basketProducts;

    /**
     * @var string
     */
    private $sessionId;

    /**
     * @var \DateTime
     */
    private $dtCreated;

    /**
     * @var \DateTime
     */
    private $dtUpdated;


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
     * Set basketProducts
     *
     * @param string $basketProducts
     *
     * @return Basket
     */
    public function setBasketProducts($basketProducts)
    {
        $this->basketProducts = $basketProducts;

        return $this;
    }

    /**
     * Get basketProducts
     *
     * @return string
     */
    public function getBasketProducts()
    {
        return $this->basketProducts;
    }

    /**
     * Set sessionId
     *
     * @param string $sessionId
     *
     * @return Basket
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * Get sessionId
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set dtCreated
     *
     * @param \DateTime $dtCreated
     *
     * @return Basket
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
     * @return Basket
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
}

