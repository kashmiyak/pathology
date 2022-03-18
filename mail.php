
    <?php
//get data from form  
$name = $_POST['name'];
$phone = $_POST['phone'];
$email= $_POST['email'];
$message= $_POST['Message'];
$to = "kashmiyak@gmail.com";
$subject = "Mail From Chandralekha Website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message ."\r\n Mobile No=" . $phone;
$headers = "From: noreply@pathology.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>
