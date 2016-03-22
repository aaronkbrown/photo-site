
<?php $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $formcontent = "From: $name \n Message: $message";
  $recipient = "";
  $subject = "Message from website";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error");
  echo "Thank you!";
?>
