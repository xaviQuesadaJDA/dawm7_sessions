,
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (empty($_SESSION['comptador'])) {
   $_SESSION['comptador'] = 1;
   $_SESSION['group'] = 'DAW2';
} else {
   $_SESSION['comptador']++;
}
?>

<p>
Hola, has vist aquesta pàgina <?php echo $_SESSION['comptador']; ?> vegades.<br>
ets del grup <?php echo $_SESSION['group']; ?>
</p>
<p>
<?php
echo phpinfo(); // Permet veure on es desen les dades de les sessions creades: session.save_path

?>
</p>
</body>
</html>