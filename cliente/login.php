<?php
	session_start();
	
	/*====================================================
	 * Define como vai ficar gravado o usuário na sessão
	 *====================================================
	 */
	$session_key = 'cliente';
	
	/*====================================================
	 * Verifica se o cliente já está logado
	 *====================================================
	 */
	if(isset($_SESSION[$session_key]) && $_SESSION[$session_key]) {
		header('Location: index.php');
		exit;
	}
	
	/*====================================================
	 * Tentativa de login. Se der certo os dados do
	 * cliente são colocados na var $_SESSION['cliente']
	 * Caso contrário mostra um erro
	 *====================================================
	 */
	$login_error = false;
	if(isset($_POST['login'],$_POST['senha'],$_POST['_csrf'])) {
		if($_POST['_csrf'] === session_id()) {
			require __DIR__ . '/../classes/MPClient.php';
			require __DIR__ . '/../api/MPApi.php';
			
			if(MPClient::checkLogin($_POST['login'], $_POST['senha'])) {
				$_SESSION[$session_key] = MPClient::getClient($_POST['login']);
				if(!MPClient::setToken(MPApi::APP_NAME, $_SESSION[$session_key]->id, session_id(), 'cliente')) {
					$_SESSION = array();
					session_destroy();
					die('Erro no servidor: Nao foi possivel criar o token');
				}
				header('Location: index.php');
				exit;
			} else {
				$login_error = 'Usuário ou senha inválidos';
			}
		} else {
			$login_error = 'Sua sessão expirou, por favor, tente novamente';
		}
	}
	
?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Painel de Usuário</title>
    <link rel="stylesheet" href="resources/css/login.css">
</head>
<body>
<div id="container">
	<p id="chamada">
		Portabilidade e automação de serviços do PCM são a marca da nova geração do SIGMA ANDROID.
	</p>
	<a id="home" href="../index.php">Voltar para o site</a>
	<div id="form">
		<form action="" method="post" id="form_login">
			<input type="hidden" name="_csrf" value="<?=session_id();?>">
			
			<p style="font-size: 18px;">Entre na sua conta!</p>
			
			<label class="login" for="login">Usuário:</label><br>
			<input type="text" name="login" id="login" maxlength="50" class="block"><br>
	
			<label class="senha" for="senha">Senha:</label><br/>
			<input type="password" name="senha" id="senha" maxlength="50" class="block">
	
			<button type="submit">Entrar</button>
			
			<p>ou <a id="a-cadastro" href="../cadastro.php">Cadastre-se!</a></p>
		</form>
	</div>
	
	<?php if($login_error) { ?>
	<div id="erro"><?=$login_error;?></div>
	<?php } ?>

</div>
</body>
</html>
