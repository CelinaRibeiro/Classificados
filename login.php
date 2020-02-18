<?php
use classes\Usuarios;
require 'pages/header.php'; ?>

<div class="container">
<h1>Login</h1><br/>

<?php 
    require 'classes/Usuarios.php';
    $u = new Usuarios();
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = addslashes($_POST['email']);
        $senha = $_POST['senha'];
        
        if ($u->login($email, $senha)) {
            ?>
            <script type="text/javascript">window.location.href="./";</script>
            <?php
        }else{
            ?>
            <div class="alert alert-danger">
            	Usuário e/ou senha incorretos!
            </div>
            <?php 
        }
    }
?>

    <form method="POST">
    	<div class="form-group">
     		<label for="email">Email:</label>
        	<input type="email" name="email" id="email" class="form-control" placeholder="nome@exemplo.com"/>
    	</div>
    	<div class="form-group">
    		<label for="senha">Senha:</label>
           	<input type="password" name="senha" id="senha" class="form-control"/>
        </div>
        
    	<input type="submit" value="Fazer Login" class="btn btn-light" />
    </form>
</div>

<?php require 'pages/footer.php'; ?>