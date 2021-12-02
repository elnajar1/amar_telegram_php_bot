<?php

/**
 * This file contains all the configuration options for the PHP Telegram Bot.
 *
 * It is based on the configuration array of the PHP Telegram Bot Manager project.
 *
 * Simply adjust all the values that you need and extend where necessary.
 *
 */

return [
  
    // Add you bot's API key (that you get from BotFather )
    'api_key'      => '1908306081:AAH2-HY34mPVAJZPAlyS_Y_YFUB14ebqbBc',

    // When using the getUpdates method, this can be commented out
    'webhook'      => [
        //  'url' => 'https://4e6008339667.ngrok.io/elbot/hook.php',
        'url' => 'https://ola-gam3a.com/elbot/hook.php',
        // Use self-signed certificate
        // 'certificate'     => __DIR__ . '/path/to/your/certificate.crt',
        // Limit maximum number of connections
        // 'max_connections' => 5,
    ],
    
];
