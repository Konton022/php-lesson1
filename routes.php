<?php

return [
    [
        'test' => '/^$/',
        'controller' => 'calls/index',
        'params' => []
    ],
    [
        'test' => '/^add$/',
        'controller' => 'calls/add',
        'params' => []
    ],
    [
        'test' => '/^contacts$/',
        'controller' => 'contacts/contacts',
        'params' => []
    ],
    [
        'test' => '/^edit\/([1-9]+\d*)$/',
        'controller' => 'calls/edit',
        'params' => ['id' => 1]
    ],
    [
        'test' => '/^call\/([1-9]+\d*)$/',
        'controller' => 'calls/call',
        'params' => ['id' => 1]
    ],
];