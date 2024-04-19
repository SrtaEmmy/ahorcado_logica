<?php 
require_once('conn.php'); 
require_once('helpers.php');

$ids = get_id_categorias();

if(isset($_GET['id_categoria'])){
    session_start();
    session_destroy(); //destruir la sesion de la partida anterior

    session_start();
    $_SESSION['id_categoria'] = $_GET['id_categoria'];
    header('Location: jugando.php');
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
    
    <h2>Elige el grupo de palabras</h2>
    <?php foreach($ids as $id): ?>

        <form action="">
            <input type="hidden" name="id_categoria" value="<?php echo $id ?>">
            <input type="submit" value="<?php echo get_nombre_categoria($id) ?>">
        </form>

    <?php endforeach ?>



</body>
</html>