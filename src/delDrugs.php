<?php

    include('./config.php');

    $id = $_GET['id'];

    $sql = "DELETE FROM tb_drugs WHERE id = '$id'";

    $res = mysqli_query( $conn, $sql);

    if($res)
    {
        header('location:index.php');
    }
    else{
        header("Location:error.php");
    }

?>