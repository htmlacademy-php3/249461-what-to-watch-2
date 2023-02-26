<?php

namespace WhatToWatch\classes;
class HttpClient
{

    private $apiKey = 'e0478a3f';
    private $baseLink = 'http://www.omdbapi.com/?i=%1$s&apikey=%2$s&plot=full&r=json';

    private function prepareRequest($imdbId) {
        return sprintf($this->baseLink, $imdbId, $this->apiKey);
    }

    public function sendRequest($imdbId)
    {
        return file_get_contents($this->prepareRequest($imdbId));
    }
}