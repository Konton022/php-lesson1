<?php
    $contacts =  ['phone'=> '+7495-11-22-789', 'email'=> 'order@call.ru', 'telegram'=> '@callManager', 'whatsapp'=>'@call_manager_app'];
    $pageTitle = 'Contacts';
    $pageH1 = 'Contacts';
    $pageTemplate = 'v_main2c';
    $pageContent = renderTemplate('contacts/v_main', ['contacts' => $contacts]);
    $pageLeft = renderTemplate('contacts/v_left');
