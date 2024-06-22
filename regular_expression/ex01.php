<?php
$phone = '0385623145';
$patteern = '/^0[0-9]{9}$/';

$check = preg_match($patteern, $phone, $matches);

var_dump($check);

echo '<pre>';
print_r($matches);
echo '</pre>';
