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

    <title>MCAL | Commercial</title>
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
                    <p>BELEVILLE 613-999-6225</p>
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
            <a href="commericial.php">COMMERCIAL</a>
            <a href="#">WHAT OUR CLIENTS SAY</a>
            <a href="#">CONTACT US</a>
        </div>
        
        <!-- COMMERCIAL SECTION -->
        <section class="residential-section">
           <div class="residential-intro">
               <div class="residential-call-now">
                    <div class="residential-call-now-image">
                        <img src="img/residential-box-image-2.png" alt="">
                    </div>
                    <div class="commercial-call-now-button">
                        <input type="button" onClick="window.location.href='tel:437-999-6225'" value="CALL NOW">
                        <!-- <button><a href="tel:8921280776"> NOW</a></button> -->
                    </div>
                    
               </div>
               <div class="residential-about">
                    <div class="commercial-about-header">
                        <h3>COMMERCIAL</h3>
                    </div>
                    <div class="residential-about-content">
                        <p>We have decades of experice keeping businesses running efficiently and comfortably. We work closely with engineers and their plans to develop the best solution to fit our customer's requirements and budget. We provide quotes you can understand, and walk you through our solutions so you undertand our recommendations. We take pride in well-crafted installation, thorough maintenance and reliable servicing. </p>
                    </div>
               </div>
           </div>

           <div class="residential-body">
                <div class="residential-services">
                    <div class="commercial-services-header">
                        <h2>WE OFFER :</h2>
                    </div>

                    <div class="residential-service-list">
                        <div class="residential-service">
                            <p><span class="residential-service-header">Air quality control.</span>We install UVC air purification systems within rooftop units and duct systems, designed to provide a healthier indoor environment by eliminating indoor pollutants such as viruses, mold and fungi. We also install stationery and portable HEPA filters. </p>
                        </div>
                        <div class="residential-service">
                            <p><span class="residential-service-header">Boilers.</span>We are the boiler experts. We offer expertise in heating and cooling hydronics systems, stand-alone boilers, tankless water heaters and wall-hung combi systems. We hold Gas Fitter 1 licences, and are able to look atfer your highest BTU equipment. </p>
                        </div>
                        <div class="residential-service">
                            <p><span class="residential-service-header">Rooftop units.</span>We install and service rooftop units of all makes, models and tonages. </p>
                        </div>
                        <div class="residential-service">
                            <p><span class="residential-service-header">Humidity and temperature control.</span>We have expertise in providing temperature and humidity controls in factories and businesses where it is critical, such as food production lines. </p>
                        </div>
                        <div class="residential-service">
                            <p><span class="residential-service-header">Chillers.</span>We are experts in reciprocating chillers for process and comfort cooling, in any size plant. </p>
                        </div>
                    </div>
                </div>

                <div class="commercial-big-buttons">
                    <div class="book-servicing-button" id="request-button" style="cursor: pointer;">
                        <button>BOOK YOUR SEASONAL SERVICING</button>
                    </div>
                    
                    <div class="see-gallery-button">
                        <button><a href="commercial-gallery.html">SEE OUR GALLERY</a></button>
                    </div>
                </div>
           </div>

           <div class="sponsors-section">
               <div class="sponsor">
                   <img src="img/navien.png" alt="">
               </div>
               <div class="sponsor">
                   <img src="img/viessmann.png" alt="">
               </div>
               <div class="sponsor">
                   <img src="img/rinnai.png" alt="">
               </div>
               <div class="sponsor">
                   <img src="img/keeprite.png" alt="">
               </div>
               <div class="sponsor">
                   <img src="img/fujitsu.png" alt="">
               </div>
           </div>
        </section>

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

        <!-- REQUEST A QUOTE -->
        <section class="request-quote-section" id="request-modal">
                <div class="overlay2"></div>
                <div class="close-btn-section">
                    <span class="close-btn" id="close-btn">&times;</span>
                </div>
                <div class="request-form">
                    <div class="request-quote">
                        <iframe name="votar" style="display:none;"></iframe>
                        <form name="quote" id="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="formAlert()" target="votar">
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
                                    <label>Phone :</label>
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
                                    <input type="submit" value="SEND" />
                                </div>
                            </div>
                        </form>
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
          $from = "quotes@mcalinc.ca";
          $email_subject = "New Quotation for MCAL" ;
          $email_body = "You have received a new message\n".
                        "Here are the details:\n\nName: $name \nEmail: $email\nPhone: $phone \n\nMessage\n$message";
          $headers= "From: $from\n";
          $headers.= "CC: $rec2,$rec3\n";
          $headers.= "Reply-To: $to";
          mail($rec1,$email_subject,$email_body,$headers);
        //   mail($rec2,$email_subject,$email_body,$headers);          
        //   ob_clean();
        //   exit();
          
        }
        
          function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
         }
        ?>
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
        
        function formAlert(){
            var x = document.forms["quote"]["name"];
            var y = document.forms["quote"]["email"];
            var z = document.forms["quote"]["message"];
        
            if(x != "" && z != "" && y != ""){
                document.getElementById('request-modal').style.display = "none";
                Swal.fire({
                    icon: 'success',
                    title: 'Thank You!',
                    text: 'We will get back to you shortly'
                });
            }
            
            document.getElementById("myForm").reset();
                
        }

    </script>
</body>
</html>
