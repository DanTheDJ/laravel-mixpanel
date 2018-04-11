<?php

return [
    'mixpanel' => [
        'token' => env('MIXPANEL_TOKEN'),
        'enable-default-tracking' => true,
        'consumer' => 'socket',
        'connect-timeout' => 2,
        'timeout' => 2,
        'max_queue_size' => 10
    ]
];
