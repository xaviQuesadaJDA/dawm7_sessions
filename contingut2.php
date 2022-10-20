<?php 
    session_start(); 
    if (!isset($_SESSION['usuari'])){
        header('Location: ./login.php');
        quit();
    }
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contingut 01</title>
    <style>
        h1{
            text-align: center;
        }

        .user_name{
            text-align: right;
            color: red;
        }
        nav ul li{
            display: inline;
            background-color: lightGrey;
            padding: 1em;
            margin: 0.075em;
        }
        a:link{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="contingut1.php">A pàgina 1</a>
            <li><a href="desconnectar.php">Desconnectar</a>
        </ul>
    </nav>
    <div class="user_name"> 
    <?php echo $_SESSION['usuari']; ?>
    </div>
    <h1>Aquesta és la segona pàgina de contingut</h1>
</body>
</html>