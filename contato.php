<!DOCTYPE html>
<html>


<head>
	<title>Instituto DIA</title>
	<!--[if IE]><link rel="shortcut icon" href="img/favicon.ico"><![endif]-->
	<link rel="icon" href="img/logo.ico">
<meta charset="UTF-8">
<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.js"></script>

<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

<script>

$(document).ready(function() {
  $("#mapa").load("mapa");

});

</script>

</head>

<body>

	<section class="header">
		<div id="azul"></div>
		<div id="branco"></div>
		<div id="logo">
			<a href="index"><img src="img/logo_menor.png"></a>
		</div>
	</section>

	<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="158" role="navigation">
      <div class="container-fluid">
				<div id="linkedin_icon">
					<a target="_blank" href="http://www.linkedin.com/company/10913462?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A10913462%2Cidx%3A2-1-2%2CtarId%3A1478792619694%2Ctas%3Ainstituto%20duc"><img src="img/linkedin_icon.png"></a>
				</div>
				<div id="twitter_icon">
					<a target="_blank" href="http://twitter.com/DiaContato"><img src="img/twitter_icon.png"></a>
				</div>
				<div id="fb_icon">
					<a target="_blank" href="http://www.facebook.com/institutodia/"><img src="img/fb_icon_fb.png"></a>
				</div>
				<div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index">Home</a></li>
						<li class="dropdown">
          		<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Institucional<span class="caret"></span></a>
          		<ul class="dropdown-menu">
            		<li><a href="quem_somos">Quem somos</a></li>
            		<li><a href="equipe">Equipe</a></li>
          		</ul>
        		</li>
						<li><a href="cursos">Cursos e Palestras</a></li>
            <li><a href="noticias">Notícias</a></li>
						<li><a href="videos">Vídeos</a></li>
            <li class="active"><a href="">Contato</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
  </nav>



	<section class="container-fluid" id="content">
		<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
		<div class="panel_boots panel-default box">
  		<div class="panel-heading">
    		<h3 class="panel-title">Contato</h3>
  		</div>
  		<div class="panel-body">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<form method="post" action="processa_contato">
							<div class="form-group">
    						<label for="nome" style="color:#005a9c;">Nome</label>
    						<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
  						</div>
  						<div class="form-group">
    						<label for="email" style="color:#005a9c">Email</label>
    						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
  						</div>
  						<div class="form-group">
    						<label for="telefone" style="color:#005a9c;">Telefone</label>
    						<input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
  						</div>
  						<div class="form-group">
    						<label for="mensagem" style="color:#005a9c;">Mensagem</label>
								<textarea class="form-control" rows="3" id="mensagem" name="mensagem" placeholder="Mensagem"></textarea>
  						</div>
  						<button type="submit" class="btn btn-primary">Enviar</button>
						</form>
					</div>
				</div>
  		</div>
		</div>
		</div>
		</div>


		<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
		<div class="panel_boots panel-default box">
  		<div class="panel-heading">
    		<h3 class="panel-title">Telefones</h3>
  		</div>
  		<div class="panel-body">
				<div class="row">
					<div class="col-sm-5 telefones">
						<p><a href="mailto:contato@institutodia.com.br">contato@institutodia.com.br</a></p>
						<p>(61) 3306-1061</p>
						<p>(61) 9558-5000</p>
						<p>(61) 9157-6541</p>
						<p>(71) 9304-5741 – Região Nordeste</p>
					</div>
					<div class="col-sm-7" id="mapa">

					</div>
				</div>
  		</div>
		</div>
		</div>
		</div>

	</section>
	
	<?php 
	readfile("footer.php");
	?>

</body>
</html>
