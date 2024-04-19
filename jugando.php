<?php 
require_once('helpers.php'); 
session_start();

$id_cat = $_SESSION['id_categoria'];
$palabras = get_palabras($id_cat);
var_dump($id_cat);

// inicializar palabra random
if (!isset($_SESSION['palabra_aleatoria'])) {
    $_SESSION['palabra_aleatoria'] = $palabras[array_rand($palabras)];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>jugando</h1>

    <div>
        <img id="foto" src="" alt="img" style="width: 300;">
    </div>


    <div id="espacios">
        <?php for ($i = 0; $i < strlen($_SESSION['palabra_aleatoria']); $i++): ?>
            <span id='letra<?php echo $i?>'>_</span>
        <?php endfor ?>
    </div>


    <div id="teclado">
        <?php for ($codigo=ord('A'); $codigo<= ord('Z'); $codigo++): 
              $letra = chr($codigo) ?>

                <button onclick="send_letra('<?php echo $letra ?>', '<?php echo $_SESSION['palabra_aleatoria'] ?>')"><?php echo $letra ?></button>
        <?php endfor; ?>
    </div>


    <!-- cerrar sesion -->
    <form action="logout.php" method="post">
        <input type="hidden" name="logout">
        <input type="submit" value="cerrar sesion">
    </form>


    <script src="ui.js"></script>
</body>
</html>