<?php

namespace Ghostmeme\Repository;

use GuzzleHttp\Client;
use Ghostmeme\Client\MemeClient;

class MemeRepository
{
    private $client;

    public function __construct(string $apiKey, MemeClient $client = null)
    {
        // if no client was provided, create one
        if (!$client) {
            $client = new MemeClient($apiKey);
        }

        $this->client = $client;
    }

    public function getMemes($username)
    {

        try {
            $uri = sprintf('/mail/%s', $username);
            $response = $this->client->request('GET', $uri);

            $data = json_decode($response->getBody()->getContents(), true);

            return new Meme($data);
        } catch (\Exception $e) {
            return [
                'error' => $e->getMessage(),
            ];
        }
    }
}
