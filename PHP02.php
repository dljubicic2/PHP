<?php

// konstante

$ime = 'Domagoj';

$ime = 'Pajo';

echo $ime;

// Definiranje konstante

const STATUS_PAID = 'paid';

define('STATUS_' . $PAID, 4);

echo STATUS_PAID;

// varijabilne varijable

$foo = 'bar';

$$foo = 'baz';

echo $foo, $bar;

echo $foo, $$foo; // drugi način


