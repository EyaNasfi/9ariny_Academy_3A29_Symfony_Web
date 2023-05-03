<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'aziz'
) or die(mysqli_erro($mysqli));

?>