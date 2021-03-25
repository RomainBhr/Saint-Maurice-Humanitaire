</div>
</table>
<br>
  <table class="table3"> 
  <br>
  <tr>
  <td> <center>
  <p>- <a href="#ancre4" id=a><b>Retournez en haut de votre page</b></a> -</p>
 <p>- <a href="mention.php" id=a><b>Mentions légales</b></a> © Saint Maurice Humanitaire |</p>
 <p span id=orange>Nous contacter ? <?php if (is_authentified())
{
	echo "<a href='contacter2.php'><b>Cliquez ici</b></a> ";
}

if(!is_authentified())
{
	echo " <a href='contacter2.php'><b>Cliquez ici</b></a>";
}

?>

 </center>
 
 </table>
 </body>
</html>