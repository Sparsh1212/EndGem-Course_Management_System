<?php 
 include('connectiontodb.php');
// echo('SUCESS');
 if(isset($_POST["title"])&&isset($_POST["downloads"])){
     
$displayName=$_POST["title"];
 $downloads=$_POST["downloads"];
$query="UPDATE coursedata SET downloads=$downloads WHERE displayName='$displayName'    ";
$query_run=mysqli_query($con,$query);

echo('DONE');
 }
 else{
     echo'failed';
 }
 
?>