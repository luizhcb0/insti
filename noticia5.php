<!DOCTYPE html>
<html>

<head>
<title>Instituto DIA</title>
<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta charset="UTF-8">
	<!--[if IE]><link rel="shortcut icon" href="img/favicon.ico"><![endif]-->
<link rel="icon" href="img/logo.ico">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/youtubegallerywall.css" />

<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/youtubegallerywall.js"></script>


<script>

$(document).ready(function() {
  $(".slider").load("slider");
	$('#youtubelist').youtubegallery();
	$(".evento").fadeIn(5000);



	$(".menu_button a").hover(function(){
	$(this).stop().animate({ top: -12 }, 'medium');
	},function() {
	$(this).stop().animate({ top: 0 }, 'medium');
	});


});

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8&appId=157582347643146";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

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
            <li class="active"><a href="noticias">Notícias</a></li>
            <li><a href="videos">Vídeos</a></li>
            <li><a href="contato">Contato</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
  </nav>

  <section class="container-fluid" id="content">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="panel_boots panel-default box">
  				<div class="panel-heading curso_titulo">
    				<h3 class="panel-title"><b>Notícias</b></h3>
  				</div>
  				<div class="panel-body">


            <div class="row">
      				<div class="col-sm-12">

                <ul class="list-group">
									<li class="list-group-item">
                    <div class="media noticia">
                      <div class="row">
                        <div class="media-body">
                          <div class="col-sm-12">
                            <div class="row">
                              <div class="col-sm-12 noticia_title">
                                <h4 class="media-heading"><b>Projeto LIBRA</b></h4>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12 noticia_img" id="noticia_img_logo">
                                <img src="img/noticia5_grande.jpg" alt="Generic placeholder image">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12 noticia_text">
                                Reunião com Regina Lacerda, representante da LIBRA no Distrito Federal, com nosso diretor executivo Dr Luiz Teixeira e seu time, Paulo e Marcel Di Ângelo. Mediante parceria entre o Instituto Dia e a LIBRA - Liga das Mulheres Eleitoras do Brasil, será desenvolvido o Programa de Formação de Educação Social e Cidadania Política (PFEP). O Instituto DIA se propôs a colaborar na elaboração de um Plano de Trabalho voltado à captação de recursos que viabilizem a realização do PFEP.
                              </div>
                            </div>
                					</div>
                        </div>
                      </div>

          					</div>
                  </li>
								</ul>
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
