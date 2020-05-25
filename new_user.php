<?php
include 'header.html';
include 'classes/connection_db.php';
session_start();
if(isset($_SESSION['login'])){
    if(isset($_POST['id_usuarios'])){
        include 'classes/crud.php';
        $obj = new Crud();
        $link = $obj->new_user();
        header('location:system.php');
        }else{
    ?>
    <div class= "container">
        <h1>Cadastrar</h1>
			<form method="post" action="new_user.php">                                

                <div class="col-12">
				<input type="hidden" name="id_usuarios">
                </div>
                               
				<br>
                <div class="col-6">
				<label class="">Nome</label><br>
				<input class="form-control" type="text" name="nome" id="nome" >
                </div>

				<br>
                <div class="col-6">
				<label class="">Email</label><br>
				<input class="form-control" type="text" name="email" id="email">
                </div>

                <br>
                <div class="col-6">
				<label class="">Senha</label><br>
				<input class="form-control" type="text" name="password" id="password">
                </div>

                <br>
                <div class="col-6">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a href="system.php" class="btn btn-primary ml-2">Voltar</a>
                </div>
                               
            </form>
            </div>
        
<?php
}
}else{
    header('location:index.php');
}
include 'footer.html';
?>