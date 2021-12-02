<?php 

/**
  * In this file you write code That handles masseges and respond to them
**/

// Load all configuration options first 
/** @var array $config */
$config = require __DIR__ . '/config.php';

// Load functions
require __DIR__ . '/functions.php';

// I get this Variable from reference written at the end of functions.php file
$chat_id             = $message->chat->id;

// Test massage 
SendMessage($chat_id , " You are beautiful ");