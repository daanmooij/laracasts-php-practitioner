<?php

$person = [
	'age' => 26,
	'hair' => 'brown',
	'career' => 'software developer'
];

$person['name'] = 'Daan';

unset($person['age']);

require 'index.view.php';