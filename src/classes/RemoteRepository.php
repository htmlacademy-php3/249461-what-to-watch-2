<?php

namespace WhatToWatch\classes;

class RemoteRepository
{

    protected $client;
    public function __construct(HttpClient $httpClient)
    {
        $this->client = $httpClient;
    }
    public function getMovie($imdbId)
    {
        $response = $this->client->sendRequest($imdbId);
        return json_decode($response, true);
    }
}