<!DOCTYPE html>
<html>
<head>
	<title>Php Get</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 <link href="form-validation.css" rel="stylesheet">
	 <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">
</head>
<body>

   
<div class="container-fluid bg-primary p-3">

	<form method="Get"> 
		<div class="form-row border border-dark p-3 rounded">

        	<div class="col-md-6 mb-3 mt-3">
				<label>Nom  :</label>
					<input class="rounded" type="text" name="nom" required="true" value="Votre nom*" >
				</br />
			</div>

			<div class="col-md-6 mb-3 mt-3">
				<label>Prénom :</label>
					<input class="rounded" type="text" name="prenom" required="true" value="Votre prénom *">
				</br />
			</div>

			<div class="col-md-6 mb-3">
				<label>N° de Rue :</label>
					<input class="rounded" type="number" name="num" value="Votre numéro de rue">
				</br />
			</div>

			<div class="col-md-6 mb-3">
				<label>Type de voie :</label>
					<input class="rounded" type="text" name="voie" value="Votre type de voie">
				</br />
			</div>

			<div class="col-md-6 mb-3">
				<label>Nom de rue :</label>
					<input class="rounded" type="text" name="rue" required="true" value="Votre rue*">
				</br />
			</div>

			<div class="col-md-6 mb-3">
				<label>Code postal :</label>
					<input class="rounded" type="number" name="cp" required="true" value="Votre code postal*">
				</br />
			</div>

			<div class="col-md-6 mb-3">
				<label>Ville</label>
					<input class="rounded" type="text" name="ville" required="true" value="Votre ville">
				</br />
			</div>

						<input class="btn btn-outline-danger btn-lg btn-block" type="submit"></input>
		</form>
	</div>

<?php
	//var_dump($_GET);
if (isset($GET_['nom']) &&
    isset($_GET['prenom']) && 
    isset($_GET['rue']) && 
    isset($_GET['cp'])&& 
    isset($_GET['ville'])) {
	echo 'Bonjour'.$_GET['nom'].''.$_GET['prenom'].' vous habitez le '.$_GET['rue'].''.$_GET['cp'].' à '.$_GET['ville'];
}
var_dump($_GET);
echo 'Bonjour '.ucfirst($_GET['nom']).' '.ucfirst($_GET['prenom']).' vous habitez le '.$_GET['num'].' '.ucfirst($_GET['voie']).' '.ucfirst($_GET['rue']).' '.$_GET['cp'].' à '.ucfirst($_GET['ville']);

?>

</body>
</html>