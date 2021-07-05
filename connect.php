<?php
$conn= new mysqli("localhost","root","","smatmethod");

if(isset($_POST['r'])){
	 $stmt=$conn->prepare("insert into move(direction) values('r')");
	 $stmt->execute();
	 echo "RIGHT";
 }
 elseif(isset($_POST['l'])){
	 	 $stmt=$conn->prepare("insert into move(direction) values('l')");
	 $stmt->execute();
	 echo"LEFT";
 }
 elseif(isset($_POST['f'])){
	 	 $stmt=$conn->prepare("insert into move(direction) values('f')");
	 $stmt->execute();
     echo"FORWARD";
 }
 elseif (isset($_POST['b'])){
	 	 $stmt=$conn->prepare("insert into move(direction) values('b')");
	 $stmt->execute();
     echo "BACKWARD";
 }
 elseif(isset($_POST['s'])){
	 	 $stmt=$conn->prepare("insert into move(direction) values('s')");
	 $stmt->execute();
	 echo "STOP";
 }
 else{ echo" try again";}
?>