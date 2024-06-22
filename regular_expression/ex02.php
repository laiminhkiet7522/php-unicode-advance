<?php
// $subject = 'minhkiet.web7522@gmail.com';
// $subject = 'MINHKIET';
$subject = 'minhkiet_web@gmail.com';

$pattern = '/[a-zA-Z0-9_@]/';

$check = preg_match($pattern, $subject);

var_dump($check);
