<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/f8dcdb75b7.js" crossorigin="anonymous"></script>
    <meta name="google-site-verification" content="1ycafgeCfbR5a9MJXxRrCfNMb5zGdfM34FX0n-OXUXo" />
    <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">
    <title>MCAL | Home</title>
</head>
<body>
    <div class="container">
        <header id="header-section" class="header">
            <!-- BANNER -->
            <div class="header-top">
                <!-- LOGO -->
                <div class="brand">
                    <img src="img/logo-4.jpeg" alt="" class="logo">
                </div>
                <!-- PHONE -->
                <div class="header-phone">
                    <h3>TORONTO   437-999-6225</h3>
                    <h3>BELEVILLE 613-999-6225</h3>
                </div>

                <!-- MENU ICON -->
                <span class="material-icons menu open-slide" onclick="openSlideMenu()">menu</span>
            </div>
        </header>

        <!-- SIDEBAR MENU -->
        <div id="side-menu" class="side-nav">
            <span class="btn-close" onclick="closeSlideMenu()">&times;</span>
            <a href="residential.html">RESIDENTIAL</a>
            <a href="commercial.html">COMMERCIAL</a>
            <a href="#">WHAT OUR CLIENTS SAY</a>
            <a href="#">CONTACT US</a>
        </div>
       
        <!-- SLIDESHOW -->
        <section id="slider" class="showcase">
            <div class="slider-wrapper">
                <div class="slider">
                    <div class="slide current">
                        <!-- <div class="overlay"></div> -->
                        <div class="slide-content">
                            <p>YOUR HVAC EXPERTS</p>
                            <input type="button" onClick="window.location.href='tel:8921280776'" value="CALL NOW">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="navbar-section">
            <div class="navbar">
                <ul class="navbar-items">
                    <li class="navbar-item"><a href="residential.html">RESIDENTIAL</a></li>
                    <li class="navbar-item"><a href="commercial.html">COMMERCIAL</a></li>
                    <li class="navbar-item">WHAT OUR CLIENT SAY</li>
                    <li class="navbar-item">CONTACT US</li>
                </ul>
            </div>
        </section>
        
      

        <!-- ABOUT -->
        <section id="about-section" class="about-section">
            <div class="about">
                <div class="about-header">
                    <h2>EXPERT KNOWLEDGE, COMMITMENT TO SERVICE</h2>
                </div>
                <div class="about-content">
                    <p>MCal provides more than 35 years’ experience and expertise in HVAC for residential and commercial clients. We are experts in boilers and geothermal systems. We work closely with our clients to understand their unique needs and offer customized solutions, with their budget in mind. We believe in old-fashioned customer service and workmanship, combined with an in-depth understanding of the latest technology. MCal services the GTA and the Belleville region.</p>   
                </div>
            </div>

            <div class="request-quote">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
                    <div class="request-quote-header">
                        <h2>GET IN TOUCH</h2>
                    </div>

                    <div class="request-quote-fields">
                        <!-- NAME -->
                        <div class="name-field request-field">
                            <label>Name : *</label>
                            <input type="text" name="name" id="name" class="request-input" required >
                        </div>

                        <!-- PHONE -->
                        <div class="phone-number-field request-field">
                            <label>Phone : *</label>
                            <input type="text" name="phone" id="phone" class="request-input" >
                        </div>

                        <!-- EMAIL -->
                        <div class="email-field request-field">
                            <label>Email : *</label>
                            <input type="email" name="email" id="email" class="request-input" required>
                        </div>

                        <!-- COMMENTS -->
                        <div class="comments-field request-field">
                            <label>Comments : *</label>
                            <textarea name="message" id="message" cols="30" rows="4" class="request-input" required></textarea>
                        </div>

                        <!-- SUBMIT -->
                        <div class="submit">
                            <input type="submit" value="SEND"/>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <!-- form process -->
        <?php
        // define variables and set to empty values
        $fname = $lname = $phone = $email = $message = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $fname = test_input($_POST["fname"]);
          $lname = test_input($_POST["lname"]);
          $phone = test_input($_POST["phone"]);
          $email = test_input($_POST["email"]);
          $message = test_input($_POST["message"]);
          
          $to = "asherjcb@gmail.com";
          $from = "quotes@mcalinc.ca";
          $email_subject = "New Quotation" ;
          $email_body = "You have received a new message ".
                        " Here are the details:\n First Name: $fname \n Email: $email_address\n Message \n $message";
          $headers= "From: $from\n";
          $headers.= "Reply-To: $to";
          mail($to,$email_subject,$email_body,$headers);
        //   Swal.fire({
        //     icon: 'success',
        //     title: 'Success',
        //     text: 'We will get back to you shortly',
            
        //   });
          
        }
        
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        ?>

        <!-- SERVICES SECTION -->
        <section class="services-section">
            <div class="residential-box">
                <div class="residential-box-image">
                    <img src="img/residential-box-image-2.png" alt="" class="box-image-1">
                </div>
                <div class="residential-box-about">
                    <div class="residential-box-about-header">
                        <h3>RESIDENTIAL</h3>
                    </div>

                    <div class="residential-box-about-content">
                        <p>From boilers to air quality
                            control to geothermal
                            systems, we keep our
                            clients’ homes safe and
                            comfortable, year-round</p>
                    </div>

                    <div class="residential-box-about-button">
                        <input type="button" value="LEARN MORE">
                    </div>
                </div>
            </div>

            <div class="commercial-box">
                <div class="commercial-box-image">
                    <img src="img/commercial-box-image-2.png" alt="" class="box-image-2">
                </div>

                <div class="commercial-box-about">
                    <div class="commercial-box-about-header">
                        <h3>COMMERCIAL</h3>
                    </div>
                    <div class="commercial-box-about-content">
                        <p>We keep businesses running
                            with custom solutions for
                            boilers, air quality control,
                            chillers, and humidity and
                            temperature contro</p>
                    </div>
                    <div class="commercial-box-about-button">
                        <input type="button" value="LEARN MORE">
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer id="footer-section" class="footer-section">
            <div class="footer-content">
                <div class="call-button">
                    <input type="button" value="CALL NOW">
                </div>

                <div class="copyright">
                    <p>© 2020 MCal Inc. All rights reserved. | 250 Glen Manor Drive West, Toronto, ON M4E2Y1</p>
                </div>
            </div>
            <div class="icons-container">
                <i class="fab fa-facebook"></i>
                <!-- <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
                <i class="fab fa-twitter"></i>                
                <i class="fab fa-linkedin-in"></i> -->
            </div>
        </footer>
    </div>

    <!-- EXTERNAL JAVASCRIPT -->
    <script src="js/main.js"></script>
    <script src="sweetalert2/dist/sweetalert2.min.js"></script>

    <!-- SIDEBAR MENU JAVASCRIPT -->
    <script>
        function openSlideMenu(){
            document.getElementById('side-menu').style.marginLeft='0px';
        }
        function closeSlideMenu(){
            document.getElementById('side-menu').style.marginLeft='-250px';
        }
    </script>
</body>
</html>