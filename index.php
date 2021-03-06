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
<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>

<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="js/youtubegallerywall.js"></script>


<script>

$(document).ready(function() {
  $(".slider").load("slider");
	$('#youtubelist').youtubegallery();
	/*$(".evento").fadeIn(5000);*/

  $('.testando').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 580,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
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

<style>

.video-container {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 30px; height: 0; overflow: hidden;
}

.video-container iframe,
.video-container object,
.video-container embed {
	padding:6px;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>


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
            <li class="active"><a href="">Home</a></li>
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
            <li><a href="contato">Contato</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
  </nav>

	<section class="slider">
	</section>


	<section class="container-fluid" id="content">
		<div class="row">
			<div class="col-sm-12 index label_index">Últimos Eventos</div>
		</div>
		<div class="testando" style="margin-bottom:20px;">
      
      <div class="col-sm-4 index evento"><a target="_blank" href="csbp"><img src="img/evento6.jpg"></a>
        <p>Capacitação Estratégica: Recursos Trabalhistas de acordo com o Novo CPC. <a target="_blank" href="csbp">Saiba mais...</a></p>
      </div>
      
      <div class="col-sm-4 index evento"><a target="_blank" href="https://www.trt5.jus.br/node/21806"><img src="img/evento5.jpg"></a>
				<p>TRT da Bahia promove o 4º Encontro sobre Acessibilidade com a participação de Lars Grael. <a target="_blank" href="https://www.trt5.jus.br/node/21806">Saiba mais...</a></p>
      </div>
			<div class="col-sm-4 index evento"><a target="_blank" href="http://csbbrasil.org.br/blog/2016/09/08/o-mundo-nao-suporta-mais-o-sistema-de-hegemonia-colonial-diz-lorenzo-carrasco/"><img src="img/evento1.jpg"></a>
				<p>Palestra com Prof. Gáudio Ribeiro na Executiva Nacional da CSB: Conjuntura internacional e desafios para o movimento laboral. <a target="_blank" href="http://csbbrasil.org.br/blog/2016/09/08/o-mundo-nao-suporta-mais-o-sistema-de-hegemonia-colonial-diz-lorenzo-carrasco/">Saiba mais...</a></p>
			</div>
			<div class="col-sm-4 index evento"><a target="_blank" href="http://portal.trt15.jus.br/trt15-2.1?p_p_auth=xeeGXi8N&amp;p_p_id=101&amp;p_p_lifecycle=0&amp;p_p_state=maximized&amp;p_p_mode=view&amp;_101_struts_action=%2Fasset_publisher%2Fview_content&amp;_101_assetEntryId=2788037&amp;_101_type=content&amp;_101_urlTitle=seminario-realizado-em-campinas-discute-polemicas-do-direito-sindical&amp;redirect=http%3A%2F%2Fportal.trt15.jus.br%2Ftrt15%3Fp_p_id%3D3%26p_p_lifecycle%3D0%26p_p_state%3Dmaximized%26p_p_mode%3Dview%26_3_groupId%3D0%26_3_keywords%3Dga%25C3%25BAdio%26_3_struts_action%3D%252Fsearch%252Fsearch%26_3_redirect%3D%252F"><img src="img/evento2.jpg"></a>
				<p>Prof. Gáudio Ribeiro de Paula e Ministros do TST discutem polêmicas do Direito Sindical em seminário realizado no TRT-15. <a target="_blank" href="http://portal.trt15.jus.br/trt15-2.1?p_p_auth=xeeGXi8N&amp;p_p_id=101&amp;p_p_lifecycle=0&amp;p_p_state=maximized&amp;p_p_mode=view&amp;_101_struts_action=%2Fasset_publisher%2Fview_content&amp;_101_assetEntryId=2788037&amp;_101_type=content&amp;_101_urlTitle=seminario-realizado-em-campinas-discute-polemicas-do-direito-sindical&amp;redirect=http%3A%2F%2Fportal.trt15.jus.br%2Ftrt15%3Fp_p_id%3D3%26p_p_lifecycle%3D0%26p_p_state%3Dmaximized%26p_p_mode%3Dview%26_3_groupId%3D0%26_3_keywords%3Dga%25C3%25BAdio%26_3_struts_action%3D%252Fsearch%252Fsearch%26_3_redirect%3D%252F">Saiba mais...</a>
				</p>
			</div>
			<div class="col-sm-4 index evento"><a target="_blank" href="https://www.trt5.jus.br/node/22475"><img src="img/evento4.jpg"></a>
				<p>'Mulheres continuam sofrendo ataques sistemáticos', afirma Contardo Calligaris. <a target="_blank" href="https://www.trt5.jus.br/node/22475">Saiba mais...</a></p>
      </div>

		</div>


			<div class="row row-noticias">
				<div class="col-sm-8" id="noticias_label">
          			<div class="label_index index">
            			Notícias
          			</div>
        		</div>
				<div class="col-sm-8 noticias">
					<div class="media noticia_index">
  					<a class="media-left" href="noticia1">
    					<img class="media-object" src="img/noticia1.jpg" alt="Generic placeholder image">
  					</a>
  					<div class="media-body">
    					<h4 class="media-heading"><b>Entrevista sobre abusos domésticos</b></h4>
    					Entrevista do professor Gáudio Ribeiro de Paula, Presidente do Instituto DIA, ao Jornal da Justiça sobre o tema "Abusos Domésticos".
							<br><br><button type="button" class="btn btn-primary btn-sm" onclick="window.location='noticia1';">Leia mais</button>
  					</div>
					</div>

					<div class="media noticia_index">
  					<a class="media-left" href="noticia2">
    					<img class="media-object" src="img/noticia2.jpg" alt="Generic placeholder image">
  					</a>
  					<div class="media-body">
    					<h4 class="media-heading"><b>Impactos do novo CPC na Justiça do Trabalho</b></h4>
    					Aula presencial e por vídeo. Conferência sobre o tema "Panorama geral dos impactos do novo CPC na Justiça do Trabalho".
							<br><br><button type="button" class="btn btn-primary btn-sm" onclick="window.location='noticia2';">Leia mais</button>
  					</div>
					</div>

					<div class="media noticia_index">
  					<a class="media-left" href="noticia3">
    					<img class="media-object" src="img/noticia3.jpg" alt="Generic placeholder image">
  					</a>
  					<div class="media-body">
    					<h4 class="media-heading"><b>Intervenção da Justiça do Trabalho nas Relações Sindicais</b></h4>
    					Ministro Douglas Alencar (TST) ministra palestra sobre o tema "Intervenção da Justiça do Trabalho nas Relações Sindicais".
							<br><br><button type="button" class="btn btn-primary btn-sm" onclick="window.location='noticia3';">Leia mais</button>
  					</div>
					</div>

					<div id="mais_noticias">
						<button type="button" class="btn btn-primary btn-sm" onclick="window.location='noticias';">Mais Notícias</button>
					</div>

				</div>


				<div class="col-sm-4 index label_index" id="facebook_label">
					Facebook
				</div>


				<div class="col-sm-4 index" id="facebook">
					<div class="fb-page" data-href="http://www.facebook.com/institutodia/" data-tabs="timeline" data-width="436" data-height="428" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
				</div>


			</div>




		<div class="row">
			<div class="col-sm-12 index label_index">
				Vídeos
			</div>
		</div>

    <div class="testando">
      <div class="col-sm-4">
        <div class="video-container">
              <iframe class="viemo" src='https://player.vimeo.com/video/179200155' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="video-container">
              <iframe src='http://player.vimeo.com/video/181045870' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="video-container">
              <iframe src="http://player.vimeo.com/video/179200153" frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="video-container">
              <iframe src="http://www.youtube.com/embed/dTEP8p7ZFew" frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="video-container">
              <iframe src="http://www.youtube.com/embed/ASAxRJcmJ0o" frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
      </div>


    </div>

		<div class="row">
			<div class="col-sm-12 index">
				<div id="mais_noticias">
					<button type="button" class="btn btn-primary btn-sm" onclick="window.location='videos';">Mais Vídeos</button>
				</div>
			</div>
		</div>

	</section>

		<!-- The content of your page would go here. -->

    <?php 
  	readfile("footer.php");
  	?>

</body>
</html>
