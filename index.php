<!DOCTYPE html>

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
    
    




$rowSQL = mysqli_query( $con, "SELECT MAX( id ) AS max FROM main;" );               
$row = mysqli_fetch_array( $rowSQL );
$largestNumber = $row['max'];


mkdir($per.($largestNumber+1));                                                     
$direc=$per.($largestNumber+1)."/index.html";

$myfile= fopen($direc,'w') or die ("Unable to contact server");


$url=$get_value;                                                                 

$url2="<script>window.location.href='$url'</script>";                             


fwrite($myfile, $url2);                                                           

fclose($myfile);                                                




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



</style>
