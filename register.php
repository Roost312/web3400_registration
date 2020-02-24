<?php

require 'dbcon.php';

if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
    die ('Please complete the registration form!');
}

if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
    die ('Please complete the registration form');
}

//account activation


//field validations
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    die ('Email is not valid');
}

if (preg_match('/[A-Za-z0-9]+/', $_POST['username']) == 0){
    die ('Username is not valid');
}

if (strlen($_POST['password']) >= 20 || strlen($_POST['password']) <= 8) {
    die ('Password must be between 8 and 20 characters long!');
}

//check if account exists
if($sql = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
    $sql->bind_param('s', $_POST['username']);
    $sql->execute();
    $sql->store_result();

    if($sql->num_rows > 0) {
        //username exists
        echo "Username already exists";
    } else {
        //insert a new record
        if($stmt = $con->prepare('INSERT INTO accounts (username, password, email, activation_code) VALUES (?,?,?, ?)')) {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $uniqid = uniqid();
            $stmt->bind_param('ssss', $_POST['username'], $password, $_POST['email'], $uniqid);
            $stmt->execute();
            echo 'You have successfully registered, you can now login!';

            //Create email content
            $from = 'gilbertjessen@mail.weber.edu';
            $subject = 'Account Activation Required';
            $headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=UTF-8' . "\r\n";
            $activate_link = 'http://icarus.cs.weber.edu/~jg73226/web3400/project2/activate.php?email=' . $_POST['email'] . '&code=' . $uniqid;
            $message = '<p>Please click the following link to activate your account: <a href="' . $activate_link. '">' . $activate_link . '</a></p>';

            //send email function
            mail($_POST['email'], $subject, $message, $headers);

            echo ' Please check your email to activate your account';

        } else {
            echo "Could not prepare statement";
        }
    }

    $sql->close();

} else {
    //something went wrong with sql statement
    echo "Could not prepare statement!";
}

$con->close();

?>