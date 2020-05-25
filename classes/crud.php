<?php
class crud {

public function list() {
        include 'connection_db.php';
        $query_list_users =  "SELECT id_usuarios ,nome , email FROM usuarios";
        $list_users = mysqli_query($conexao, $query_list_users);
    ?>
        <div class="container mt-4">               
            <table id="example" class="table table-striped table-bordered" style="width:100%">

           <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Operação</th>
            </tr>
    <?php
    while($users = mysqli_fetch_array($list_users)){
            
        $id_usuarios = utf8_encode($users['id_usuarios']);
        $nome = utf8_encode($users['nome']);
        $email = utf8_encode($users['email']);
    ?>
    <tr>
                <td><?php echo $id_usuarios;  ?></td>
                <td><?php echo $nome;  ?></td>
                <td><?php echo $email;  ?></td>
                <td>
                <a href="edit_user.php?editar=<?php echo $id_usuarios; ?>"><h5 style="font-size: 15px; "><strong>Editar</strong></h5></a>
                <a href="system.php?id_usuarios=<?php echo $id_usuarios; ?>"><h5 style="font-size: 15px; "><strong>Excluir</strong></h5></a>
                </td>
    </tr>
    
    <?php
           
    
}

}

public function select_by_id_user() {
    include 'connection_db.php';
    $id =  $_GET['editar'];
    $query_select_by_id_user = "SELECT * FROM usuarios WHERE id_usuarios = '$id' ";
    $select_user = mysqli_query($conexao, $query_select_by_id_user);
    while($linha = mysqli_fetch_array($select_user)){
            $id_usuarios = utf8_encode($linha['id_usuarios']);
            $nome = utf8_encode($linha['nome']);
            $email = utf8_encode($linha['email']);
        }
    ?>
    <div class= "container">
        <h1>Editar</h1>
			<form method="post" action="edit_user.php">                                

                <div class="col-12">
				<input type="hidden" name="id_usuarios" value="<?php echo $id_usuarios; ?>">
                </div>
                               
				<br>
                <div class="col-6">
				<label class="">Nome</label><br>
				<input class="form-control" type="text" name="nome" placeholder="" value="<?php echo $nome; ?>">
                </div>

				<br>
                <div class="col-6">
				<label class="">Email</label><br>
				<input class="form-control" type="text" name="email" placeholder=""  value="<?php echo $email; ?>">
                </div>

                <br>
                <div class="col-6">
                <button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="system.php" class="btn btn-primary ml-2">Voltar</a>
                </div>
                               
            </form>
            </div>
    <?php
}

public function update_users(){
    include 'connection_db.php';
    $id_usuarios = $_POST['id_usuarios'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query_edit_produto = "UPDATE usuarios SET id_usuarios='$id_usuarios', nome='$nome', email='$email' WHERE id_usuarios = '$id_usuarios'";    
    mysqli_query($conexao, $query_edit_produto);
    header('location:system.php');
}

public function new_user(){
    include 'connection_db.php';
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "INSERT INTO usuarios(nome, email, password) VALUES('$nome', '$email', '$password')";

mysqli_query($conexao, $query);

header('location:system.php');

}

public function delete_user(){
    include 'connection_db.php';
$id_usuarios = $_GET['id_usuarios'];

$query = "DELETE FROM usuarios WHERE id_usuarios = $id_usuarios";

mysqli_query($conexao, $query);

header('location:sistema_interno.php');
}



}