<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'W01173226';
$DATABASE_PASS = 'Jessencs!';
$DATABASE_NAME = 'W01173226';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_error()) {
  die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (isset($_GET['email'], $_GET['code'])) {
  if ($stmt = $con->prepare('SELECT * FROM accounts WHERE email = ? AND activation_code = ?')) {
    $stmt->bind_param('ss', $_GET['email'], $_GET['code']);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
      if ($stmt = $con->prepare('UPDATE accounts SET activation_code = ? WHERE email=? AND activation_code = ?')) {
        $newcode = 'activated';
        $stmt->bind_param('sss', $newcode,  $_GET['email'], $_GET['code']);
        $stmt->execute();
        echo 'Your account is now activated! You can now login<br><a href="index.html">Login</a>';
      }
    }
  }
} else {
  echo "the account is already active or does not exist";
}

?>