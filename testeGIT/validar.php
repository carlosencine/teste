<?php
require_once('recaptchalib.php');
$privatekey = "6LftauQSAAAAAHfFJDTNk8qY6d1ptWwOWS0_iyHP";
$resp = recaptcha_check_answer($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);
if($resp->is_valid) {
    die ("O código preenchido não foi aceito..."."(reCAPTCHA error: ". $resp->error. ")");
} else {
    echo "Mensagem enviada com sucesso!";
} 

?>

