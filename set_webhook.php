<?php 

/**
  * by this file you can set webhook addresses
**/

$config = require __DIR__ . '/config.php';

// Load functions
require __DIR__ . '/functions.php';

$web = SetWebhook($config['webhook']['url']);

print_r($web);
