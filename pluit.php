<!DOCTYPE html>

<html lang="fr">
    <head>
		<title>Saint Maurice Humanitaire</title>
		<meta charset="utf-8"/>
<style>

 body{
	 margin: 0;
	 padding: 0;
	 background: #34495e;
	   }
	   
	   .slidershow{
		   wdth: 700px;
		   height: 400px;
		   overflow: hidden;
	   }
	   
	   .middle{
		   position: absolute;
		   top: 50%;
		   left: 50;
		   transform: translate(-50%,-50%);
	   }
 
     .navigation{
		 position: absolute;
		 bottom: 20px
		 left: 50%;
		 transform: translateX(-50%);
		 display: flex;
	 }
	 .bar{
		 width: 50px;
		 height: 10px;
	 border: 2px solid #fff
	 margin: 6px;
	 cursor: pointer;
	 transition: 0.4s;
	 }
	 
	 .bar:hover{
		 background: #fff;
	 }
	 
	 input[name="r"]{
		 position: absolute;
		 visibility: hidden;
	 }
	 
	 .slides{
		 width: 500%;
		 height: 100%
		 display: flex;
	 }
	 
	 
	 .slide{
		 width: 20%;
		 transition: 0.6s;
	 }
	 
	 .slide img{
		 width: 100%;
		 height; 100%;
	 }
	 
	 #r1:checked ~ .s1{
		 margin-center: 0;
	 }
	 
	 #r2:checked ~ .s1{
		 margin-center: -20%;
	 }
	 
	 #r3:checked ~ .s1{
		 margin-center: -40%;
	 }
	 
	 #r4:checked ~ .s1{
		 margin-center: -60%;
	 }
	 
	 #r5:checked ~ .s1{
		 margin-center: -80%;
	 }
</style>
    </head>
    <body>
		<?php
	$CO = mysqli_connect("127.0.0.1","rboehler",                                                                                                                                                                                                 "Kingman21",
	"rboehler_articles")or die (myslqi_connect_error());
	?>

<div class="slidershow middle">


<div class="slides">
<input type="radio" name="r1" id="" checked>
<input type="radio" name="r2" id="">
<input type="radio" name="r3" id="">
<input type="radio" name="r4" id="">
<input type="radio" name="r5" id="">

<div class="slide s1">  
 <img src="image/n4.png" alt="">
 </div>
 
<div class="slide">  
 <img src="image/n2.png" alt="">
 </div>
 
<div class="slide">  
 <img src="image/n3.png" alt="">
 </div>

<div class="slide">  
 <img src="image/n3.png" alt="">
 </div>
 
<div class="slide">  
 <img src="image/n3.png" alt="">
 </div>
 
 
 </div>
 </div>
 
 
 <div class="navigation">
  <label for="r1" class="bar"></label>
   <label for="r2" class="bar"></label>
    <label for="r3" class="bar"></label>
	 <label for="r4" class="bar"></label>
	  <label for="r5" class="bar"></label>
	  </div>
	  </div>
	
 
	  </body>
</html>