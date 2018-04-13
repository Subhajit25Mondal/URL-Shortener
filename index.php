<!DOCTYPE html>
<!-- saved from url=(0048)file:///C:/Users/my/Desktop/SONGS/NEWW/index.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
 <title>URL Compressor</title>


<link rel="stylesheet" href="./index_files/bootstrap.min.css">
    <link rel="stylesheet" href="./index_files/font-awesome.min.css"> 
    <link rel="stylesheet" href="./index_files/animate.min.css"> 
    <link rel="stylesheet" href="./index_files/owl.carousel.min.css"> 
    <link rel="stylesheet" href="./index_files/owl.theme.default.css">
<link rel="stylesheet" href="./index_files/front.css">


</head>
<body id="page-top" class="index ">


<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    
<div class="container">

<div class="navbar-header page-scroll">

<p class="navbar-brand"> Welcome to URL Compressor</p>

</div>


</div>

</nav>

<header class="shorten">
  <div class="intro-text">
<div class="intro-heading wow zoomIn" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">URL Compressor</div>
<div class="row">
<div class="col-sm-8 col-sm-offset-2">

    
    
   
   
    
<form method="post" accept-charset="utf-8" id="shorten" class="form-inline" action="index.php">
<div class="form-group">
<input type="text" name="input" placeholder="Your URL Here  (http://www.example.com)" required="" class="form-control input-lg" id="url">

<button class="btn-captcha" id="invisibleCaptchaShort" type="submit" name="submit"><img src="./index_files/Right-Arrow.png" alt=""></button>
</div>
</form>
    
    
    
    <?php
    
    
   if(isset($_POST['submit'])){
    
    $get_value = $_POST['input'];
    
    
 $con = mysqli_connect("localhost","root","");
mysqli_select_db($con, "url");

$a=array("rfj","acx","auk","znd","dzi","plj","ygh","rcv","bcx","zaq","tfg","tgf");
$random=array_rand($a,2);

$per=$a[$random[0]];




$rowSQL = mysqli_query( $con, "SELECT MAX( id ) AS max FROM main;" );               //MAX VALUE FROM TABLE
$row = mysqli_fetch_array( $rowSQL );
$largestNumber = $row['max'];


mkdir($per.($largestNumber+1));                                                     //MAKING DIRECTORY
$direc=$per.($largestNumber+1)."/index.html";

$myfile= fopen($direc,'w') or die ("Unable to contact server");


$url=$get_value;                                                                    //LINK

$url2="<script>window.location.href='$url'</script>";                               //JAVASCRIPT LINK


fwrite($myfile, $url2);                                                             //WRITING INTO FILE

fclose($myfile);                                                




                                                                                   //IP AND TIME BEGIN

$b=$_SERVER['REMOTE_ADDR'];


date_default_timezone_set('Asia/Kolkata');

$timestamp = time();
$date_time = date("d-m-Y (D) H:i:s", $timestamp);


                                                                                    //IP AND TIME END





$tttt=$largestNumber+1;
$ttt=$per.($largestNumber+1);


$insert_query = "insert into main (id, url, link, ip, time) values ('$tttt','$url','$ttt','$b','$date_time')";



$res=mysqli_query($con, $insert_query);


echo "<code id=\"mycode\"> /localhost/url/$ttt </code>";

       
       
       
       
       
       
       
   }
       
      
       
   
 
    ?>
    
    
    
    
</div>
</div>
<div class="slogan">
	<b>Note: Do not forget to add ' http:// ' at the beginning.</b><br>
URL Compressor is a service that takes long URLs and squeezes them into fewer characters to make a link that is easier to share tweet email to friends.</div>
</div>
</div>
</header>



    
    
    
<footer>
<div class="container">

<div class="copyright text-center">
Designed and Developed by Subhajit Mondal </div>
</div>
</footer>

 
    
    
    
    
    
    <script src="./index_files/jquery.min.js.download"></script>
     <script src="./index_files/wow.min.js.download"></script>
    <script src="./index_files/jquery.particleground.min.js.download"></script>
<script src="./index_files/front.js.download"></script><script src="./index_files/app.js.download"></script>
</body></html>





<style>

code {
		border-radius: 8px;
		border: solid 0.5px;
		font-family: "Courier New", monospace;
		font-size: 1.7em;
		margin: 0 0.25em;
		padding: 0.25em 0.65em;
        color: black;
	}




</style>
