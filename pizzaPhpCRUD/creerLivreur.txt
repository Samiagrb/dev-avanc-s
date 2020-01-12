<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="pizza.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

    <a class='list btn btn-info' href='index.php'>Retour à la liste</a>

        <div class="container">
		<form action="recup.php" method="post" enctype="multipart/form-data">
			<h1>Formulaire Création Pizza</h1>
  			<div class="form-group">
    			<label>Nom de la pizza :</label>
    			<input type="text" class="form-control" name ="nom" id="nom" required>
 			</div>
  			<div class="form-group">
    			<label>Description :</label>
    			<textarea class="form-control" name="description" id="description" rows="6" required></textarea>
 			</div>
  			<div class="form-group">
                <label>Inserer la photo :</label>
    			<input class="form-control" type="file" name="photo" id="photo">
  			</div>
  			<div class="form-group">
    			<label>Tarif (euros):</label>
    			<input type="number" class="form-control" name="tarif" id="tarif" required>
 			</div>
  			<button type="submit" class="btn btn-default">Créer une pizza</button>
		</form>

</body>
</html>