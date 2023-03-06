<?php
return array(
    'readTimeStatus' => array(
        'title' =>('On/off'),
        'control_type' => waHtmlControl::CHECKBOX,
        'value' => 1,
    ),
    'wordQuantity' => array(
        'title' =>('Reading speed'),
        'description' => ('Enter words per minute'),
        'control_type' => waHtmlControl::INPUT,
        'value' => 250,
    ),
    'blockText' => array(
    'title' =>('Header text'),
    'description' => '',
    'control_type' => waHtmlControl::INPUT,
    'value' => ('Reading time:'),
),
);