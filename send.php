<?php

//
// SendGrid PHP Library Example
//
// This example shows how to send email through SendGrid
// using the SendGrid PHP Library.  For more information
// on the SendGrid PHP Library, visit:
//
//     https://github.com/sendgrid/sendgrid-php
//

require("sendgrid-php/sendgrid-php.php");


/* USER CREDENTIALS
/  Fill in the variables below with your SendGrid
/  username and password.
====================================================*/
$sg_username = "rishabh1510";
$sg_password = "rishabh1510";

$email=$_POST['emailer']

/* CREATE THE SENDGRID MAIL OBJECT
====================================================*/
$sendgrid = new SendGrid( $sg_username, $sg_password );
$mail = new SendGrid\Email();

try {
    $mail->
    setFrom( "info@alltimefamous.com" )->
    addTo( $email )->
    setSubject( "Thanks for Subscribing" )->
    setText( "Thanks for Subscribing!
You will be updated with all the recent activities.")->
    setHtml( "<table> <tr> <td><h1>Thanks for Subscribing</h1></td> </tr> 
	<tr><td><p>Thanks for Subscribing!<br>
You will be updated with all the recent activities</p></td></tr>
	</table>" );

    $response = $sendgrid->send( $mail );

    if (!$response) {
        throw new Exception("Did not receive response.");
    } else if ($response->message && $response->message == "error") {
        throw new Exception("Received error: ".join(", ", $response->errors));
    } else {
        print_r($response);
    }
} catch ( Exception $e ) {
    var_export($e);
}
echo '<script language="javascript">alert"Thanks for Subscribing!1"</script>';
echo '<script language="javascript">window.location = "index.html"</script>';

?>