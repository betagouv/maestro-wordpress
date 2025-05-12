<?php

$expectedToken = getenv('PHPINFO_TOKEN') ?: 'secret';

if (!isset($_GET['token']) || $_GET['token'] !== $expectedToken) {
    http_response_code(403);
    echo "Accès refusé.";
    exit;
}

phpinfo();
