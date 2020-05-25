<?php
include 'header.html';
include 'classes/connection_db.php';
session_start();
if(isset($_SESSION['login'])){
    if(isset($_GET['id_usuarios'])){
        include 'classes/crud.php';
        $obj = new Crud();
        $link = $obj->delete_user();
        header('location:system.php');
        }else{
    
    include 'classes/crud.php';
    $obj = new Crud();
    $link = $obj->list();


?>
        </table>
    <a href="new_user.php" class="btn btn-primary mt-2">Adicionar Usuário</a>
    <a href="classes/logout.php" class="btn btn-primary mt-2">Logout</a>

    </div> 
<?php



    
    
    }}else{
        header('location:index.php');
    }
    include 'footer.html';
?>

    