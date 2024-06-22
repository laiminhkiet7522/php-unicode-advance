<?php
$subject = '123minhkiet@gmail.com';

// $pattern = '/[a-z]{3,5}/';
// $pattern = '/[a-z]{5,}/';
// $pattern = '/[a-z]{5}/';
$pattern = '/[a-z]{1,5}/';

$check = preg_match($pattern, $subject);

var_dump($check);
