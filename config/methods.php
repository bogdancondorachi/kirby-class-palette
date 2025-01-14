<?php

use Kirby\Data\Yaml;
use Kirby\Exception\InvalidArgumentException;

return [
  'toSwatch' => function ($field, string|null $option = null) {
    if (!$field->value) {
      return null;
    }

    if (!in_array($option, ['hex', 'class', 'title'], true)) {
      throw new InvalidArgumentException('"hex", "class" or "title" required for option argument');
    }

    $data = Yaml::decode($field->value);

    return $data[$option] ?? null;
  }
];
