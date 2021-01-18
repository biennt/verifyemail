<?php
    
// include SMTP Email Validation Class
require_once('smtp_validateEmail.class.php');

// the email to validate
$email = $_GET['email'];
// an optional sender
$sender = 'bien@ybaonline.com';

// instantiate the class
$SMTP_Validator = new SMTP_validateEmail();
// turn on debugging if you want to view the SMTP transaction
error_reporting(E_ERROR | E_PARSE);
$SMTP_Validator->debug = false;
// do the validation
try {
    $results = $SMTP_Validator->validate($email, $sender);
} catch(Exception $e) {
    $results['is_valid'] = false;
}


// view results
header('Content-Type: application/json;charset=utf-8');
echo json_encode($results);
// echo "\n";
// echo $email.' is '.($results[$email] ? 'valid' : 'invalid')."\n";

// send email? 
// if ($results[$email]) {
//   //mail($email, 'Confirm Email', 'Please reply to this email to confirm', 'From:'.$sender."\r\n"); // send email
// } else {
//   echo 'The email addresses you entered is not valid';
// }

?>

