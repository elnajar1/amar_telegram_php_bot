<?php

/*
 * This file is used to unset / delete the webhook.
 */

// Load all configuration options first 
/** @var array $config */
$config = require __DIR__ . '/config.php';

// Load functions
require __DIR__ . '/functions.php';

$web = DeleteWebhook();

print_r($web);
