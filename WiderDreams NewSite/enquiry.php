

<?php



if($_POST && isset($_POST['submit']))

{

  

   $from_email = 'info@widerdreamsoverseas.com'; //sender email

   $recipient_email = 'info@widerdreamsoverseas.com'; //recipient email

	 //$recipient_email = $emails[$_POST['prdct']];

    $subject = 'Inquiry Form'; //subject of email

	$fname = $_POST['firstname'];

	$lname = $_POST['lastname'];

	$email = $_POST['email'];

	$phne = $_POST['phone'];

	$cntry = $_POST['message'];
	
 $message = '<html><body>';

	 //$message .= '<center> ';

	 $message .= "<div style='width:600px; line-height:30px; margin-bottom:20px; color:#000; font-size:14px; text-align:left; font-family:Verdana, Geneva, sans-serif;'>Details are as follows  filled by User.</div>";   

	 $message .= '<table width="600"; rules="all" style="border:1px solid #3A5896; font-family:Verdana, Geneva, sans-serif; font-size:14px;" cellpadding="5">'; 

	           

	 $message .= "<tr><td>First Name </td> <td>".$fname."</td></tr>";

     $message .= "<tr><td>Last Name </td> <td>".$lname."</td></tr>";

	 $message .= "<tr><td>Phone No</td> <td>".$phne."</td></tr>";

     $message .= "<tr><td>Email ID </td> <td>".$email."</td></tr>";

	 $message .= "<tr><td>Message</td> <td>".$msgs."</td></tr>";

     $message .= "</table>";

     //$message .= '</center> ';

     $message .= "</body></html>"; 

 

 $user_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

  

      //header

         $headers = "MIME-Version: 1.0\r\n";

$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $headers .= "From:".$from_email."\r\n";

        $headers .= "Reply-To: ".$user_email."" . "\r\n";

	   $headers .= "Cc: info@widerdreamsoverseas.com , pankajpanchal545@gmail.com" . "\r\n";

		$headers .= 'Bcc: ashutoshchoudhary2@gmail.com' . "\r\n";

       

        //plain text

      

	

   

    $sentMail = @mail($recipient_email, $subject, $message,  $headers);

	 if($sentMail) //output success or failure messages

    {  

	echo"<script>

    window.location = 'https://widerdreamsoverseas.com/thankyou.php';

</script>";    

      

	   

    }else{

        die('Could not send mail! Please check your PHP mail configuration.');  

    }  

	 



}

		?>

        



