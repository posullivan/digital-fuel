<?php 

//change theses details accordingly
$connection = mysql_connect("mysql.digital-fuel.com","psullysql","L1o2u9g5h8");

if (!$connection)
	die('Could not connect: ' . mysql_error());
	
mysql_select_db( "surveryresponse", $connection );

//this will automatically save all your 'POST' data into variables, eg $surname, $firstname, $email
import_request_variables('p');

// change name-of-table to the name of your table

mysql_query("INSERT INTO surveryresponse ( Firstname, Surname, Email )
VALUES ('" . $firstname ."','" . $surname . "','" . $email ."')");

mysql_close($connection);
						
?>