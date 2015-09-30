<?php
$name1 = $_POST['name1'];
$name2 = $_POST['name2'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$college = $_POST['college'];
$password = $_POST['password'];
$host = 'localhost';
$db = 'idecipher';
$user = 'root';
$psw = 'toor';


try{
//connection to MySQL
$connection = new PDO("mysql:host=$host;dbname=$db", $user, $psw);
$connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

//SQL Syntex
$insert = 'INSERT INTO login ( name1, name2, email, mobile, college, password )
                       VALUES
                       ( :name1, :name2, :email, :mobile, :college, :password); '; 


$result = $connection->prepare($insert);

$result->execute( array( ':name1'=>$name1, ':name2'=>$name2, ':email'=>$email,':mobile'=>$mobile,':college'=>$college, ':password'=>$password) );                  

}

catch(PDOException $e){
	die('Connection Error');
	echo '$e';

}
?>