<?php
include "includes/common.php"
?>
<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Us | Life Style Store</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>

<body style="padding-top: 50px;">
    
    <!-- Header -->
    <?php
    include 'includes/header.php';
    ?>
    <!--Header end-->
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <h3>Live Support</h3>
                <p style="text-align: justify">
                    The Contact Us page is one of the most visited pages on any website. That seems like a compelling enough reason to redesign your Contacts section to better meet your users' needs and grab their attention. While working on this post, I came across hundreds of beautifully made websites,yet their Contact Us pages were, for the most part, disappointing. Most Contact pages are made for show, with just an email address, phone, location, and some short boring text a plain background. Reason to redesign your Contacts section to better meet your users' needs and grab their attention. While working on this post, I came across hundreds
                </p>
            </div>
            <div class="col-sm-2">
                <img align="right" src="img/contact.png" alt="contact us">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-9">
                <div class="contact-form">
                    <h3>CONTACT US</h3>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="Contact_us_script.php">
                            <div class="form-group col-sm-9">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name" >
                            </div>
                            <div class="form-group col-sm-9">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                            </div>
                            <div class="form-group col-sm-9">
                                <textarea name="message" id="message" required="required" class="form-control" rows="7" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group col-sm-7">
                                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </form>
                </div>
            </div>   		
            <div class="col-sm-3 col-sm-pull-2">
                <div class="contact-info">
                    <br><br>
                    <h4 >COMPANY INFORMATION:</h4>
                    <address>
                                 <p>Rosera, Bihar, India - 848210</p>
                                 <p>phone: +91 7991165920</p>
                                 <p>email: avinash.haina@gmail.com</p>
                    </address>
                </div>
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
