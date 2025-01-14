<?php

Kirby::plugin('bogdancondorachi/colour-swatch-field', [
  'fields' => [
    'swatch' => [
      'props' => require_once __DIR__ . '/config/props.php',
    ]
  ],
  'fieldMethods' => require_once __DIR__ . '/config/methods.php',
]);
