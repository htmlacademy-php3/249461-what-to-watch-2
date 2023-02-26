<?php

require_once ('vendor/autoload.php');

use WhatToWatch\classes\RemoteRepository;
use WhatToWatch\classes\HttpClient;

$httpClient = new HttpClient();
$repository = new RemoteRepository($httpClient);

/*echo '<pre>';
print_r($repository->getMovie('tt0944947'));
echo '</pre>';*/