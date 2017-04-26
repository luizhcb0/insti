<?php
header("Content-Type: text/html; charset=UTF-8", true);

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

// Inclui o arquivo class.phpmailer.php localizado na pasta class
require_once("class/class.phpmailer.php");

$sucesso = file_get_contents('contato-enviado.html');
$body="<!DOCTYPE html>

<html>
<head>

	<!-- Mobile Specific Meta -->
	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'>
	<meta charset='UTF-8'>
		<!--[if IE]><link rel='shortcut icon' href='img/favicon.ico'><![endif]-->
<style type='text/css'>

body {
	margin: 0;
	text-align: center;
	font-family: sans-serif;
	font-size: 11pt;
	/*minimun-height: 2000px;*/
	background: #fff;
}

.box {
	margin-top: 10px;
}

#content {
	width:96%;
}


.container-fluid {
	padding-right: 15px;
	padding-left: 15px;
	margin-right: auto;
	margin-left: auto;
}
.row {
	margin-right: -15px;
	margin-left: -15px;
}

@media (min-width: 768px) {
  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
    float: left;
  }
  .col-sm-8 {
    width: 66.66666667%;
  }
	.col-sm-12 {
    width: 100%;
  }
	.col-sm-offset-2 {
    margin-left: 16.66666667%;
  }
}

.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid #ddd;
}

.list-group {
  padding-left: 0;
  margin-bottom: 20px;
}
</style>
</head>

<body>

  <div style='width:100%; height:171px; display:block;'>
	   <div id='logo' style='position: absolute; top: 2px; text-align: center;'>
			<a href='http://institutodia.com.br'><img src='cid:logo_dia'></a>
		</div>
	<div>

	<section class='container-fluid' id='content' style='width:96%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;'>
		<div class='row' style='margin-right: -15px; margin-left: -15px;'>
			<div class='col-sm-12'>
				<div class='box' style='margin-top: 10px;'>
          <div class='row' style='margin-right: -15px; margin-left: -15px;'>
      			<div class='col-sm-12'>
              <ul class='list-group'>
								<li class='list-group-item' style='color:#005a9c;'>
									<p>Prezado(a)   Sr(a) $nome,</p>
								  <p>Gostariamos de agradecer pelo seu contato. Em breve iremos respondê-lo.</p>
                </li>
      				</ul>
    				</div>
    			</div>
				</div>
			</div>
		</div>
	</section>

  <section class='container-fluid' id='content' style='width:96%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;'>
		<div class='row' style='margin-right: -15px; margin-left: -15px;'>
			<div class='col-sm-12'>
				<div class='box' style='margin-top: 10px;'>
          <div class='row' style='margin-right: -15px; margin-left: -15px;'>
      			<div class='col-sm-12'>
              <ul class='list-group'>
								<li class='list-group-item' style='color:#000; text-align:center;'>
                <p>
                  <span>SHN Qd 02, Bloco F,<br></span>
                  <span>Edifício Executive Office Tower, sala 405,<br></span>
                  <span>CEP 70702-906 - Brasília, DF</span>
                </p>
                </li>
      				</ul>
    				</div>
    			</div>
				</div>
			</div>
		</div>
	</section>

	</body>
</html>
";


// Inicia a classe PHPMailer
$mail = new PHPMailer(true);

// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP

try {

		 $mail->CharSet = "UTF-8";
		 $mail->SMTPDebug = 1;
     $mail->Host = "smtp.institutodia.com.br"; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
     $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
     $mail->Port       = 587; //  Usar 587 porta SMTP
     $mail->Username = "eventos@institutodia.com.br"; // Usuário do servidor SMTP (endereço de email)
     $mail->Password = "Dia2016"; // Senha do servidor SMTP (senha do email usado)

     $mail->SetFrom('eventos@institutodia.com.br', 'Contato pelo site Instituto DIA'); //Quem esta enviando
     $mail->Subject = "Contato pelo site Instituto DIA"; //Titulo do e-mail que sera enviado
     $mail->AddAddress("eventos@institutodia.com.br","Contato pelo site Instituto DIA"); //E-mail para a qual o e-mail sera enviado

     //Conteudo do e-mail
     $mail->Body = "<b>Nome:</b> ".$nome."<br>
                    <b>E-mail:</b> ".$email."<br>
                    <b>Telefone:</b> ".$telefone."<br><br>
                    <b>Mensagem:</b><br>".$mensagem."<br>";
     $mail->AltBody = $mail->Body;

     $enviadoCliente = $mail->send(); //Enviar

     $mail->ClearAllRecipients();
		 $mail->SetFrom('noreply@institutodia.com.br', 'Contato Instituto DIA'); //Quem ta enviando
	 	 $mail->AddAddress($email, $nome); //Quem vai receber
     //$mail->AddBCC('eventos@institutodia.com.br', 'Contato pelo formul&aacute;rio do site'); // C�pia Oculta
     $mail->Subject = "Contato Instituto Dia";
     $mail->AddEmbeddedImage('img/logo_menor.png', 'logo_dia');
     //$mail->msgHTML("");
     $mail->MsgHTML($body);
     $enviadoCliente = $mail->send(); //Enviar

     echo $sucesso;

    //caso apresente algum erro é apresentado abaixo com essa exceção.
    }catch (phpmailerException $e) {
      echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
}

?>
