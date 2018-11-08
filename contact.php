<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<title>Alpine Coffee</title>
    <!--css link-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!--css link-->

</head>

<body>

  <header>
        <div class="container">
            <div class="mobile_nav">
                <a href="index.html" class="logo">
                    <img src="images/logo.png" alt="">
                </a>
                <input class="menu-btn" type="checkbox" id="menu-btn" />
                <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
                <ul class="menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="price.html">Price</a></li>
                    <li><a href="product.html">Product</a></li>
                    <li><a href="quality.html">Quality</a></li>
                    <li><a href="saving_calculator.html">Savings Calculator</a></li>
                    <li><a href="guest_experience.html">Guest Experience</a></li>
                    <li><a class="active" href="#">Contact Us</a></li>
                </ul>
                <a href="contact.html" class="free_sample_button">Free Sample Today</a>
            </div>
        </div>
    </header>

    <section class="contact_section">
        <div class="container">
            <div class="contact_section_area">

                    <div id="results">
                   
                    </form>
                    </div>
                        <?php
                            $showDivFlag=TRUE;
                            $to  = 'adamarthursand@gmail.com'; 
                            $subject = 'Request for free sample ';
                            $message = 'we need free samples of product';
                            $headers = 'From:  $_POST["email"]' . "\r\n" .
                                    'Reply-To:  $_POST["email"]' . "\r\n" .
                                    'X-Mailer: PHP/' . phpversion();
                            $send = mail($to, $subject, $message, $headers);
                            if($send)
                            {
                        ?>
                            <p>Your mail has been successfully sent</p>
                            <button style="background-color: #5f2d10;text-decoration: none;border-color: #5f2d10;"><a style=" color: white; text-decoration: none;" href="index.html">Back to Home</a></button>
                            <button style="background-color: #5f2d10;text-decoration: none;border-color: #5f2d10;color: white;"><a style=" color: white; text-decoration: none;" href="contact.html">Back to Contact Us</a></button>
                        <?php
                            }
                        else{
                          ?>
                            <p>Your mail could not be sent. There are some errors</p>
                            <button style="background-color: #5f2d10;text-decoration: none;border-color: #5f2d10;color: white;"><a style=" color: white; text-decoration: none;" href="index.html">Back to Home</a></button>
                            <button style="background-color: #5f2d10;text-decoration: none;border-color: #5f2d10;color: white;"><a style=" color: white; text-decoration: none;" href="contact.html">Back to Contact Us</a></button>
                         <?php
                            }
					    ?>
   


                	
            </div>
        </div>
    </section>


    

    <footer>
        <div class="footer_top">
            <div class="container">
                <div class="col-md-2">
                    <img src="images/footer_logo.png" alt="">
                </div>
                <div class="col-md-4">
                    <h3>About Alpine Coffee</h3>
                    <p>Cut Out The Middleman and Save Up to 35% On Your in Room Coffee</p>
                </div>
                <div class="col-md-3">
                    <p class="contact_cont"><i class="fas fa-phone"></i>303-761-2500</p>
                    <p class="contact_cont"><i class="fas fa-envelope"></i> sales@AlpineCoffee.com</p>
                    <p class="contact_cont"><i class="fas fa-map-marker-alt"></i> 2860 S. Tejon St., Englewood, CO. 80110</p>
                </div>
                <div class="col-md-3">
                    <h3>Social Links</h3>
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <p>© Copyright 2018. All rights reserved by <span>inBrain</span></p>
            </div>
        </div>
    </footer>



    <!--js link-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!--js link-->
</body>

</html>
