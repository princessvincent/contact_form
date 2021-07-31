<?php
if(isset($_POST["sub"])){
    if(isset($_POST["email"]) && isset($_POST["subj"]) && isset($_POST["message"])){
        $email = $_POST["email"];
        $sub = $_POST["subj"];
        $mess = $_POST["message"];

if(filter_var("$email, FILTER_VALIDATE_EMAIL")){
    $email_error = "Invalid Email Address!";
}

$mailto = "mattsdavidson360@gmail.com.com";
$headers = "From: ".$email ;
$tex = "You have received an E-mail from ". $email."\n\n". $mess ;

if(mail($mailto ,$sub,$tex,$headers)){
echo "mail has been sent!";
}else{
    echo "Unable to send mail";
}



    }
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <div>
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST" class="contact-form">
         <input type="email" name="email" placeholder="Your Email" required><br><br>
         <input type="text" name="subj" placeholder="Subject" required><br><br>
         <input type="text" name="message" placeholder="Message" required><br><br>
         <button type="submit" name="sub">Submit Form</button>
     </form>
 </div>   
</body>
</html>