<?php

namespace Ghostmeme\Client;

use GuzzleHttp\Client;

class MemeClient extends Client
{
    public function __construct(string $apiKey)
    {
        parent::__construct([
            'base_uri' => 'https://ghostmeme.api.hscc.bdpa.org/v',
            'headers' => [
                'key' => $apiKey,
            ]
        ]);
    }
}
