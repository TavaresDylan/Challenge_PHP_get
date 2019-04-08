<!DOCTYPE html>
<html>
<head>
	<title>Php Get</title>
	<meta charset="utf-8">
</head>
<body>


	<form method="Get">
		<label>Nom  :</label>
			<input type="text" name="nom" required="true" value="Votre nom*">
		</br />
		<label>Prénom :</label>
			<input type="text" name="prenom" required="true" value="Votre prénom *">
		</br />
		<label>N° de Rue :</label>
			<input type="number" name="num" value="Votre numéro de rue">
		</br />
		<label>Type de voie :</label>
			<input type="text" name="voie" value="Votre type de voie">
		</br />
		<label>Nom de rue :</label>
			<input type="text" name="rue" required="true" value="Votre rue*">
		</br />
		<label>Code postal :</label>
			<input type="number" name="cp" required="true" value="Votre code postal*">
		</br />
		<label>Ville</label>
			<input type="text" name="ville" required="true" value="Votre ville">
		</br />		
				<input type="submit">Envoi</input>
	</form>
<?php
	//var_dump($_GET);
if (isset($GET_['nom']) && isset($_GET['prenom']) && isset($_GET['rue']) && isset($_GET['cp'])&& isset($_GET['ville'])) {
	echo 'Bonjour'.$_GET['nom'].''.$_GET['prenom'].' vous habitez le '.$_GET['rue'].''.$_GET['cp'].' à '.$_GET['ville'];
}
var_dump($_GET);
echo 'Bonjour '.$_GET['nom'].' '.$_GET['prenom'].' vous habitez le '.$_GET['num'].' '.$_GET['voie'].' '.$_GET['rue'].' '.$_GET['cp'].' à '.$_GET['ville']






?>



</body>
</html>