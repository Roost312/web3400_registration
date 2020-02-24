<?php
//Aaron Whipple 2-24-20 database connection
require 'dbcon.php';

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