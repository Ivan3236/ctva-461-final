<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From:Push Through Fitness'; 
    $to = 'ivan.perez.278@my.csun.edu'; 
    $subject = 'Hello';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
    if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
		echo "Thank You!" . " -" . "<a href='http://www.csun.edu/~ip521671/' style='text-decoration:none;color:#d00d2d;'> Return to Homepage</a>";
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}
?>