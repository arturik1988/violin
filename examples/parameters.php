<?php

require '../vendor/autoload.php';

use Violin\Violin;

$v = new Violin;

$v->addFieldMessages([
    'age' => [
        'max' => '{field} is {input}, but cannot be more than {value}'
    ]
]);

$v->validate([
    'age' => 101
], [
    'age' => 'max(100)'
]);

if($v->valid()) {
    echo 'Valid!';
} else {
    echo '<pre>', var_dump($v->messages()->all()), '</pre>';
}
