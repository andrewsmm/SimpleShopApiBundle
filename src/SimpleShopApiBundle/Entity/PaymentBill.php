<?php

namespace SimpleShopApiBundle\Entity;

/**
 * PaymentBill
 */
class PaymentBill
{
    /**
     * @var integer
     */
    private $billId;

    /**
     * @var string
     */
    private $paymentType;

    /**
     * @var string
     */
    private $billStatus;

    /**
     * @var \DateTime
     */
    private $dtCreated;

    /**
     * @var string
     */
    private $total;

    /**
     * @var \SimpleShopApiBundle\Entity\Orders
     */
    private $order;


    /**
     * Get billId
     *
     * @return integer
     */
    public function getBillId()
    {
        return $this->billId;
    }

    /**
     * Set paymentType
     *
     * @param string $paymentType
     *
     * @return PaymentBill
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Get paymentType
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set billStatus
     *
     * @param string $billStatus
     *
     * @return PaymentBill
     */
    public function setBillStatus($billStatus)
    {
        $this->billStatus = $billStatus;

        return $this;
    }

    /**
     * Get billStatus
     *
     * @return string
     */
    public function getBillStatus()
    {
        return $this->billStatus;
    }

    /**
     * Set dtCreated
     *
     * @param \DateTime $dtCreated
     *
     * @return PaymentBill
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
     * Set total
     *
     * @param string $total
     *
     * @return PaymentBill
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set order
     *
     * @param \SimpleShopApiBundle\Entity\Orders $order
     *
     * @return PaymentBill
     */
    public function setOrder(\SimpleShopApiBundle\Entity\Orders $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \SimpleShopApiBundle\Entity\Orders
     */
    public function getOrder()
    {
        return $this->order;
    }
}

