        <!-- form processing -->
        <?php
        // define variables and set to empty values
        $name = $phone = $email = $message = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name  = test_input($_POST["name"]);
          $phone = test_input($_POST["phone"]);
          $email = test_input($_POST["email"]);
          $message = test_input($_POST["message"]);
          
          $to = "asherjcb@gmail.com";
          $from = "quotes@mcalinc.ca";
          $email_subject = "New Quotation" ;
          $email_body = "You have received a new message ".
                        " Here are the details:\nName: $name \nEmail: $email\nPhone: $phone \nMessage \n $message";
          $headers= "From: $from\n";
          $headers.= "Reply-To: $to";
          mail($to,$email_subject,$email_body,$headers);
          ob_clean();
          header('Location: https://www.mcalinc.ca');
          exit();
          
        }
        
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        ?>