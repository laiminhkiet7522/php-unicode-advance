<?php
$phone = '0385623145';
$patteern = '/^0[0-9]{9}$/';
$check = preg_match($patteern, $phone);
if (!empty($check)) {
  echo 'Số điện thoại hợp lệ';
} else {
  echo 'Không là số điện thoại';
}
