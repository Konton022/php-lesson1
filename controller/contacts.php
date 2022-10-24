<?php
$contacts =  ['phone'=> '+7495-11-22-789', 'email'=> 'order@call.ru', 'telegram'=> '@callManager', 'whatsapp'=>'@call_manager_app'];
$pageTitle = 'Contacts';
$content = renderTemplate('contacts/v_main', ['contacts' => $contacts]);
$left = renderTemplate('contacts/v_left');

$pageContent = renderTemplate('base/v_con2col',
    ['left'=> $left, 'content'=>$content]
);

