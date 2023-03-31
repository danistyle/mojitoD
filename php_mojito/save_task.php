<?php

include("db.php");
if(isset($_POST['save_task'])){
    $title = $_POST['title'];
    $query = "INSERT INTO coctel(title) VALUES('$title')";
    $result = mysqli_query($conn, $query);
    if(!result){
        die("Query failed");
    }

    echo 'mojito guardado';
}
?>