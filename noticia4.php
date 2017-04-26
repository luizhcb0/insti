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
                                <h4 class="media-heading"><b>Conjuntura internacional e desafios para o movimento laboral</b></h4>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12 noticia_img">
                                <img src="img/noticia4_grande1.jpg" alt="Generic placeholder image">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12 noticia_text">
                                <b>Realidade europeia</b><br><br>
                                <p>No mesmo painel que debateu a “Conjuntura internacional e os desafios para o movimento laboral”, o advogado trabalhista Gáudio Ribeiro de Paula fez um panorama da realidade trabalhista e do sindicalismo na Europa. O profissional falou sobre a importância do Direito Comparado, que aborda as diversidades e semelhanças entre o direito de diferentes países.</p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-5 noticia_img_body">
                                <img src="img/noticia4_grande2.jpg" alt="Generic placeholder image">
                              </div>
                              <div class="col-sm-7 noticia_text">
                                <p>De acordo Gáudio, o movimento sindical europeu enfrenta atualmente um grande desafio. Os dados apresentados por ele mostraram que, embora alguns países do continente tenham registrado recuo nas taxas de trabalhadores sindicalizados nos últimos anos, há experiências de sucesso, como é o caso de Suécia, Noruega e Finlândia.</p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-7 noticia_text">
                                <p>Na Suécia, onde a taxa de sindicalização chega a 67%, o desempenho é resultado de uma atuação eficiente na conciliação de conflitos e na colaboração entre entidades sindicais e trabalhadores. “O sucesso das entidades sindicais nórdicas está no equilíbrio entre conflituosidade e operação”, explicou Gáudio, que é professor de Direito Processual do Trabalho da Universidade de Brasília (UnB).</p>
                              </div>
                              <div class="col-sm-5 noticia_img_body">
                                <img src="img/noticia4_grande3.jpg" alt="Generic placeholder image">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-5 noticia_img_body">
                                <img src="img/noticia4_grande4.jpg" alt="Generic placeholder image">
                              </div>
                              <div class="col-sm-7 noticia_text">
                                <b>Mobilização na crise</b><br><br>
                                <p>No caso específico do Brasil, o advogado também destacou o papel importante que o movimento sindical ainda tem para desempenhar, sobretudo no momento de crise enfrentado pelo País.</p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-7 noticia_text">
                                <p>“Um dos caminhos para desatar nós passa necessariamente pela atuação dos movimentos sindicais. No epicentro da crise, que é quando as preocupações econômicas se fazem sentir com maior ênfase nas relações de trabalho, os sindicatos podem efetivamente atuar nesse equilíbrio entre conflito e colaboração. Os sindicatos podem oferecer soluções criativas”, completou Gáudio.</p>
                              </div>
                              <div class="col-sm-5 noticia_img_body">
                                <img src="img/noticia4_grande5.jpg" alt="Generic placeholder image">
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
