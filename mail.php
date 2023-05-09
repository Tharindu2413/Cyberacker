<?php
session_start();
error_reporting(0);

if (isset($_POST['contact'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $info = $_POST['message'];

    $to = 'cyberacker.sl@gmail.com';
    $subject = 'This is our test email';

    $message = '<h1>Customer Contact Us form request </h1><p>Customer name: '.$name.'</p>
                <p>Customer email: '.$email.'</p>
                <p>Customer message:'.$info.' </p>';
    
    $headers = "From: The sender Name <info@cyberacker.com>\r\n";
    $headers = "Reply-To: info@cyberacker.lk ";
  
    $headers = "Content-type: text/html\r\n";
    
    mail($to, $subject, $message, $headers);

    // echo "<script type='text/javascript'> document.location = './contactus.html'; </script>";
    if ($success) {
        $success_message = "Thank you for contacting us! We will get back to you soon.";
      } else {
        $error_message = "Please fix the errors in the form and try again.";
      }
}
?>

<?php if (isset($success_message)): ?>
  <script>
    document.getElementById("alert").style.display = "block";
  </script>
<?php elseif (isset($error_message)): ?>
  <script>
    document.getElementById("error").style.display = "block";
  </script>
<?php endif; ?>