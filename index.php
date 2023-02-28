<?php

require_once ('vendor/autoload.php');

use WhatToWatch\classes\GetFilmService;
use WhatToWatch\classes\RemoteFilmRepository;

$repository = new RemoteFilmRepository();
$film = new GetFilmService($repository);

echo '<pre>';
print_r($film->getFilm('tt0944947'));
echo '</pre>';