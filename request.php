<?php 
$to = "andrew.vilsack@gmail.com";
$message = '<html><body><h2>Website submission</h2><p>'.
    '<p><b>Name: </b>'.$_POST['name'].'</p>'.
    '<p><b>Email: </b>'.$_POST['email'].'</p>'.
    '<p><b>Phone Number: </b>'.$_POST['phone'].'</p>'.
    '<p><b>Comment: </b>'.$_POST['comments'].'</p>'.
    '</body></html>';

  $headers = 'From: '.$_POST['email']."\r\n".
             'Reply-To: '.$_POST['email']."\r\n".
             'Content-type: text/html; charset=iso-8859-1;'."\r\n".
             'X-Mailer: PHP/'.phpversion();

  #mail($to,$subject, $message, $headers)           

if(mail($to,'Website Email',$message,$headers, "-andrew.vilsack@gmail.com"))
{

}
else
{
	echo "fail";
}
  
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>title</title>
  <meta name="author" content="name">
  <meta name="description" content="description here">
  <meta name="keywords" content="keywords,here">
  <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
  <link rel="stylesheet" href="css/skeleton.css" type="text/css">
  <link rel="stylesheet" href="css/normalize.css" type="text/css">
  </head>
  <body>
  <div class="wrapperdiv">
  <h3>Success!</h3>
  <p>Your inquery has been successfully submitted.   <a href="contact.php">click here to go back a page</a>, or close this window to exit</p>
  </div>
</body>
