<?php
    require("includes/common.php");

    $name       = @trim(stripslashes($_POST['name']));
    $email      = @trim(stripslashes($_POST['email']));
    $message    = @trim(stripslashes($_POST['message']));

    $email_from = $email;
    $email_to = 'avinash.haina@gmail.com';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 align="center">Success! Thank you for contact us. As early as possible  we will contact you.</h3><hr>
                    <p align="center">Click <a href="index.php">here</a> to redirect to Home page.</p>
                </div>
            </div>
        </div>
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
    </body>
</html>
