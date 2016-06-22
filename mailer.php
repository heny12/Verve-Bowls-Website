<html>
  <head>
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="assets/stylesheets/stylesheet.css" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div id='mail_page'>
    <p id='mail_message' class-"center">
        <?php
            if(isset($_POST['submit'])){
                $to = "hdchipman@msn.com"; // this it the emal to send to
                $from = $_POST['email']; // this is the sender's Email address
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $subject = "Form submission";
                $subject2 = "Copy of your form submission";
                $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
                $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

                $headers = "From:" . $from;
                $headers2 = "From:" . $to;
                $status = mail($to,$subject,$message,$headers);
                mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
                if ($status) {
                    echo "Thank You, Your Message Has Been Sent!";
                    // redirect to thank you page here
                }
                else {
                    echo "Sorry, An Error Occurred";
                }
            }
        ?>
    </p>
    </div>
  </body>
</html>