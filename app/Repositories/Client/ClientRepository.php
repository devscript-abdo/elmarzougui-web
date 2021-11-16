<?php

namespace App\Repositories\Client;

use App\Models\Client;

class ClientRepository implements ClientInterface
{

    private $client;

    public function __construct(Client $client)
    {

        $this->client = $client;
    }

    public function getClients(array $with = null)
    {
        if (isset($with) && is_array($with)) {

            return $this->client->with($with)->get();
        }

        return $this->client->all();
    }

    public function getClient($slug, array $with = null)
    {
        if (isset($with) && is_array($with)) {
            return $this->client->whereSlug($slug)->with($with)->firstOrFail();
        }
        return $this->client->whereSlug($slug)->firstOrFail();
    }
}
