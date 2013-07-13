<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
	<?php
	if(isset($_POST['enviar'])) {
	require_once('recaptchalib.php');
  $privatekey = "6LeZaeQSAAAAAFP2rR80rz2JbiHVvUSHGiiIcKFv";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");	
} else {
    $nome = $_POST['nome'];
		$email = $_POST['email'];
		$msg = $_POST['msg'];
		$assunto = $_POST['assunto'];
		$para = "contato@infodicasdaweb.com";
		if(mail($para, $assunto, $email, $msg)){
			echo "MENSAGEM ENVIADA COM SUCESSO";
		} else {
			echo "ERRO NO ENVIO DA MENSAGEM";
		}
}    
		
	}	
	?>	
</head>
	<body>
	<h1>Contato</h1>
<p>Deixe aqui sua dúvida, reclamação ou sugestão</p>
    

<form action="" method="POST">
    
       
		<input type="text" name="nome" placeholder="Nome" size="50" required="true" ><br />
		<input type="text" name="email" placeholder="E-mail" size="50" required="true" ><br />
		<input type="text" name="assunto" size="50" placeholder="Assunto"><br /> 
		<textarea rows="5" cols="30" name="msg" placeholder="Digite sua mensagem aqui..."></textarea><br />
		<?php
        require_once('recaptchalib.php');
        $publickey = "6LeZaeQSAAAAAOfEzDpQt8A5UUiE70rZcTid4HRn";
        echo recaptcha_get_html($publickey);
    ?>
		<input type="submit" name="enviar" value="ENVIAR MENSAGEM">
	</form>
	</body>
</html>
