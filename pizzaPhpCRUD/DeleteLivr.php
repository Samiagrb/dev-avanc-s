<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $numLivr = $_GET['numLivr'];
  

    try{
        $bdd = mysqli_connect('localhost', 'root', '', 'pizza');
        mysqli_set_charset($bdd,"utf8");

        $req="DELETE FROM livreur WHERE NroLivr=".$numLivr;

        echo $req;

      
         
        mysqli_query($bdd,$req);

        mysqli_close($bdd);

    }catch (Exception $e){
        echo "Erreur connection".$e;
    }

    echo "<script type='text/javascript'>document.location.replace('http://localhost/pizzaPhpCRUD/index3.php');</script>";
    ?>
</body>
</html>