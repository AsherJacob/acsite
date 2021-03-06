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

    <title>MCAL | Residential</title>
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
                    <li class="navbar-item"><a href="contact.php">CONTACT US</a></li>
                </ul>
            </div>
        </section>

        <!-- SIDEBAR MENU -->
        <div id="side-menu" class="side-nav">
            <span class="btn-close" onclick="closeSlideMenu()">&times;</span>
            <a href="residential.php">RESIDENTIAL</a>
            <a href="commercial.php">COMMERCIAL</a>
            <a href="#">WHAT OUR CLIENTS SAY</a>
            <a href="contact.php">CONTACT US</a>
        </div>
        
        <!-- RESIDENTIAL SECTION -->
        <section class="residential-section">
           <div class="residential-intro">
               <div class="residential-call-now">
                    <div class="residential-call-now-image">
                        <img src="img/residential-box-image-2.png" alt="">
                    </div>
                    <div class="residential-call-now-button">
                        <input type="button" onClick="window.location.href='tel:437-999-6225'" value="CALL NOW">
                        <!-- <button><a href="tel:8921280776"> NOW</a></button> -->
                    </div>
                    
               </div>
               <div class="residential-about">
                    <div class="residential-about-header">
                        <h3>RESIDENTIAL</h3>
                    </div>
                    <div class="residential-about-content">
                        <p>We treat every home as though it is our own. We listen carefully to our
                            customer’s needs, then develop the best solution to fit their requirements
                            and budget. We provide quotes you can understand, and walk you through
                            our solutions so you undertand our recommendations. We take pride in
                            well-crafted installation and thorough maintenance and servicing.</p>
                    </div>
               </div>
           </div>

           <div class="residential-body">
                <div class="residential-services">
                    <div class="residential-services-header">
                        <h2>WE OFFER :</h2>
                    </div>

                    <div class="residential-service-list">
                        <div class="residential-service">
                            <p><span class="residential-service-header">Geothermal systems.</span>We are certified geothermal contractors and are registered with the Geothermal Coalition. We install and service all makes and models of geothermal systems.</p>
                        </div>
                        <div class="residential-service">
                            <p><span class="residential-service-header">Boilers.</span>We are the boiler experts. We offer expertise in heating and cooling hydronics systems, stand-alone boilers, tankless water heaters and wall-hung combi systems.</p>
                        </div>
                        <div class="residential-service">
                            <p><span class="residential-service-header">Air quality control.</span>We install UVC air purification systems designed to provide a healthier indoor environment for you and your family by eliminating indoor pollutants such as viruses, mold and fungi.</p>
                        </div>
                        <div class="residential-service">
                            <p><span class="residential-service-header">Ductless heat pumps.</span>A heat pump generates heat or cold by transferring heat from one place to another. In winter, it serves as a heating system, while in summer it serves as an air conditioning system. These slim units enable us to customize a solution unique to your home and are ideal for controlling the temperature in individual rooms.</p>
                        </div>
                        <div class="residential-service">
                            <p><span class="residential-service-header">Furnaces and air conditioning.</span>We have been installing and servicing furnaces and air conditioners for decades. We deal with all makes and models, and can recommend the best solution for you.</p>
                        </div>
                    </div>
                </div>

                <div class="residential-big-buttons">
                    <div class="book-servicing-button" id="request-button">
                        <button>BOOK YOUR SEASONAL SERVICING</button>
                    </div>
                    
                    <div class="see-gallery-button">
                        <button><a href="residential-gallery.html">SEE OUR GALLERY</a></button>
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
                    <span class="close-btn" id="close-btn"> &times; </span>
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
                                    <label>Phone : </label>
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

            const sleep = (milliseconds) => {
                return new Promise(resolve => setTimeout(resolve, milliseconds))
            };
            
            sleep(1000).then(() => document.getElementById("myForm").reset());  
        }
    </script>
</body>
</html>
