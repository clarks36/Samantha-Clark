<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="description" content="Example contact form">
    <meta name="keywords" content="Contact Form, Message, In Touch, Comments, Concerns">
	<title>Contact Form</title>
     
</head>

<body>
<div class="input-row">
 
                <div class="input-group">
                    <label>First Name</label>
                        <input type="text" placeholder="John" required>
                </div>
                <div class="input-group">
                
                    
                        <label>Last Name</label>
                            <input type="text" placeholder="Smith" required>
                    </div>  
                    
                    <div class="input-group">
                        
                        <label>Email</label>
                            <input type="email" placeholder="clarks33@gmatc.matc.edu" required>
                    </div>
                    </div>
                    
                    <div class="input-row">
                        <div class="input-group">
                            <label>Date</label>
                            <input type="text" placeholder="5/8/2024" required>
                        </div>

                   
                        <div class="input-group">
                            <label>Phone</label>
                                <input type="tel" pattern= "\d{3}[\d{3}[\d{4}" placeholder="999-999-9999" required>
                    </div>
               
                            
                                <div class="input-group">
                                    <label>Comments</label>
                                    <input type="text" placeholder="Subject" required>
                                </div>
                    </div>
                  
<!-- This entire script, including the opening and closing ?php tags, can be nested inside of any other tag, such as div or p, to control positioning and formatting of confirmation message spit out by the email script -->
<h2>
<?php
  if (isset($_REQUEST['email'])) { //if "email" variable is filled out, send email
  
  //Set admin email for email to be sent to (use you own MATC email address)
    $admin_email = "clarks33@gmatc.matc.edu"; 

  //Set PHP variable equal to information completed on the HTML form
    $email = $_REQUEST['email']; //Request email that user typed on HTML form
    $phone = $_REQUEST['phone']; //Request phone that user typed on HTML form
    $date = $_REQUEST['date']; //Request subject that user typed on HTML form
    $subject = $_REQUEST['subject']; //Request subject that user typed on HTML form
    $message = $_REQUEST['message']; //Request message that user typed on HTML form
  //Combine first name and last name, adding a space in between
    $name = $_REQUEST['first_name'] . " " .  $_REQUEST['last_name']; 
            
  //Start building the email body combining multiple values from HTML form    
    $body  = "From: " . $name . "\n"; 
    $body .= "Email: " . $email . "\n"; //Continue the email body
    $body .= "Phone: " . $phone . "\n"; //Continue the email body
    $body .= "Date: " . $date . "\n"; //Continue the email body
    $body .= "Message: " . $message; //Continue the email body
  
  //Create the email headers for the from and CC fields of the email     
    $headers = "From: " . $name . " <" . $email . "> \r\n"; //Create email "from"
    $headers .= "CC: " . $name . " <" . $email . ">"; //Send CC to visitor
    
  //Actually send the email from the web server using the PHP mail function
  mail($admin_email, $subject, $body, $headers); 
    
  //Display email confirmation response on the screen
  echo "Thank you for contacting us!"; 
  }
  
  //if "email" variable is not filled out, display an error
  else  { 
     echo "There has been an error!";
        }
?>

</h2>
</body>
</html>
