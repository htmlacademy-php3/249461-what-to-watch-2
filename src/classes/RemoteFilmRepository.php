<?php

namespace WhatToWatch\classes;

class RemoteFilmRepository implements FilmsRepositoryInterface
{
    protected $apiKey = 'e0478a3f';
    protected $baseLink = 'http://www.omdbapi.com/?i=%1$s&apikey=%2$s&plot=full&r=json';

    public function prepareRequest($imdbId) {
        return sprintf($this->baseLink, $imdbId, $this->apiKey);
    }

    public function sendRequest($imdbId)
    {
        return file_get_contents($this->prepareRequest($imdbId));
    }
}