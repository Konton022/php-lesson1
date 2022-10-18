<?php

$pageTitle = 'Contacts';
$content = renderTemplate('contacts/v_main');
$left = renderTemplate('contacts/v_left');

$pageContent = renderTemplate('base/v_con2col',
    ['left'=> $left, 'content'=>$content]
);

