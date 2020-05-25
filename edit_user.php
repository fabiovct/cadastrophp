<?php
include 'header.html';
include 'classes/connection_db.php';
session_start();
if(isset($_SESSION['login'])){
    include 'classes/crud.php';

    if(isset($_POST['id_usuarios'])){
        $obj = new Crud();
        $link = $obj->update_users();
        header('location:system.php');
        }else{
            $obj = new Crud();
            $link = $obj->select_by_id_user();
        }
}else{
    header('location:index.php');
}

include 'footer.html';

?>