<?php $con = mysql_connect("mysql.digital-fuel.com","psullysql","L1o2u9g5h8"); 
if (!$con) { die('Could not connect: ' . mysql_error()); } else { echo 'success'; } 
import_request_variables('p'); 

echo $firstname .' ' .$surname .' '. $email.' '. $company.' '. $numvehicles.' '. $amountfill.' '. $nowpayment.' '. $nowtracker.' '. $trackerq.' ' .$mobilephone.' '. $paymobile ; mysql_select_db ('digitalfuelsurvey', $con); mysql_query("INSERT INTO surveyresponse ( firstname, surname, email, company, numvehicles, amountfill, nowpayment, nowtracker, trackerq, mobilephone, paymobile) VALUES ('".$firstname."','".$surname."','".$email."','".$company."','".$numvehicles."','".$amountfill."','".$nowpayment."','".$nowtracker."','".$trackerq."','".$mobilephone."','".$paymobile."')"); mysql_close($con); 

?>