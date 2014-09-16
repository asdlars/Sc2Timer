<script>
  /*
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45253602-3', 'drop.cl');
  ga('send', 'pageview');
*/
</script>

<?php
$lang = $_GET["lang"];
if (!$lang) {
	$lang = en;
}

$langs = array(
	//'ar' => 'arabic', 
	'es' => 'espanol', 
	'en' => 'english', 
	'de' => 'deutsch', 
	'nl' => 'nederlands', 
	'pt' => 'português', 
	'it' => 'italiano', 
	'fr' => 'francois', 
	'eo' => 'esperanto'
	//'hu' => 'hungaro', 
	//'jp' => 'japanese', 
	//'kr' => 'korean'
	);

$t = $_GET["t"];
if ($t) {

	// Create connection
	/*$con=mysqli_connect("localhost","egp","egp.drop.500","sedice");

	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	 } else {
	 	mysqli_query($con,"INSERT INTO querys (t, l) 
VALUES ('$t','$lang')");
	 	mysqli_close($con);
	 }
	 */


	$t = str_replace(" ", "%20", $t);
	header('Content-Type: audio/mpeg');
	$mp3 = file_get_contents("http://translate.google.com/translate_tts?ie=UTF-8&q=".$t."&tl=".$lang);
	//echo "http://translate.google.com/translate_tts?q=".$t."&tl=en";
	echo $mp3;
} else { ?>
<h1>Se dice...</h1>
<p>No recuerdas como se pronuncia alguna palabra? No hay problema, solo sigue los pasos y escucha =).</p>
<h3>Escribe lo que quieras escuchar</h3>
<form action="audio.php" method="get">
	<label>Texto</label>
	<input type="text" id="text" name="t" />
	<h3>y en que idioma quieres escucharlo</h3>
	<label for="lang">Idioma</label>
	<select id="lang" name="lang">
		<option value="es"> Espa&nacute;ol </option>
		<option value="en"> Ingl&eacute;s </option>
		<option value="nl" selected> Holandes </option>
		<option value="de"> Alem&aacute;n </option>
		<option value="it"> Italiano </option>
		<option value="pt"> Portugu&eacute;s </option>
		<option value="fr"> Franc&eacute;s </option>
	</select>
	 <input type="submit" value="Dale ;)">
</form>

<?php } ?>