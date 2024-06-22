<?php
/*
  * Kiểm tra mật khẩu có hợp lệ hay không
  - Bắt đầu bằng chữ cái thường
  - Độ dài >= 6
  - Kết thúc bằng số
*/

$password = 'abc123';

// $pattern = '/^[a-z][0-9]$/';

$pattern1 = '/^[a-z]/';

$pattern2 = '/[0-9]$/';

if (strlen($password) >= 6 && preg_match($pattern1, $password) && preg_match($pattern2, $password)) {
  echo 'Mật khẩu hợp lệ';
} else {
  echo 'Mật khẩu không hợp lệ';
}
