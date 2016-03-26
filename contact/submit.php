<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "thisreallygoesnowhere@abc.xyz";
 
    $email_subject = "Message through Photography Website";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
        echo "<html>"; 
        echo "<head><title>David Brown Photography - Contact</title><meta charset='UTF-8'><meta name='viewport' content='width=device-width, initial-scale=1'><link rel='stylesheet' href='/public/application.css'><script src='/public/html5shiv-printshiv.min.js'></script><script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script></head>";
        echo "<body><header id='masthead'><h1><a href='/''>David Brown</a><span>Photography</span></h1><nav><a href='/'>Home</a><a id='collectionsButton'>Collections</a><ul id='collectionsMenu'><li><a href='/collection/people'>People</a></li><li><a href='/collection/places'>Places</a></li><li><a href='/collection/things'>Things</a></li></ul><a href='/about'>About</a><a class='active' href='/contact'>Contact</a></nav><div id='mobileMenuToggle'><p class='border-menu'></p></div></header><main><article>";
        echo "<p>We are very sorry, but there were error(s) found with the form you submitted.</p>";
 
        echo "<p>These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.</p>";

        echo "</article></main><footer><small>Copyright 2016</small></footer><script src='/public/main.js'></script></body></html>";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['message'])) {
 
        died('There appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $name = $_POST['name']; // required
 
    $email_from = $_POST['email']; // required
  
    $message = $_POST['message']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The email address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'The name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($message) < 2) {
 
    $error_message .= 'The message you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Message: ".clean_string($message)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
//@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
  
<!DOCTYPE html>
<html>
  <head>
    <title>David Brown Photography - Contact</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/public/application.css">
    <script src="/public/html5shiv-printshiv.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  </head>
  <body>
    <header id="masthead">
      <h1><a href="/">David Brown</a><span>Photography</span></h1>
      <nav>
        <a href="/">Home</a>
        <a id="collectionsButton">Collections</a>
        <ul id="collectionsMenu">
          <li><a href="/collection/people">People</a></li>
          <li><a href="/collection/places">Places</a></li>
          <li><a href="/collection/things">Things</a></li>
        </ul>
        <a href="/about">About</a>
        <a class="active" href="/contact">Contact</a>
      </nav>
      <div id="mobileMenuToggle">
        <p class="border-menu"></p>
      </div>
    </header>
    <main>
      <article>
        <p>Thank you for getting in touch!</p>
      </article>
    </main>
    <footer>
      <small>Copyright 2016</small>
    </footer>
    <script src="/public/main.js"></script>
  </body>
</html> 
 
 
 
<?php
 
}
 
?>


