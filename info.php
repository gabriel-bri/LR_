<div class="info">
<div class="info-contato">
	<h1 data-color="white">INSCREVER-SE</h1>
	<form method="post" action="<?php $server = $_SERVER['PHP_SELF']; echo($server);?>" id="formulario">
		<input type="text" name="nome" placeholder="Nome">
		<input type="text" name="sobrenome" placeholder="Sobrenome">
		<input type="email" name="email" placeholder="E-mail">
		<input type="number" name="idade" placeholder="Idade">
		<input type="submit" value="Enviar mensagem" name="bot">
	</form>
	<p>Contato: contato@lr.com.br</p>
	<?php 
		if (isset($_POST['bot'])) {
			$nome = $_POST['nome'];
			$sobrenome = $_POST['sobrenome'];
			$email = $_POST['email'];
			$idade = $_POST['idade'];
			
			@$conexao = mysqli_connect("localhost", "root", "root", "participantes");
			mysqli_set_charset($conexao, "utf8");
			if (!$conexao) {
				echo "<script>swal('Problemas na conexão', 'Algo de errado aconteceu', 'error');</script>";
				die();
			}

			else {


			$insercao = "INSERT INTO dados VALUES (default, '{$nome}', '{$sobrenome}', '{$email}', '{$idade}')";

			mysqli_query($conexao, $insercao);
			if (mysqli_affected_rows($conexao) > 0) {
				echo "<script>swal('Obrigado', 'Seu cadastro foi concluído com sucesso', 'success');</script>";
				mysqli_close($conexao);
			}


			else {
				echo "<script>swal('Cadastro não concluído', 'Algo de errado aconteceu', 'error');</script>";
			}
			}
		}
	?>
</div>
</div>