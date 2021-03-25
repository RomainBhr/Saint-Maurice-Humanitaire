<!--debut_pahe.php-->
<!Doctype html>
<html lang='fr'>
	<head>
		<title>Saint Maurice Humanitaire</title>
<style>	
body { background-image:url(http://rboehler.bts-sio.com/image/fond.PNG);Background-position: center center; }
 p { font-family:cursive }
 a{ color:#EAB210; font-weight:bold; text-decoration:none; font-family:cursive; }
 a:hover{ text-decoration:overline underline; color:#249B08; }
table { margin:auto; width:00px; width:0%;padding:5px;     

border-style: solid;
border-width: 3px;
border-color: 	#249B08; 

caption-side:bottom;
border-radius:20px;
border-radius:30px 30px 30px 30px;
    background-color: black;
    color: white;
background: rgba(10, 10, 10, 0.89);

}

thead th { background-color:#249B08;}
tbody th { background-color:#FF0000 ; border-radius:12px 12px 12px 12px}
tbody th { background-color:#249B08}
td { border-radius:0px 0px 0px 0px;border-width: 2px;  } 
hr {
  border: none;
  border-bottom: 1px solid #249B08; 
}


#s2 { background-image:url(https://www.girondins33.com/storage/breves/jour-j-pour-le-tirage-de-l-europa-league-1529439816.jpg); }
#s1 { background-image:url(http://img.over-blog-kiwi.com/1/49/54/19/20180711/ob_e928d7_2018-nouveau-logo-uefa-football-brandi.jpg); Background-position: center center; border-radius:0px 15px 0px 0px;background-size:cover;
 }

#orange { color:#EAB210 ; font-family:cursive;  }
#orange1 { color:#EAB210 ; font-family:cursive; background-color: #000000; }

#rouge { color:red ;background-color: #000000; }


        } 
#ligue1 { background-image:url(http://www.parisfans.fr/wp-content/uploads/2016/02/Ligue-1-%E2%80%93-Pr%C3%A9sentation-de-la-26%C3%A8me-journ%C3%A9e-pour-le-PSG-turnover-et-batailles-europ%C3%A9ennes.jpg);Background-position: center;background-size:cover;Background-position: center center; border-radius:15px 0px 0px 0px;}
#td1 { border-radius:15px 0px 0px 15px; } 
#td2 { border-radius:0px 15px 15px 0px;  } 
#td3 { border-radius:15px 15px 15px 15px;  } 
#basg { border-radius:0px 0px 15px 0px;  }
#basd { border-radius:0px 0px 0px 15px;  }
#bas { border-radius:0px 0px 15px 15px;border-right: 0px;border-left: 0px;  }
#td6 { border-radius:15px 15px 15px 15px;  }
#haut { border-radius:15px 15px 0px 0px;  }
#gauche { border-radius:0px 0px 0px 0px;border-left: 0px;border-bottom: 0px ;border-top: 0px; }
#gauche1 { border-radius:0px 0px 15px 15px;border-left: 0px; border-top: 0px; }
#droite{ border-radius:0px 0px 0px 0px;border-right: 0px;border-left: 0px; border-bottom: 0px; border-top: 0px;  }
#droite1{ border-radius:15px 15px 0px 0px;border-right: 0px; border-bottom: 0px;  }
#dg{ border-radius:15px 15px 15px 15px;border-right: 0px;border-left: 0px;  }
#dgb{ border-radius:15px 15px 15px 15px;border-right: 0px;border-left: 0px; border-bottom: 0px; }
#tout{ border-right: 0px; border-left: 0px; border-bottom: 0px; border-top: 0px;  }
td#a {
    display:flex;
    min-height:200px;
}

.roundedImage{
    overflow:hidden;
    -webkit-border-radius:250px;
    -moz-border-radius:250px;
    border-radius:250px;
    width:300px;
    height:300px;
    position: center center;

}

div#bandeau {
	width:600px;
	height:50px;
	background-color:#00CCFF;
	}
div#contenu {
	width:600px;
	height:400px;
	background-color:#FFCC00;
	}
div#piedpage {
	width:600px;
	height:50px;
	background-color:#33FF99;
	clear:both;
	}
	div#menu {
	float:left;
	width:100px;
	height:400px;
	background-color:#FF6699;
	float:left;
	}
	
</style>
</head>
	<body>
	
	<?php
	$CO = mysqli_connect("127.0.0.1","rboehler",                                                                                                                                                                                                 "Kingman21",
	"rboehler_articles")or die (myslqi_connect_error());
	?>

<?php if (is_authentified())
{
	echo "--<a href='compte.php' id=a> Gestion du compte </a> --<a href='deco.php' id=a> Déconextion </a> ";
}

if(!is_authentified())
{
	echo "--<a href='login.php' id=a> Inscription </a> --<a href='aut.php' id=a> Connection</a>";
}
?>
<?php
function is_authentified() { return isset($_COOKIE['user_id']); } ?>



<div id="bandeau">Ceci est le bandeau</div>
<div id="contenu">Ceci est le contenu</div>
<div id="piedpage">Ceci est le pied de page</div>
<div id="menu">Ceci est le menu</div>

