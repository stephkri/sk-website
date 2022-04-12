<?php
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "stephane.krims@hotmail.ca";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    if (empty($name) || empty($mailFrom) || empty($subject) || empty($message)) {
      header("Location: contact.html?empty");
    } else {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.html?invalidemail");
      } else {
        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.html?mailsent");
      };
    };
  };
?>