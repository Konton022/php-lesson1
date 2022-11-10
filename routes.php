<?php

return [
    [
        'test' => '/^$/',
        'controller' => 'calls/all',
       
    ],
    [
        'test' => '/^add\/?$/',
        'controller' => 'calls/add',
        
    ],
    [
        'test' => '/^contacts\/?$/',
        'controller' => 'contacts/contacts',
        
    ],
    [
        'test' => '/^edit\/([1-9]+\d*)\/?$/',
        'controller' => 'calls/edit',
        'params' => ['id' => 1]
    ],
    [
        'test' => '/^call\/([1-9]+\d*)\/?$/',
        'controller' => 'calls/call',
        'params' => ['id' => 1]
    ],
    [
        'test' => '/^login\/?$/',
        'controller' => 'auth/login',
    ],
    [
        'test' => '/^logup\/?$/',
        'controller' => 'auth/logup',
    ],
    [
        'test' => '/^logout\/?$/',
        'controller' => 'auth/logout',
    ]
];