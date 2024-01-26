<?php
function generatePassword($length) {
  $char = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@';
  return substr(str_shuffle($char), 0, $length);
}
?>