<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset=utf-8>
        <title>Contact - Stéphane Krims</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <meta name="description" content="Get in touch with Stéphane Krims to inquire about services as a musician and educator.">
        <meta property="og:type" content="business.business">
        <meta property="og:title" content="Contact - Stéphane Krims">
        <meta property="og:url" content="http://www.stephanekrims.com/en/contact.html">
        <meta property="og:image" content="showpic11-edited.png">
        <meta property="business:contact_data:street_address" content="3591 boul. Gouin E #301">
        <meta property="business:contact_data:locality" content="Montréal-Nord">
        <meta property="business:contact_data:region" content="QC">
        <meta property="business:contact_data:postal_code" content="H1H 5V7">
        <meta property="business:contact_data:country_name" content="Canada">
      
        <!--Twitter Card data-->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@litsmirk">
        <meta name="twitter:title" content="Contact - Stéphane Krims">
        <meta name="twitter:description" content="Get in touch with Stéphane Krims to inquire about services as a musician and educator.">
        <meta name="twitter:creator" content="@litsmirk">
        <meta name="twitter:image" content="showpic11-edited.jpg">
        <meta name="twitter:alt" content="Image of upwards of 30 people all singing together onstage, including Stéphane who is playing a bass. Photo by Romeo Bruni.">
    
    
        <meta name="robots" content="index,follow" />
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <script async src="https://cse.google.com/cse.js?cx=5c25f1244ef931db5"></script>
        
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link href="../sk-style.css" rel="stylesheet">
        
    </head>
    <body>
        
        <div class="container-fluid2">
    
            
            <div class="topname">
                <h1>Stéphane Krims</h1>
            </div>
            
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="bio.html">About</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Music<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="services.html">Services</a></li>
                        <li><a href="discog.html">Discography</a></li>
                        <li><a href="shows.html">Performances</a></li>
                      </ul>
                    </li>
                    <li><a href="aos.html">AOS</a></li>
                      <li class="active"><a href="#">Contact<span class="sr-only">(current)</span></a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="../fr/joindre.php">FR</a></li>
                    <li><a href="https://www.facebook.com/stephanekrimsofficiel/" target="_blank" rel="noopener noreferrer" class="fb fa fa-facebook-square"></a></li>
                    <li><a href="https://www.instagram.com/krimsworld/" target="_blank" rel="noopener noreferrer" class="ig fa fa-instagram"></a></li>
                    <li><a href="https://www.youtube.com/@krimsworld" target="_blank" rel="noopener noreferrer" class="yt fa fa-youtube-play"></a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
            
            <div id="hero" class="row">
                <figure>
                    <img src="../images/showpic11-edited.png" alt="Image of upwards of 30 people all singing together onstage, including Stéphane who is playing a bass. Photo by Romeo Bruni.">
                </figure>
            </div>
        
            <div class="main">
                
                <div class="container">
                    
                    <h1>Contact Me</h1>
                    
                    <p>To request my services, inquire about anything you've seen on here, or just say hi - please fill out the form below and i'll get back to you as soon as i can!</p>
                    
                    <?php
                    
                        $error = false;
                        // Include the SASLA (Simple Anti Spam Lite Approach) class SPAM protection.
                        require '../sasla.php';
                        if(isset($_POST['submit']) && !empty($_POST['submit'])) {
                            if (Sasla::isASpam()) {
                                echo '<div style="color: red; text-align:center;" >&#128078; Message failed to pass first spam check validation. </div>';
                            } else {
                                // Set variables for each form field
                                $name = isset($_POST['name']) ? trim($_POST['name']) : '';
                                $subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
                                $email = isset($_POST['email']) ? trim($_POST['email']) : '';
                                $message = isset($_POST['message']) ? trim($_POST['message']) : '';
                            
                            
                                // Perform validation checks on the name field.
                                // First, check to see if the name field has a value on the form, otherwise, display an error message.
                                if (empty($name)) { 
                                    $error = true; 
                                    $nameError = "Please enter your first name.";	

                                // Otherwise, if the value in the name field is less than three characters, display an error message.
                                } else if (strlen($name) < 3) {
                                    $error = true;
                                    $nameError = "The first name field must have at least 3 characters.";
                                
                                // Otherwise, if the name field has an URL, display an error message.
                                } else if (strpos($name, 'http') !== false || strpos($name, 'www.') !== false) {
                                    $error = true; 
                                    $nameError = "The name field cannot contain an URL.";
                            
                                // Otherwise, if the name field contains anything other than uppercase, or lowercase letters, or a space, display an error message.
                                } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
                                    $error = true;
                                    $nameError = "The first name field must only contain letters.";
                                }
                            
                                // Perform validation checks on the subject field
                                // If the subject field is empty, display an error message.
                                if (empty($subject)) { 
                                    $error = true; 
                                    $subjectError = "Please enter a subject.";	
                            
                                // Otherwise, if the subject field has an URL, display an error message.
                                } else if (strpos($subject, 'http') !== false || strpos($subject, 'www.') !== false) {
                                    $error = true; 
                                    $subjectError = "The subject field cannot contain an URL.";
                            
                                // Otherwise, if the subject field has anything other than letters or a space, then display an error message.
                                } else if (!preg_match("/^[a-zA-Z ]+$/",$subject)) {
                                    $error = true;
                                    $subjectError = "The subject must contain only letters (and spaces).";
                                }
                            
                                // Use the php function FILTER_VALIDATE_EMAIL to ensure that the email address entered in the email field is a valid email address.
                                if (!filter_var($email,FILTER_VALIDATE_EMAIL) ) {
                                    $error = true;
                                    $emailError = "Please enter valid email address.";
                                }
                            
                                // Perform validation checks on the message field.
                                // If the message field is empty, display an error message.
                                if (empty($message)) { 
                                    $error = true; 
                                    $messageError = "Please enter a message.";	
                                
                                // Otherwise, if the message field contains an URL, display an error message.
                                } else if (strpos($message, 'http') !== false || strpos($message, 'www.') !== false) {
                                    $error = true; 
                                    $messageError = "The message field cannot contain an URL.";

                                    /* PREG_MATCH quick overview:
                                    ^ = match starting at the beginning of the string
                                    [ = start a character set
                                    a-z - = alpha characters, spaces, and dashes
                                    ]     = end the character set
                                    +     = must have one or more of the character set defined
                                    \z    = match ending at the end of the string
                                    /     = ending delimiter for my regexp
                                    i     = declares this as a case INsensitive search
                                    */
                                } else if(!preg_match("/^[a-zA-Z.,;:?! -]+\z/i",$message)) {
                                    $error = true;
                                     $messageError = "One or more of the characters in the message is not permitted.";
                                }
                            
                                if (!$error) {
                                    if(!empty($_POST['website'])) {
                                        // Message failed second honeypot spam check
                                        die();
                                    } else {
                                        $subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
                                        $to = "musikrims@gmail.com";
                                        $from = $email;
                                        $subject = $subject;
                                        $headers = "From: $from" . "\r\n";
                                        
                                        // To send HTML mail, the Content-type header must be set
                                        $headers .= 'MIME-Version: 1.0' . "\r\n";
                                        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
                                        // Form the email message using an HTML table. 
                                        $body = "
                                        <html>
                                        <body>
                                        <table style='border-color: #666; font-family: Arial, Helvetica, sans-serif;' cellpadding='10' width='697'>
                                        <tr><td colspan='2'><h3 style='color:#e020e4'><strong>You have a new message sent via your website's contact form!</strong></h3></td> </tr>
                                        <tr><td><strong>From:</strong> </td><td>$name</td></tr> 
                                        <tr><td><strong>Message:</strong> </td><td>$message</td></tr>
                                        </table>
                                        </body>
                                        </html>
                                        ";
                                        $success = mail($to,$subject,$body,$headers);
                                        // If phpmail has not been successfully sent, display an error message.
                                        if (!$success) {
                                        echo '<div style="color: red;" >Message Failed &#128078; there was an error sending your message.</div>';
                                    } else {
                                        // Otherwise, display an email successfully sent message.
                                        echo ' <div style="color:blue; text-align:center;" > Thanks for contacting me. I will respond to your message soon! </div>';
                                    } 
                                }
                            } 	
                        }
                    }
                    
                    
                ?>	
                    
                    
                    
                      
                    
                <form action="" method="post">
                        <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" placeholder="Enter name">
                        <span style="color:red; font-size:14px;"><?php echo $nameError; ?></span>
                      </div>
                      <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>"  placeholder="Enter email">
                        <span style="color:red; font-size:14px;"><?php echo $emailError; ?></span>
                      </div>
                      <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" class="form-control" id="subject" name="subject" value="<?php echo $subject; ?>" placeholder="Enter subject">
                        <span style="color:red; font-size:14px;"><?php echo $subjectError; ?></span>
                        <input type="hidden" class="form-control" id="subject" name="website" >
                      </div>
                      <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" rows="5" id="message" name="message"><?php echo $message; ?></textarea>
                        <span style="color:red; font-size:14px;"><?php echo $messageError; ?></span>
                      </div>
                      <input type="submit" name="submit" class="btn btn-default" value="Submit">
                    </form>
                    
                </div>
            
            </div>
        

            
            <div id="footer">
                <div class="row">
                
                    <div class="col-sm-4">   
                    <h2>Stéphane Krims</h2>
                        </div>

                    <div class="col-sm-8 text-right">

                        <ul id="bottom-icons">
                            <li><a href="https://www.facebook.com/stephanekrimsofficiel/" target="_blank" rel="noopener noreferrer" class="fb fa fa-facebook-square"></a></li>
                              <li><a href="https://www.instagram.com/krimsworld/" target="_blank" rel="noopener noreferrer" class="ig fa fa-instagram"></a></li>
                              <li><a href="https://www.youtube.com/@krimsworld" target="_blank" rel="noopener noreferrer" class="yt fa fa-youtube-play"></a></li>

                          </ul>

                    </div>
            
                </div>
                
                <div id="footer-list" class="row">
                
                    <div class="col-sm-4">
                        <ul>
                          <li><a href="index.html">Home</a></li>
                            <li><a href="bio.html">About</a></li>
                            <li>Music <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
                            <ul>
                              <li><a href="services.html">Services</a></li>
                              <li><a href="discog.html">Discography</a></li>
                                <li><a href="shows.html">Performances</a></li>
                            </ul>
                          </li>
                        </ul>
                    </div>
                    
                    <div class="col-sm-8">
                        <ul>
                          <li><a href="aos.html">Anti-Oppression Statement</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                
                </div>
                
        </div>
                
        <div id="copyright">
            <div id="crtext">
                
            <p>© 2023 Stéphane Krims</p>
                
            </div>
                
        </div>
        </div>
        <script>(function(d){var s = d.createElement("script");s.setAttribute("data-account", "ui77jQimcq");s.setAttribute("src", "https://cdn.userway.org/widget.js");(d.body || d.head).appendChild(s);})(document)</script><noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>
    </body>
</html>