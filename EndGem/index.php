<?php
include('connectiontodb.php');




?>
<!DOCTYPE html>

</html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="coursesstyle.css" type="text/css" />

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>





</head>

<body>
    <h1 class="MainLogo" style="font-size: 80px;">EndGem<img style="position: absolute; top: 75px; " class="center"
            src="https://stemgemsbook.com/wp-content/uploads/2016/03/pink-gem.png" height="60" width="60"
            alt="Logo of site" /></h1>
    <h2 class="tagline" style="font-size: 30px;">-The perfect course organizer for you</h2>


    <button onclick="myFunction1()" class="myButton1">Course 1</button>
    <button onclick="myFunction2()" class="myButton2">Course 2</button>
    <button onclick="myFunction3()" class="myButton3">Course 3</button>
    <button onclick="myFunction4()" class="myButton4">Course 4</button>

    <a href="form.html"><button class="myButton7">+</button></a>
    <a href="#"><button class="myButton8" onclick="leaderboard()">&#9776;</button></a>
    <div id="course1" style="display: none;">
        <h1>COURSE-1</h1>
        <?php


$sql="SELECT * FROM coursedata;";
$result=mysqli_query($con,$sql);
$resultCheck=mysqli_num_rows($result);
if($resultCheck>0){
    while($row=mysqli_fetch_assoc($result)){
    if($row['courseName']=='Course1'){
        $filelocation2=$row['file'];
        echo '<img src="https://p1.hiclipart.com/preview/943/808/22/adobe-acrobat-file-512x512-white-and-red-adobe-pdf-png-clipart.jpg" width="40" height="40" title="Logo of a company" alt="Logo of a company" />
<span class="dname1">'. $row['displayName'].'</span> '.'<a target="_blank" href="/'.$row['file'].'" onclick="incrementer()" download><img src="https://image.flaticon.com/icons/png/512/0/532.png" height="30" width="30" /></a> <span class="num1">'.' '.$row['downloads']."</span><br>";
    }
    

    }

}



?>
            
    </div>
    <div id="course2" style="display: none;">
        <h1>COURSE-2</h1>
        <?php


$sql="SELECT * FROM coursedata;";
$result=mysqli_query($con,$sql);
$resultCheck=mysqli_num_rows($result);
if($resultCheck>0){
    while($row=mysqli_fetch_assoc($result)){
    if($row['courseName']=='Course2'){
        $filelocation2=$row['file'];
        echo '<img src="https://p1.hiclipart.com/preview/943/808/22/adobe-acrobat-file-512x512-white-and-red-adobe-pdf-png-clipart.jpg" width="40" height="40" title="Logo of a company" alt="Logo of a company" />
<span class="dname2">'. $row['displayName'].'</span> '.'<a target="_blank" href="/'.$row['file'].'" onclick="incrementer()" download><img src="https://image.flaticon.com/icons/png/512/0/532.png" height="30" width="30" /></a> <span class="num2">'.' '.$row['downloads']."</span><br>";
    }
    

    }

}



?>
    </div>
    <div id="course3" style="display: none;">
        <h1>COURSE-3</h1>
        <?php
$sql="SELECT * FROM coursedata;";
$result=mysqli_query($con,$sql);
$resultCheck=mysqli_num_rows($result);
if($resultCheck>0){
    while($row=mysqli_fetch_assoc($result)){
    if($row['courseName']=='Course3'){
        $filelocation2=$row['file'];
        echo '<img src="https://p1.hiclipart.com/preview/943/808/22/adobe-acrobat-file-512x512-white-and-red-adobe-pdf-png-clipart.jpg" width="40" height="40" title="Logo of a company" alt="Logo of a company" />
<span class="dname3">'. $row['displayName'].'</span> '.'<a target="_blank" href="/'.$row['file'].'" onclick="incrementer()" download><img src="https://image.flaticon.com/icons/png/512/0/532.png" height="30" width="30" /></a> <span class="num3">'.' '.$row['downloads']."</span><br>";


    }
    

    }

}



?>
    </div>
    <div id="course4" style="display: none;">
        <h1>COURSE-4</h1>
        <?php

$sql="SELECT * FROM coursedata;";
$result=mysqli_query($con,$sql);
$resultCheck=mysqli_num_rows($result);
if($resultCheck>0){
    while($row=mysqli_fetch_assoc($result)){
    if($row['courseName']=='Course4'){
        $filelocation2=$row['file'];
        echo '<img src="https://p1.hiclipart.com/preview/943/808/22/adobe-acrobat-file-512x512-white-and-red-adobe-pdf-png-clipart.jpg" width="40" height="40" title="Logo of a company" alt="Logo of a company" />
<span class="dname4">'. $row['displayName'].'</span> '.'<a target="_blank" href="/'.$row['file'].'" onclick="incrementer()" download><img src="https://image.flaticon.com/icons/png/512/0/532.png" height="30" width="30" /></a> <span class="num4">'.' '.$row['downloads']."</span><br>";
    }
    

    }

}



?>
    </div>
