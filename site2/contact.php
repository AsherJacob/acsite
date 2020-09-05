<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/common_style.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/f8dcdb75b7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">
    <title>MCAL | Residential Gallery</title>
</head>
<body>
    <div class="container">
        <!-- HEADER -->
        <header id="header-section" class="header">
            <!-- BANNER -->
            <div class="header-top">
                <!-- LOGO -->
                <div class="brand">
                    <a href="index.php"><img src="img/logo-4.jpeg" alt="" class="logo"></a>
                </div>
                <!-- PHONE -->
                <div class="header-phone">
                    <p>TORONTO   437-999-6225</p>
                    <p>BELEVILLE 613-813-6225</p>
                </div>

                <!-- MENU ICON -->
                <span class="material-icons menu open-slide" onclick="openSlideMenu()">menu</span>
            </div>
        </header>

        <!-- NAVBAR -->
        <section class="navbar-section">
            <div class="navbar">
                <ul class="navbar-items">
                    <li class="navbar-item"><a href="residential.php">RESIDENTIAL</a></li>
                    <li class="navbar-item"><a href="commercial.php">COMMERCIAL</a></li>
                    <li class="navbar-item">WHAT OUR CLIENT SAY</li>
                    <li class="navbar-item">CONTACT US</li>
                </ul>
            </div>
        </section>

        <!-- SIDEBAR MENU -->
        <div id="side-menu" class="side-nav">
            <span class="btn-close" onclick="closeSlideMenu()">&times;</span>
            <a href="residential.php">RESIDENTIAL</a>
            <a href="commercial.php">COMMERCIAL</a>
            <a href="#">WHAT OUR CLIENTS SAY</a>
            <a href="#">CONTACT US</a>
        </div>

        <section id="contact-section" class="contact-section">
            <div class="contact-header">
                <h2>CONTACT US</h2>
            </div>

            <div class="contact-details">
                <!-- PHONE -->
                <div class="phone-details">
                    <div class="phone-icon">
                        <span class="material-icons">local_phone</span>
                    </div>

                    <div class="phone-content">
                        <h3>Phone</h3>
                        <p>Belleville: 613 813 6225 <br> Greater Toronto Area: (437) 999-6225</p>
                    </div>
                </div>

                <!-- EMAIL -->
                <div class="email-details">
                    <div class="email-icon">
                        <span class="material-icons">email</span>
                    </div>

                    <div class="email-content">
                        <h3>Email</h3>
                        <p>mcalinc@gmail.com <br>info@mcalinc.ca </p>
                    </div>
                </div>

                <!-- ADDRESS -->
                <div class="address-details">
                    <div class="address-icon">
                        <span class="material-icons">location_on</span>
                    </div>

                    <div class="address-content">
                        <h3>Address</h3>
                        <p>250 Glen Manor Dr W<br>Toronto<br>ON M4E 2Y1</p>
                    </div>
                </div>
            </div>

            <div class="quote-map-section">
                <div class="left-quote-section">
                    <div class="request-quote">
                        <iframe name="votar" style="display:none;"></iframe>
                        <form name="quote" method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' onsubmit="formAlert()" target="votar">
                            <div class="request-quote-header">
                                <h3>GET IN TOUCH</h3>
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
                </div>

                <div class="right-map-section">
                    <div class="map-section">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2885.749254499664!2d-79.29790188510229!3d43.674184459092565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cc01556620ef%3A0xbeff99f60ae5049a!2s250%20Glen%20Manor%20Dr%20W%2C%20Toronto%2C%20ON%20M4E%202Y1%2C%20Canada!5e0!3m2!1sen!2sin!4v1595661992603!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>

        </section>
        
        <!-- form processing -->
          <?php
        // define variables and set to empty values
        $name = $phone = $email = $message = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name  = test_input($_POST["name"]);
          $phone = test_input($_POST["phone"]);
          $email = test_input($_POST["email"]);
          $message = test_input($_POST["message"]);
          
          $rec1 = "mcalinc@gmail.com";
          $rec2 = "info@mcalinc.ca";
          $rec3 = "asherjcb@gmail.com";
          $rec4 = "asherjacob@live.in";
          $rec5 = "asherjac@protonmail.com";
          
          
          
          $from = "quotes@mcalinc.ca";
          $email_subject = "New Quotation for MCAL" ;
          $email_body = "You have received a new message\n".
                        "Here are the details:\n\nName: $name \nEmail: $email\nPhone: $phone \n\nMessage\n$message";
                        
          $headers= "From: $from\n";
          $headers.= "CC: $rec2, $rec3\n";
    
          mail($rec1,$email_subject,$email_body,$headers);
           
          ob_clean();
          exit();
          
        }
        
          function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
         }
        ?>
        
        
        


        <!-- FOOTER -->
        <footer id="footer-section" class="footer-section">
            <div class="footer-content">
                <div class="call-button">
                    <input type="button" onClick="window.location.href='tel:437-999-6225'" value="CALL NOW">
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

    <!-- SIDEBAR MENU JAVASCRIPT -->
    <script>
        function openSlideMenu(){
            document.getElementById('side-menu').style.marginLeft='0px';
        }
        function closeSlideMenu(){
            document.getElementById('side-menu').style.marginLeft='-250px';
        }
        function formAlert(){
            var x = document.forms["quote"]["name"];
            var y = document.forms["quote"]["email"];
            var z = document.forms["quote"]["message"];
        
            if(x != "" && z != "" && y != ""){
                Swal.fire({
                    icon: 'success',
                    title: 'Thank You!',
                    text: 'We will get back to you shortly'
                });
            }
        
            const sleep = (milliseconds) => {
                return new Promise(resolve => setTimeout(resolve, milliseconds))
            };
            
            sleep(1000).then(() => document.getElementById("myForm").reset());
                
        }
    </script>
</body>
</html>