<?php

return [
    [
        'test' => '/^$/',
        'controller' => 'calls/index'
    ],
    [
        'test' => '/^add$/',
        'controller' => 'calls/add'
    ],
    [
        'test' => '/^contacts$/',
        'controller' => 'contacts/contacts'
    ],
    [
        'test' => '/^edit$/',
        'controller' => 'calls/edit'
    ],
    [
        'test' => '/^call\/([1-9]+\d*)$/',
        'controller' => 'calls/call',
        'params' => ['id' => 1]
    ],
];