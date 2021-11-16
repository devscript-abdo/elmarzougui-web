<?php

namespace App\Repositories\Client;

interface  ClientInterface
{

    public function getClients(array $with = null);

    public function getClient($slug, array $with = null);
}
