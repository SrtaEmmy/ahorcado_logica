<?php 
 
function get_id_categorias(){
    require('conn.php');
    $sql = "SELECT id FROM categorias";
    $result = $connection->query($sql);

    $ids = array();
    while($row = $result->fetch_assoc()){
        $ids[] = $row['id'];
    }
    return $ids;
}  


function get_nombre_categoria($id_cat){
    require('conn.php');
    $sql = "SELECT categoria FROM categorias WHERE id = '$id_cat'";
    $result = $connection->query($sql);

    $row = $result->fetch_assoc();
    return $row['categoria'];
}


function get_palabras($id_cat) {
    require('conn.php');
    
    $palabras = array();
    switch ($id_cat) {
        case 1:
            $sql = "SELECT palabra FROM cortas";
            break;
        case 2:
            $sql = "SELECT palabra FROM medianas";
            break;
        case 3:
            $sql = "SELECT palabra FROM largas";
            break;
    }
    
    // ejecutar consulta
    $result = $connection->query($sql);

        if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $palabras[] = $row['palabra'];
            }
            return $palabras;
        }
}



 
 
?>