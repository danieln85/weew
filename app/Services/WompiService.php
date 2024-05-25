<?php

namespace App\Services;

use GuzzleHttp\Client;

class WompiService
{
    protected $client;
    protected $publicKey;
    protected $privateKey;
    protected $mode;

    public function __construct()
    {
        $this->client = new Client();
        $this->publicKey = config('services.wompi.public_key');
        $this->privateKey = config('services.wompi.private_key');
        $this->mode = config('services.wompi.mode');
    }

    public function createTransaction($amount, $currency, $customerEmail, $reference)
    {
        $url = $this->mode === 'test'
            ? 'https://sandbox.wompi.co/v1/transactions'
            : 'https://production.wompi.co/v1/transactions';

        $response = $this->client->post($url, [
            'json' => [
                'amount_in_cents' => $amount * 100, // Wompi espera la cantidad en centavos
                'currency' => $currency,
                'customer_email' => $customerEmail,
                'payment_method' => [
                    'type' => 'CARD',
                    'installments' => 1,
                ],
                'reference' => $reference,
                'redirect_url' => route('wompi.callback'),
            ],
            'headers' => [
                'Authorization' => 'Bearer ' . $this->publicKey,
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
