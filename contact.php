<?php
//variable setting
//$name = $_REQUEST['name'];
//$subject = $_REQUEST['subject'];
//$email = $_REQUEST['email'];
//$message = $_REQUEST['message'];
// check input fields
//if (empty($name) || empty($subject) || empty($email) || empty($message) )
//{
 //   echo "Please fill all the fields" ;

//}
//else {
  //  mail ("n.devata.998@gmail.com", "Portfolio Message", $message , "From: $name <$email>" );
    //echo "<script type='text/javascript'> alert('your message is sent successfully');
    //window.history.log(-1);
    //</script>";
//}
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "n.devata.98@gmail.com";
    $headers = "From:" .$mailFrom;
    $txt = "You have received an e-mail from" .$name.".\n\n" .$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}

?>