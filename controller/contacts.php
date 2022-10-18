<?php

$pageTitle = 'Contacts';
$left = renderTemplate('v_contacts');
$content = renderTemplate('v_left');

$pageContent = renderTemplate('base/v_con2col',
    ['left'=> $left, 'content'=>$content]
);

