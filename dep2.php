<!DOCTYPE html>
<html>
<head>
<meta  charset="utf-8">
<meta http-equiv="refresh" content="4; URL=http://www.saint-maurice-humanitaire.site/accueil2.php">
<title>Animation Text</title>
<style>
p{
	padding: 0;
	margin: 0;
	font-family:"Century Gothic", helvetica, arial, sans-serif;
}

body{
	background: #000;
}
.container{
	text-align: center;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 100%;
}

.text1{
	color: white;
	font-size: 60px;
	font-weight: 700;
	letter-spacing: 8px;
	margin-bottom: 10px;
	background: black;
	postion: relative;
	animation: text 3s 1;
}
.text2{
	font-size: 30px;
	color:#EAB210;
}
@keyframes text {
	0%{
		color: black
		margin-bottom:-10px;
	}
	30%{
		letter-spacing: 25px;
		margin-bottom: 10px
	}
	85%{letter-spacing: 8px;
	margin-bottom: -10px;
	}
}

</style>
</head>
<body>

<div class="container">
 <p class="text1">Bienvenue sur</p><br>
 <p class="text2">Saint Maurice Humanitaire</p>
 </div>
 
 
 