<br>
<div style="padding: 20px; display: none;  color: #00FFFF;   background-color: black; 
  border-radius: 5px; width: 100%;   height: 100%; border-top: 20px solid blue;       position: absolute; top: 150px; left: 0px; font-family: system-ui;;    " id="leaderboard" class="leaderboard"></div>




















    <script src="counterjs.js"></script>
    

<script>
function leaderboard() {
    
    var p1 = document.getElementById('leaderboard');
    if (p1.style.display === 'none') {
        p1.style.display = 'block'
    } else {
        p1.style.display = 'none'
    }
    var x1 = document.getElementById('course1').style.display;
    var x2 = document.getElementById('course2').style.display;
    var x3 = document.getElementById('course3').style.display;
    var x4 = document.getElementById('course4').style.display;
    if (x1 == 'block') {
        var a = document.getElementsByClassName("num1");
        var b = document.getElementsByClassName("dname1");
        var duplicate=[];
        for(var i=0;i<a.length;i++){
            duplicate[i]=a[i].innerHTML;
        }
        duplicate.sort(function(n,m){return (m-n);});
        console.log(duplicate[0]);
        var x=[];
        for(var i=0;i<a.length;i++){
            if(a[i].innerHTML==duplicate[0]){
                x[0]=i;
                break;
            }
        }
         for(var i=0;i<a.length;i++){
            if(a[i].innerHTML==duplicate[1]&&i!=x[0]){
                x[1]=i;
                break;
            }
        }
        for(var i=0;i<a.length;i++){
            if(a[i].innerHTML==duplicate[2]&&i!=x[0]&&i!=x[1]){
                x[2]=i;
                break;
            }
        }
         for(var i=0;i<a.length;i++){
            if(a[i].innerHTML==duplicate[3]&&i!=x[0]&&i!=x[1]&&i!=x[2]){
                x[3]=i;
                break;
            }
        }
         for(var i=0;i<a.length;i++){
            if(a[i].innerHTML==duplicate[4]&&i!=x[0]&&i!=x[1]&&i!=x[2]&&i!=x[3]){
                x[4]=i;
                break;
            }
        }
        for(var i=0;i<5;i++){
            console.log(b[x[i]].innerHTML+'->'+a[x[i]].innerHTML);
        }
            document.getElementById('leaderboard').innerHTML=' <span style="margin: 35%; color: yellow; font-size: 50px;  font-family: Georgia, serif;">LEADERBOARD</span><br /> <br /> '+''+' 1. '+b[x[0]].innerHTML+' =        '+a[x[0]].innerHTML+' downloads'+'<br /><br /><br /><br />'+'2. '+b[x[1]].innerHTML+' ='+a[x[1]].innerHTML+' downloads'+'<br /><br /><br /><br />'+'3. '+b[x[2]].innerHTML+' ='+a[x[2]].innerHTML+' downloads'+'<br /><br /><br /><br/ >'+'4. '+b[x[3]].innerHTML+' ='+a[x[3]].innerHTML+' downloads'+'<br /><br /><br /><br />'+'5. '+b[x[4]].innerHTML+' ='+a[x[4]].innerHTML+' downloads';
        
    } else if (x2 == 'block') {
 var a = document.getElementsByClassName("num2");
        var b = document.getElementsByClassName("dname2");
        var duplicate=[];
        for(var i=0;i<a.length;i++){
            duplicate[i]=a[i].innerHTML;
        }
        duplicate.sort(function(n,m){return (m-n);});
        console.log(duplicate[0]);
        var x=[];
           for(var i=0;i<a.length;i++){
            if(a[i].innerHTML==duplicate[0]){
                x[0]=i;
                break;
            }
        }
         for(var i=0;i<a.length;i++){
            if(a[i].innerHTML==duplicate[1]&&i!=x[0]){
                x[1]=i;
                break;
            }
        }
        for(var i=0;i<a.length;i++){
            if(a[i].innerHTML==duplicate[2]&&i!=x[0]&&i!=x[1]){
                x[2]=i;
                break;
            }
        }
         for(var i=0;i<a.length;i++){
            if(a[i].innerHTML==duplicate[3]&&i!=x[0]&&i!=x[1]&&i!=x[2]){
                x[3]=i;
                break;
            }
        }
         for(var i=0;i<a.length;i++){
            if(a[i].innerHTML==duplicate[4]&&i!=x[0]&&i!=x[1]&&i!=x[2]&&i!=x[3]){
                x[4]=i;
                break;
            }
        }
                document.getElementById('leaderboard').innerHTML=' <span style="margin: 35%; color: yellow; font-size: 50px;  font-family: Georgia, serif;">LEADERBOARD</span><br /> <br /> '+''+' 1. '+b[x[0]].innerHTML+' =        '+a[x[0]].innerHTML+' downloads'+'<br /><br /><br /><br />'+'2. '+b[x[1]].innerHTML+' ='+a[x[1]].innerHTML+' downloads'+'<br /><br /><br /><br />'+'3. '+b[x[2]].innerHTML+' ='+a[x[2]].innerHTML+' downloads'+'<br /><br /><br /><br/ >'+'4. '+b[x[3]].innerHTML+' ='+a[x[3]].innerHTML+' downloads'+'<br /><br /><br /><br />'+'5. '+b[x[4]].innerHTML+' ='+a[x[4]].innerHTML+' downloads';
    } else if (x3 == 'block') { var a = document.getElementsByClassName("num3");
        var b = document.getElementsByClassName("dname3");
        var duplicate=[];
        for(var i=0;i<a.length;i++){
            duplicate[i]=a[i].innerHTML;
        }
        duplicate.sort(function(n,m){return (m-n);});
        console.log(duplicate[0]);
        var x=[];
           for(var i=0;i<a.length;i++){
            if(a[i].innerHTML==duplicate[0]){
                x[0]=i;
                break;
            }
        }
         for(var i=0;i<a.length;i++){
            if(a[i].innerHTML==duplicate[1]&&i!=x[0]){
                x[1]=i;
                break;
            }
        }
        for(var i=0;i<a.length;i++){
            if(a[i].innerHTML==duplicate[2]&&i!=x[0]&&i!=x[1]){
                x[2]=i;
                break;
            }
        }
         for(var i=0;i<a.length;i++){
            if(a[i].innerHTML==duplicate[3]&&i!=x[0]&&i!=x[1]&&i!=x[2]){
                x[3]=i;
                break;
            }
        }
         for(var i=0;i<a.length;i++){
            if(a[i].innerHTML==duplicate[4]&&i!=x[0]&&i!=x[1]&&i!=x[2]&&i!=x[3]){
                x[4]=i;
                break;
            }
        }
             document.getElementById('leaderboard').innerHTML=' <span style="margin: 35%; color: yellow; font-size: 50px;  font-family: Georgia, serif;">LEADERBOARD</span><br /> <br /> '+''+' 1. '+b[x[0]].innerHTML+' =        '+a[x[0]].innerHTML+' downloads'+'<br /><br /><br /><br />'+'2. '+b[x[1]].innerHTML+' ='+a[x[1]].innerHTML+' downloads'+'<br /><br /><br /><br />'+'3. '+b[x[2]].innerHTML+' ='+a[x[2]].innerHTML+' downloads'+'<br /><br /><br /><br/ >'+'4. '+b[x[3]].innerHTML+' ='+a[x[3]].innerHTML+' downloads'+'<br /><br /><br /><br />'+'5. '+b[x[4]].innerHTML+' ='+a[x[4]].innerHTML+' downloads';
        

    } else if (x4 == 'block') { var a = document.getElementsByClassName("num4");
        var b = document.getElementsByClassName("dname4");
        var duplicate=[];
        for(var i=0;i<a.length;i++){
            duplicate[i]=a[i].innerHTML;
        }
        duplicate.sort(function(n,m){return (m-n);});
        console.log(duplicate[0]);
        var x=[];
           for(var i=0;i<a.length;i++){
            if(a[i].innerHTML==duplicate[0]){
                x[0]=i;
                break;
            }
        }
         for(var i=0;i<a.length;i++){
            if(a[i].innerHTML==duplicate[1]&&i!=x[0]){
                x[1]=i;
                break;
            }
        }
        for(var i=0;i<a.length;i++){
            if(a[i].innerHTML==duplicate[2]&&i!=x[0]&&i!=x[1]){
                x[2]=i;
                break;
            }
        }
         for(var i=0;i<a.length;i++){
            if(a[i].innerHTML==duplicate[3]&&i!=x[0]&&i!=x[1]&&i!=x[2]){
                x[3]=i;
                break;
            }
        }
         for(var i=0;i<a.length;i++){
            if(a[i].innerHTML==duplicate[4]&&i!=x[0]&&i!=x[1]&&i!=x[2]&&i!=x[3]){
                x[4]=i;
                break;
            }
        }
            document.getElementById('leaderboard').innerHTML=' <span style="margin: 35%; color: yellow; font-size: 50px;  font-family: Georgia, serif;">LEADERBOARD</span><br /> <br /> '+''+' 1. '+b[x[0]].innerHTML+' =        '+a[x[0]].innerHTML+' downloads'+'<br /><br /><br /><br />'+'2. '+b[x[1]].innerHTML+' ='+a[x[1]].innerHTML+' downloads'+'<br /><br /><br /><br />'+'3. '+b[x[2]].innerHTML+' ='+a[x[2]].innerHTML+' downloads'+'<br /><br /><br /><br/ >'+'4. '+b[x[3]].innerHTML+' ='+a[x[3]].innerHTML+' downloads'+'<br /><br /><br /><br />'+'5. '+b[x[4]].innerHTML+' ='+a[x[4]].innerHTML+' downloads';

        

    }








}
function incrementer() {
    let a =event.target.parentElement.nextElementSibling.innerHTML;
    let b = event.target.parentElement.previousElementSibling.innerHTML;
    a++;
 event.target.parentElement.nextElementSibling.innerHTML=a;
    console.log(a);
      console.log(b);
    
    $.post("updater.php", { title: b, downloads: a });
//console.log("Success");




};
</script>




</body>











































</html>