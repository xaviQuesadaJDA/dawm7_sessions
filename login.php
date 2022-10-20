<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        h1{
            text-align: center;
        }
        .missatge_error{
            color = "red";
        }
    </style>
</head>
<body>
    <h1>Pàgina de login</h1>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nom_usuari = $_POST['usuari'];
        $paraula_pas = $_POST['password'];

        if ($paraula_pas == $nom_usuari){
            $_SESSION['usuari'] = $nom_usuari;
            header('location: ./contingut1.php');
            quit();
        } else{
            $_SESSION['usuari'] = NULL;
            echo '<p class="missatge_error">Si us plau, verifica les dades introduïdes</p>';
        }
    }
?>
    <form action="login.php" method="POST">
        <label for="usuari">Usuari: </label>
        <input type="text" name="usuari" />
        <label for="password">Paraula de pas: </label>
        <input type="password" name="password" />
        <input type="submit" value="envia"  />
    </form>
</body>
</html>