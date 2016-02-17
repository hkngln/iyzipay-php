<?php

namespace Iyzipay\Request;

use Iyzipay\JsonBuilder;
use Iyzipay\Request;
use Iyzipay\RequestStringBuilder;

class CreateCrossBookingRequest extends Request
{
    private $subMerchantKey;
    private $price;
    private $reason;

    public function getSubMerchantKey()
    {
        return $this->subMerchantKey;
    }

    public function setSubMerchantKey($subMerchantKey)
    {
        $this->subMerchantKey = $subMerchantKey;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getReason()
    {
        return $this->reason;
    }

    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    public function getJsonObject()
    {
        return JsonBuilder::fromJsonObject(parent::getJsonObject())
            ->add("subMerchantKey", $this->getSubMerchantKey())
            ->addPrice("price", $this->getPrice())
            ->add("reason", $this->getReason())
            ->getObject();
    }

    public function toPKIRequestString()
    {
        return RequestStringBuilder::newInstance()
            ->appendSuper(parent::toPKIRequestString())
            ->append("subMerchantKey", $this->getSubMerchantKey())
            ->appendPrice("price", $this->getPrice())
            ->append("reason", $this->getReason())
            ->getRequestString();
    }
}