<?php   
// Connecting to database:
$con=mysqli_connect('localhost','endgemAdmin','endgemAdmin');
mysqli_select_db($con,'endgemdatabase');
// Handling data from the form
if(isset($_POST['submit'])){
$coursename=$_POST['coursename'];
$displayname=$_POST['displayname'];
$file=$_FILES['file'];
// Extracting necessary file parameters
$filename=$file['name'];
$fileerror=$file['error'];
$filetmp=$file['tmp_name'];
// Breaking the file name
$fileext=explode('.',$filename);

$filecheck=strtolower(end($fileext));
$fileextstored=['pdf'];
// final condition checking
if(in_array($filecheck,$fileextstored)){
    $destinationfile='uploadedpdfs/'.$filename;
    move_uploaded_file($filetmp, $destinationfile);
    $q="INSERT INTO coursedata(courseName,displayName,file) VALUES('$coursename','$displayname','$destinationfile')      ";
mysqli_query($con,$q);
echo('<!DOCTYPE html><html><h1 style="font-family: monospace;">File Upload Successful</h1>
<a href="index.php">Return to Home</a>


</html>');
}
else{  // Error case
    echo('Error in Uploaded File Format');
}








}
?>