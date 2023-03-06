<?php

return array(
    'name'        => _wp('Reading time'),
    'description' => _wp('Adds an article reading time indicator'),
    'vendor'      => '667213',
    'version'     => '2023.03.01',
    'img'         => 'img/book.png',
    'frontend'    => true,
    'handlers'  => array(
        'frontend_action_post'=> 'addJSCounter',
    ),
);

