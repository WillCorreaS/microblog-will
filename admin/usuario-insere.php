<?php 
require_once "../inc/cabecalho-admin.php";
//Importando as funções de manipulação dos usuários
require_once "../inc/funcoes-usuarios.php";

//Codigo para detectar se o botão 'INSERIR' for ativado
if(isset($_POST['inserir'])){
	//Aqui colocaremos a captura dos dados inseridos no campos do formulário
// variável  -  requerimento do formulário(POST ou GET)  - campo do formulário      
	$nome              = $_POST                                ['nome'];
	$email             = $_POST                                ['email'];
	$tipo              = $_POST                                ['tipo'];

	//Capturando e criptografando a senha
	$senha             = password_hash ($_POST ['senha'], PASSWORD_DEFAULT);

	//Chamar a função para ela receber os parâmetros
	inserirUsuario($conexao, $nome, $email, $tipo, $senha);

	//Redirecionando para a lista de usuários
	header("location:usuarios.php");
}

?>


<div class="row">
	<article class="col-12 bg-white rounded shadow my-1 py-4">
		
		<h2 class="text-center">
		Inserir novo usuário
		</h2>
				
		<form autocomplete="off" class="mx-auto w-75" action="" method="post" id="form-inserir" name="form-inserir">

			<div class="mb-3">
				<label class="form-label" for="nome">Nome:</label>
				<input class="form-control" type="text" id="nome" name="nome" required>
			</div>

			<div class="mb-3">
				<label class="form-label" for="email">E-mail:</label>
				<input class="form-control" type="email" id="email" name="email" required>
			</div>

			<div class="mb-3">
				<label class="form-label" for="senha">Senha:</label>
				<input class="form-control" type="password" id="senha" name="senha" required>
			</div>

			<div class="mb-3">
				<label class="form-label" for="tipo">Tipo:</label>
				<select class="form-select" name="tipo" id="tipo" required>
					<option value=""></option>
					<option value="editor">Editor</option>
					<option value="admin">Administrador</option>
				</select>
			</div>
			
			<button class="btn btn-primary" id="inserir" name="inserir"><i class="bi bi-save"></i> Inserir</button>
		</form>
		
	</article>
</div>


<?php 
require_once "../inc/rodape-admin.php";
?>

