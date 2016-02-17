<?php

namespace Iyzipay\Model;

use Iyzipay\HttpClient;
use Iyzipay\IyzipayResource;
use Iyzipay\JsonBuilder;
use Iyzipay\Model\Mapper\ConnectCancelMapper;
use Iyzipay\Options;
use Iyzipay\Request\CreateCancelRequest;

class ConnectCancel extends IyzipayResource
{
    private $paymentId;
    private $price;
    private $connnectorName;

    public static function create(CreateCancelRequest $request, Options $options) {
        $rawResult = HttpClient::create()->post($options->getBaseUrl() . "/payment/iyziconnect/cancel", parent::getHttpHeaders($request, $options), $request->toJsonString());
        return ConnectCancelMapper::create()->map(new ConnectCancel(), JsonBuilder::jsonDecode($rawResult));
    }

    public function getPaymentId()
    {
        return $this->paymentId;
    }

    public function setPaymentId($paymentId)
    {
        $this->paymentId = $paymentId;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getConnnectorName()
    {
        return $this->connnectorName;
    }

    public function setConnnectorName($connnectorName)
    {
        $this->connnectorName = $connnectorName;
    }
}