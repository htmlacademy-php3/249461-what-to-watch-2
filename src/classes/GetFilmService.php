<?php

namespace WhatToWatch\classes;

class GetFilmService
{
    protected $repository;

    public function __construct(FilmsRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function getFilm($imdbId)
    {
        $response = $this->repository->sendRequest($imdbId);
        return json_decode($response, true);
    }
}