<?php

$config = [
  "dirs" => [
    // Add the directory where the Enum class file is located
    "src",
  ],
  "convert_functions" => [
      "displayName" => function (object $enum) {
          if (method_exists($enum, 'toDisplay')) {
              return $enum->toDisplay();
          }
          return null;
      },
  ],
];

return $config;
