<?php

require __DIR__ . '/composer/vendor/autoload.php';

use Faker\Factory;

$faker = Factory::create();

echo $faker->name . "<br />";
echo $faker->address . "<br />";
