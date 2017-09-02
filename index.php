<!DOCTYPE html>

<html>

<head>
		<meta charset="UTF-8" lang="fr"/>
    <title>Test Expressions Régulières</title>
    <link href="./style.css" rel="stylesheet" type="text/css" />

</head>


<body>

	<H1>Expressions Régulières</H1>

	<H2>Formulaire de test</H2>

	<form name="expression_reg" method="POST">

		<p>
			<label for="exp">Expression régulière</label>
			<input type="text" name="exp" 
				value="<?php if (isset($_POST["exp"])) {
				echo $_POST["exp"];} ?>" />	
		</p>

		<p>
			<label for="chaine">Chaine à tester</label>
			<input type="text" name="chaine"
				value="<?php if (isset($_POST["chaine"])) {
				echo $_POST["chaine"];} ?>">
		</p>

		<p>
			<label for="replace">Chaine remplacement</label>
			<input type="text" name="replace"
				value="<?php if (isset($_POST["replace"])) {
				echo $_POST["replace"];} ?>">
		</p>
		<p>

			<input type="submit" name="OK"/>
		</p>

	</form>

	<H2>Resultat preg_match</H2>

	<p>
		<?php 
		if  ( isset($_POST["exp"]) & isset($_POST["chaine"])  ){

				if (!isset($_POST["chaine"])) {
					$chaine="";
				} else $chaine = $_POST["chaine"];

				$matches=array();

				if (preg_match($_POST["exp"] , $chaine, $matches) ) 
						{ ?> 
						<p class="vrai"> <?php echo "TRUE, expression vérifiée."; ?> </p> <?php 
						print_r($matches);
						} 
						else {?>
						<p class="faux"> <?php echo "FALSE, non verifié dans l'expression";  ?> </p> <?php }
		}?>
	</p>






</body>
