<html>
  <head>
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="assets/stylesheets/stylesheet.css" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  </head>
  <body id='mail_page'>
    <div style='text-align:center;'>
    <p id='mail_message' class-"center">
        <?php
            // if (isset($_POST['message']) and isset($_POST['email'])) {
            // if((isset($_POST['message']) and $_POST['message'] != "") and (isset($_POST['email']) and $_POST['email'] != "")  {
            if((isset($_POST['message']) && $_POST['message'] != "") && (isset($_POST['email']) && $_POST['email'] != ""))  {

                $email_to = 'vervebowls@gmail.com';
                $email_from = 'mailer@vervebowls.com';
                $subject = "Vervebowls.com form sumission from " . $email_from;
                $headers = "From:" . $email_from;
                $message = "Name: " . $_POST['first_name'] . " " . $_POST['last_name'] . "\nEmail: " . $_POST['email'] . "\n\nMessage: " . $_POST['message'];
                $status = mail($email_to,$subject,$message,$headers);
                if ($status) {
                    echo "Thank You, Your Message Has Been Sent!";
                    // redirect to thank you page here
                }
                else {
                    echo "Sorry, An Error Occurred. Try Again Later";
                }
            }
            else {
                echo "Please Complete the Form To Send Your Message";
            }
        ?>
    </p>
    <br/>
    <a id='return' style='color:white;' href="http://www.vervebowls.com">Return</a>
    </div>
    <img class='center' src="assets/images/logo.png" alt="verve bowls" />
  </body>
</html>