<?php namespace Payer\Api\OrderService;

  use Payer\Api\SoapRequestInterface;
  use SoapClient;

  class DenyOrderRequest implements SoapRequestInterface {

    private $client;

    public function __construct($url, array $options) {
      $this->client = new SoapClient ($url, $options);
    }

    public function create($data) {
      return $this->client->denyOrder([
        'session' => $data['session'] ,
        'denyOrder' => $data['request']
        ])->return;
    }

  }