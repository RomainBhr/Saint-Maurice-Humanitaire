<!--debut_pahe.php-->
<!Doctype html>
<html lang='fr'>
	<head>
		<title>FAN DE L'OM</title>
<style>	
body { background-image:url(http://rboehler.bts-sio.com/fond.PNG);Background-position: center center; }
 p { font-family:cursive }
 a{ color:#EAB210; font-weight:bold; text-decoration:none; font-family:cursive; }
 a:hover{ text-decoration:overline underline }
table { margin:auto; width:00px; width:0%;padding:5px;     

border-style: solid;
border-width: 5px;
border-color: 	#249B08; 

caption-side:bottom;
border-radius:20px;
border-radius:30px 30px 30px 30px;
    background-color: black;
    color: white;
opacity:0.85;

}

thead th { background-color:#249B08;}
tbody th { background-color:#FF0000 ; border-radius:12px 12px 12px 12px}
tbody th { background-color:#249B08}
td { border-radius:0px 0px 0px 0px;  } 


#s2 { background-image:url(https://www.girondins33.com/storage/breves/jour-j-pour-le-tirage-de-l-europa-league-1529439816.jpg); }
#s1 { background-image:url(http://img.over-blog-kiwi.com/1/49/54/19/20180711/ob_e928d7_2018-nouveau-logo-uefa-football-brandi.jpg); Background-position: center center; border-radius:0px 15px 0px 0px;background-size:cover;
 }

#bleuf { color:#EAB210 ;background-color: #000000; }

#rouge { color:red ;background-color: #000000; }


        } 
#ligue1 { background-image:url(http://www.parisfans.fr/wp-content/uploads/2016/02/Ligue-1-%E2%80%93-Pr%C3%A9sentation-de-la-26%C3%A8me-journ%C3%A9e-pour-le-PSG-turnover-et-batailles-europ%C3%A9ennes.jpg);Background-position: center;background-size:cover;Background-position: center center; border-radius:15px 0px 0px 0px;}
#td1 { border-radius:15px 0px 0px 15px;  } 
#td2 { border-radius:0px 15px 15px 0px;  } 
#td3 { border-radius:15px 15px 15px 15px;  } 
#td4 { border-radius:0px 0px 15px 0px;  }
#td5 { border-radius:0px 0px 0px 15px;  }
#td6 { border-radius:15px 15px 15px 15px;  }
td#a {
    display:flex;
    min-height:200px;
}

div#b {
    margin:auto;
}
</style>
</head>
	<body>
	<?php
	$CO = mysqli_connect("sql.bts-sio.com","sig","sig","films");
	?>
<table border>
  <tr>
     <td id=td1><center><img width=100 src="http://rboehler.bts-sio.com/logo.PNG"></center>

     <td id=td2> 
<h1 style="text-align:center"><p id="bleuf"><u>Saint Maurice Humanitaire</u></p></h1>
</table>

<table>
  <tr>
   <td span id=td6>
     <i><strong>Menu :</strong></i> 
<a href="index.php" id=a>Accueil </a>
--<a href="multi.php" id=a> Calculatrice </a>
--<a href="films.php" id=a> Films </a>
--<a href="deviner.php" id=a> Deviner un nombre </a>

<?php if (is_authentified())
{
	echo "--<a href='compte.php' id=a> Gestion du compte </a> --<a href='deco.php' id=a> DÃ©conextion </a> ";
}

if(!is_authentified())
{
	echo "--<a href='login.php' id=a> Inscription </a> --<a href='aut.php' id=a> Connection</a>";
}
?>

 </table>
<table border>
  <tr>
<td id=td6 width=900><div style=min-height:50px>
<?php
function is_authentified() { return isset($_COOKIE['user_id']); } ?>