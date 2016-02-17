<?php

namespace Iyzipay\Request;

use Iyzipay\JsonBuilder;
use Iyzipay\Request;
use Iyzipay\RequestStringBuilder;

class CreateCheckoutFormInitializeRequest extends Request
{
    private $price;
    private $paidPrice;
    private $basketId;
    private $paymentGroup;
    private $paymentSource;
    private $buyer;
    private $shippingAddress;
    private $billingAddress;
    private $basketItems;
    private $callbackUrl;
    private $forceThreeDS;
    private $cardUserKey;
    private $posOrderId;

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPaidPrice()
    {
        return $this->paidPrice;
    }

    public function setPaidPrice($paidPrice)
    {
        $this->paidPrice = $paidPrice;
    }

    public function getBasketId()
    {
        return $this->basketId;
    }

    public function setBasketId($basketId)
    {
        $this->basketId = $basketId;
    }

    public function getPaymentGroup()
    {
        return $this->paymentGroup;
    }

    public function setPaymentGroup($paymentGroup)
    {
        $this->paymentGroup = $paymentGroup;
    }

    public function getPaymentSource()
    {
        return $this->paymentSource;
    }

    public function setPaymentSource($paymentSource)
    {
        $this->paymentSource = $paymentSource;
    }

    public function getBuyer()
    {
        return $this->buyer;
    }

    public function setBuyer($buyer)
    {
        $this->buyer = $buyer;
    }

    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
    }

    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    public function setBillingAddress($billingAddress)
    {
        $this->billingAddress = $billingAddress;
    }

    public function getBasketItems()
    {
        return $this->basketItems;
    }

    public function setBasketItems($basketItems)
    {
        $this->basketItems = $basketItems;
    }

    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    public function setCallbackUrl($callbackUrl)
    {
        $this->callbackUrl = $callbackUrl;
    }

    public function getForceThreeDS()
    {
        return $this->forceThreeDS;
    }

    public function setForceThreeDS($forceThreeDS)
    {
        $this->forceThreeDS = $forceThreeDS;
    }

    public function getCardUserKey()
    {
        return $this->cardUserKey;
    }

    public function setCardUserKey($cardUserKey)
    {
        $this->cardUserKey = $cardUserKey;
    }

    public function getPosOrderId()
    {
        return $this->posOrderId;
    }

    public function setPosOrderId($posOrderId)
    {
        $this->posOrderId = $posOrderId;
    }

    public function getJsonObject()
    {
        return JsonBuilder::fromJsonObject(parent::getJsonObject())
            ->addPrice("price", $this->getPrice())
            ->addPrice("paidPrice", $this->getPaidPrice())
            ->add("basketId", $this->getBasketId())
            ->add("paymentGroup", $this->getPaymentGroup())
            ->add("paymentSource", $this->getPaymentSource())
            ->addArray("buyer", $this->getBuyer())
            ->addArray("shippingAddress", $this->getShippingAddress())
            ->addArray("billingAddress", $this->getBillingAddress())
            ->addArray("basketItems", $this->getBasketItems())
            ->add("callbackUrl", $this->getCallbackUrl())
            ->add("forceThreeDS", $this->getForceThreeDS())
            ->add("cardUserKey", $this->getCardUserKey())
            ->add("posOrderId", $this->getPosOrderId())
            ->getObject();
    }

    public function toPKIRequestString()
    {
        return RequestStringBuilder::newInstance()
            ->appendSuper(parent::toPKIRequestString())
                   ->appendPrice("price", $this->getPrice())
                   ->appendPrice("paidPrice", $this->getPaidPrice())
                   ->append("basketId", $this->getBasketId())
                   ->append("paymentGroup", $this->getPaymentGroup())
                   ->append("paymentSource", $this->getPaymentSource())
                   ->appendArray("buyer", $this->getBuyer())
                   ->appendArray("shippingAddress", $this->getShippingAddress())
                   ->appendArray("billingAddress", $this->getBillingAddress())
                   ->appendArray("basketItems", $this->getBasketItems())
                   ->append("callbackUrl", $this->getCallbackUrl())
                   ->append("forceThreeDS", $this->getForceThreeDS())
                   ->append("cardUserKey", $this->getCardUserKey())
                   ->append("posOrderId", $this->getPosOrderId())
            ->getRequestString();
    }
}