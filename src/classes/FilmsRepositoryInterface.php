<?php

namespace WhatToWatch\classes;

interface FilmsRepositoryInterface
{
    public function prepareRequest($filmId);

    public function sendRequest($filmId);
}