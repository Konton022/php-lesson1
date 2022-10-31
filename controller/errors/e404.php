<?php

header('HTTP/1.1 404 Not Found');
$pageTitle = 'error 404';
$pageContent = renderTemplate('errors/v-404');