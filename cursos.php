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
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>

	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>

	<script>

$(document).ready(function() {
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

/*
$(document).ready(function() {
	$('#show_hide').click(function() {
		$('#curso2').slideToggle(600);
	});
});
*/
function toggleDiv(divId) {
	$("#"+divId).slideToggle(600);
	$("#"+divId).css({ 'display': "-webkit-box" });
}

</script>

<style>

/****************CUROS**************/

#curso1, #curso2, #curso3, #curso4, #curso5, #curso6, #curso7, #curso8,
#curso9, #curso10, #curso11, #curso12, #curso13, #curso14, #curso15,
#palestra1, #palestra2, #palestra3, #palestra4, #palestra5, #palestra6, #palestra7, #palestra8,
#palestra9, #palestra10, #palestra11, #palestra12, #palestra13, #palestra14, #palestra15 {
	display:none;
	background-color: #fff;
	border: 1px solid #ddd;
}

@media (min-width:768px) {
	#curso1 a img, #curso2 a img, #curso3 a img, #curso4 a img,
	#curso5 a img, #curso6 a img, #curso7 a img, #curso8 a img,
	#curso9 a img, #curso10 a img, #curso11 a img, #curso12 a img,
	#curso13 a img, #curso14 a img, #curso15 a img,
	#palestra1 a img, #palestra2 a img, #palestra3 a img, #palestra4 a img,
	#palestra5 a img, #palestra6 a img, #palestra7 a img, #palestra8 a img,
	#palestra9 a img, #palestra10 a img, #palestra11 a img, #palestra12 a img,
	#palestra13 a img, #palestra14 a img, #palestra15 a img {
		width:60%;
		border-radius: 3px;
	}
}

@media (max-width:767px) {
	#curso1 a img, #curso2 a img, #curso3 a img, #curso4 a img,
	#curso5 a img, #curso6 a img, #curso7 a img, #curso8 a img,
	#curso9 a img, #curso10 a img, #curso11 a img, #curso12 a img,
	#curso13 a img, #curso14 a img, #curso15 a img,
	#palestra1 a img, #palestra2 a img, #palestra3 a img, #palestra4 a img,
	#palestra5 a img, #palestra6 a img, #palestra7 a img, #palestra8 a img,
	#palestra9 a img, #palestra10 a img, #palestra11 a img, #palestra12 a img,
	#palestra13 a img, #palestra14 a img, #palestra15 a img {
		width:98%;
		border-radius: 3px;
	}
}


a.list-group-item:hover,
button.list-group-item:hover,
a.list-group-item:focus,
button.list-group-item:focus {
	color: #fff;
	background-color: #005a9c;
	border-color: #337ab7;

}

.curso-img {
	padding:10px;
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
            <li><a href="index">Home</a></li>
						<li class="dropdown">
          		<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Institucional<span class="caret"></span></a>
          		<ul class="dropdown-menu">
            		<li><a href="quem_somos">Quem somos</a></li>
            		<li><a href="equipe">Equipe</a></li>
          		</ul>
        		</li>
						<li class="active"><a href="cursos">Cursos e Palestras</a></li>
            <li><a href="noticias">Notícias</a></li>
						<li><a href="videos">Vídeos</a></li>
            <li><a href="contato">Contato</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
  </nav>



	<section class="container-fluid" id="content">

		<div class="row">
			<div class="col-sm-12 index label_index" id="inscricoes-label">
				Inscrições Abertas
			</div>
		</div>

		<div class="testando">

			<div class="col-sm-3 index curso-inscricao">
				<div class="row">
					<div class="col-sm-12 curso-titulo">
						<h4><a href="recurso-especial">Recurso Especial: Admissibilidade de acordo com o Novo CPC</a></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<a href="recurso-especial">
							<img src="img/recurso-especial.jpg">
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 curso-desc">
						<p>Curso voltado ao estudo dos requisitos de admissibilidade do Recurso Especial no Novo CPC.</p>
					</div>
				</div>
			</div>

			<div class="col-sm-3 index curso-inscricao">
				<div class="row">
					<div class="col-sm-12 curso-titulo">
						<h4><a href="peticao-sentenca">Da Petição Inicial à Sentença: O procedimento comum no Novo CPC</a></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<a href="peticao-sentenca">
							<img src="img/procedimento-comum.jpg">
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 curso-desc">
						<p>Curso visando atualização do procedimento comum em razão da vigência do novo Código de Processo Civil.</p>
					</div>
				</div>
			</div>

			<div class="col-sm-3 index curso-inscricao">
				<div class="row">
					<div class="col-sm-12 curso-titulo">
						<h4><a href="recursos">Recursos Trabalhistas de acordo com o novo CPC</a></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<a href="recursos">
							<img src="img/cpc_min.jpg">
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 curso-desc">
						<p>Curso prático e estratégico de recursos trabalhistas de acordo com o novo Código de Processo Civil.</p>
					</div>
				</div>
			</div>

			<div class="col-sm-3 index curso-inscricao">
				<div class="row">
					<div class="col-sm-12 curso-titulo">
						<h4><a href="roma">Roma - Estrasburgo - Luxemburgo<br>21 de Maio a 2 de junho de 2017</a></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<a href="roma">
							<img src="img/roma_min.jpg">
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 curso-desc">
						<p>Curso de alto nível cultural e científico, a realizar-se na Universidade de Roma “Tor Vergata”.</p>
					</div>
				</div>
			</div>

			<div class="col-sm-3 index curso-inscricao">
				<div class="row">
					<div class="col-sm-12 curso-titulo">
						<h4><a href="redacao">Redação Estratégica de Peças Trabalhistas</a></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<a href="redacao">
							<img src="img/redacao_img.jpg">
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 curso-desc">
						<p>Curso de redação estratégica de peças trabalhistas.</p>
					</div>
				</div>
			</div>



		</div>



		<div class="row">
			<div class="col-sm-6">
			<div class="panel_boots panel-default box">
				<div class="panel-heading">
					<h3 class="panel-title">Cursos In-Company</h3>
				</div>
				<div class="panel-body">
					<div class="list-group">

						<a href="javascript:toggleDiv('curso2');" class="list-group-item">
							<h4>Sustentação Oral</h4>
						</a>
						<div id="curso2">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-12 curso-img">
										<a href="sustentacao">
											<img src="img/oral_min.jpg">
										</a>
									</div>
									</div>
								<div class="row">
									<div class="col-sm-12 curso-desc">
										<p>Teoria e prática sobre as técnicas utilizadas nas interações diárias da prática jurídica.</p>
									</div>
								</div>
							</div>
				    </div>

						<a href="javascript:toggleDiv('curso3');" class="list-group-item">
							<h4>Temas atuais de Direito Material e Processual do Trabalho</h4>
						</a>
						<div id="curso3">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-12 curso-img">
										<a href="temas-atuais-direito-material">
											<img src="img/material_min.jpg">
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 curso-desc">
										<p>Uma visão panorâmica da evolução dos principais temas de Direito Material e Processual do Trabalho</p>
									</div>
								</div>
							</div>
					  </div>

						<a href="javascript:toggleDiv('curso4');" class="list-group-item">
							<h4>Estudo sobre jornada de trabalho e controle de frequência</h4>
						</a>
						<div id="curso4">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-12 curso-img">
										<a href="jornada">
											<img src="img/jornada_min.jpg">
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 curso-desc">
										<p>Estudo sobre as possibilidades e limites quanto ao controle e à flexibilização da jornada de trabalho no âmbito da contratante.</p>
									</div>
								</div>
							</div>
					  </div>

						<a href="javascript:toggleDiv('curso5');" class="list-group-item">
							<h4>O recurso de revista e o recurso ordinário à luz da Lei 13.015/14</h4>
						</a>
						<div id="curso5">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-12 curso-img">
										<a href="revista">
											<img src="img/recursos_min.jpg">
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 curso-desc">
										<p>Uma visão ampla e sistemática dos principais temas relativos à interpretação da Lei 13.015/14.</p>
									</div>
								</div>
							</div>
					  </div>

						<a href="javascript:toggleDiv('curso6');" class="list-group-item">
							<h4>Novo CPC na Justiça do Trabalho</h4>
						</a>
						<div id="curso6">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-12 curso-img">
										<a href="cpc-justica">
											<img src="img/cpc_min.jpg">
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 curso-desc">
										<p>Uma visão panorâmica e sistemática das alterações do Código de Processo Civil.</p>
									</div>
								</div>
							</div>
					  </div>

						<a href="javascript:toggleDiv('curso7');" class="list-group-item">
							<h4>Nova Lei N° 13.303/2016 e o Regime Jurídico Das Empresas Estatais</h4>
						</a>
						<div id="curso7">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-12 curso-img">
										<a href="estatais">
											<img src="img/estatais_min.jpg">
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 curso-desc">
										<p>As recentes inovações introduzidas no regime jurídico das empresas públicas, das sociedades de economia mista e de suas subsidiárias.</p>
									</div>
								</div>
							</div>
					  </div>

						<a href="javascript:toggleDiv('curso8');" class="list-group-item">
							<h4>Gestão Do Orçamento Público</h4>
						</a>
						<div id="curso8">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-12 curso-img">
										<a href="orcamento">
											<img src="img/orcamento_min.jpg">
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 curso-desc">
										<p>Capacitação de servidores públicos nas áreas de planejamento e orçamento.</p>
									</div>
								</div>
							</div>
					  </div>

						<a href="javascript:toggleDiv('curso9');" class="list-group-item">
							<h4>Processo Legislativo e Decisório</h4>
						</a>
						<div id="curso9">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-12 curso-img">
										<a href="legislativo">
											<img src="img/legislativo_min.jpg">
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 curso-desc">
										<p>Apresentação de mecanismos do processo legislativo decisório no Congresso Nacional.</p>
									</div>
								</div>
							</div>
					  </div>

						<a href="javascript:toggleDiv('curso10');" class="list-group-item">
							<h4>Português Jurídico</h4>
						</a>
						<div id="curso10">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-12 curso-img">
										<a href="portugues">
											<img src="img/portugues_min.jpg">
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 curso-desc">
										<p>Curso voltado para a compreensão e elaboração de textos e peças jurídicas com mais facilidade e eficiência.</p>
									</div>
								</div>
							</div>
					  </div>


					<a href="javascript:toggleDiv('curso11');" class="list-group-item">
							<h4>Licitações e Contratos</h4>
						</a>
						<div id="curso11">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-12 curso-img">
										<a href="licitacoes">
											<img src="img/licitacoes_min.jpg">
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 curso-desc">
										<p>Capacitação de servidores públicos sobre os dispositivos legais referentes às licitações públicas e a contratos administrativos.</p>
									</div>
								</div>
							</div>
					  </div>


						<a href="javascript:toggleDiv('curso12');" class="list-group-item">
							<h4>Avaliação de Imóveis Urbanos Segundo Norma ABNT NBR 14.653</h4>
						</a>
						<div id="curso12">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-12 curso-img">
										<a href="imoveis">
											<img src="img/imoveis_min.jpg">
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 curso-desc">
										<p>Apresentação dos mecanismos de Avaliação de Imóveis a profissionais de engenharia civil e arquitetura designados para realização ou assistência de perícias judiciais.</p>
									</div>
								</div>
							</div>
					  </div>

						<a href="javascript:toggleDiv('curso13');" class="list-group-item">
							<h4>Formação e Capacitação de Pregoeiro</h4>
						</a>
						<div id="curso13">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-12 curso-img">
										<a href="pregao">
											<img src="img/pregao_min.jpg">
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 curso-desc">
										<p>Capacitação de servidores públicos sobre dispositivos legais referentes ao Pregão.</p>
									</div>
								</div>
							</div>
					  </div>

						<a href="javascript:toggleDiv('curso14');" class="list-group-item">
							<h4>Inspeção Predial NBR 16.280-2014</h4>
						</a>
						<div id="curso14">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-12 curso-img">
										<a href="inspecao">
											<img src="img/inspecao_min.jpg">
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 curso-desc">
										<p>Curso com o objetivo de fornecer conhecimentos teóricos e práticos da atividade do perito judicial e assistentes técnicos, bem como da inter-relação da área jurídica com a área técnica.</p>
									</div>
								</div>
							</div>
					  </div>

						<a href="javascript:toggleDiv('curso15');" class="list-group-item">
							<h4>Flexibilidade do Direito Trabalhista na experiência comparada - Sucessos e Fracassos</h4>
						</a>
						<div id="curso15">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-12 curso-img">
										<a href="flexibilidade">
											<img src="img/flexibilidade_min.jpg">
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 curso-desc">
										<p>Curso voltado para uma ampla análise sobre flexibilidade.</p>
									</div>
								</div>
							</div>
					  </div>
					</div>
				</div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="panel_boots panel-default box">
		  		<div class="panel-heading">
		    		<h3 class="panel-title">Palestras</h3>
		  		</div>
		  		<div class="panel-body">
						<ul class="list-group">

							<a href="javascript:toggleDiv('palestra1');" class="list-group-item">
								<h4>Clóvis de Barros Filho : Ética</h4>
							</a>
							<div id="palestra1">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12 curso-img">
											<a href="clovis">
												<img src="img/clovis.jpg">
											</a>
										</div>
									</div>
								</div>
						  </div>

							<a href="javascript:toggleDiv('palestra2');" class="list-group-item">
								<h4>Gáudio Ribeiro de Paula : Teletrabalho</h4>
							</a>
							<div id="palestra2">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12 curso-img">
											<a href="teletrabalho">
												<img src="img/gaudio_curso.jpg">
											</a>
										</div>
									</div>
								</div>
						  </div>

							<a href="javascript:toggleDiv('palestra3');" class="list-group-item">
								<h4>Márcio Fernandes : Filosofia da Gestão</h4>
							</a>
							<div id="palestra3">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12 curso-img">
											<a href="filosofia-gestao">
												<img src="img/marcio-fernandes.jpg">
											</a>
										</div>
									</div>
								</div>
						  </div>

							<a href="javascript:toggleDiv('palestra4');" class="list-group-item">
								<h4>Almir Pazzianotto : O Direito do Trabalho em um contexto de crise</h4>
							</a>
							<div id="palestra4">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12 curso-img">
											<a href="direito-trabalho-contexto-crise">
												<img src="img/almir-pazzianotto.jpg">
											</a>
										</div>
									</div>
								</div>
						  </div>

							<a href="javascript:toggleDiv('palestra5');" class="list-group-item">
								<h4>Guilherme Dray : Teletrabalho</h4>
							</a>
							<div id="palestra5">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12 curso-img">
											<a href="dray-teletrabalho">
												<img src="img/guilherme-dray.jpg">
											</a>
										</div>
									</div>
								</div>
						  </div>

							<a href="javascript:toggleDiv('palestra6');" class="list-group-item">
								<h4>Otávio Brito Lopes : Ação Civil Pública</h4>
							</a>
							<div id="palestra6">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12 curso-img">
											<a href="acao-civil-publica">
												<img src="img/otavio.jpg">
											</a>
										</div>
									</div>
								</div>
						  </div>

							<a href="javascript:toggleDiv('palestra7');" class="list-group-item">
								<h4>Luís Camargo / Gáudio Ribeiro de Paula / Otávio Brito Lopes : Enquadramento Sindical</h4>
							</a>
							<div id="palestra7">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12 curso-img">
											<a href="enquadramento-sindical">
												<img src="img/luis-gaudio-otavio.jpg">
											</a>
										</div>
									</div>
								</div>
						  </div>

							<a href="javascript:toggleDiv('palestra8');" class="list-group-item">
								<h4>Gáudio Ribeiro de Paula : Questões trabalhistas relevantes para o segmento de telecomunicações</h4>
							</a>
							<div id="palestra8">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12 curso-img">
											<a href="trabalhistas-telecomunicacoes">
												<img src="img/gaudio_curso.jpg">
											</a>
										</div>
									</div>
								</div>
						  </div>

							<a href="javascript:toggleDiv('palestra9');" class="list-group-item">
								<h4>Douglas Alencar Rodrigues : Negociação Coletiva</h4>
							</a>
							<div id="palestra9">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12 curso-img">
											<a href="negociacao-coletiva">
												<img src="img/douglas-alencar.jpg">
											</a>
										</div>
									</div>
								</div>
						  </div>

							<a href="javascript:toggleDiv('palestra10');" class="list-group-item">
								<h4>Eugênio Mussak : Desenvolvimento de Lideranças</h4>
							</a>
							<div id="palestra10">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12 curso-img">
											<a href="liderancas">
												<img src="img/mussak.jpg">
											</a>
										</div>
									</div>
								</div>
						  </div>

							<a href="javascript:toggleDiv('palestra11');" class="list-group-item">
								<h4>Lars Grael : Superação – Viver é como velejar, vale vencer!</h4>
							</a>
							<div id="palestra11">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12 curso-img">
											<a href="superacao">
												<img src="img/grael.jpg">
											</a>
										</div>
									</div>
								</div>
						  </div>
<!--
							<a href="javascript:toggleDiv('palestra12');" class="list-group-item">
								<h4>Otávio Brito Lopes : Ação Civil Pública</h4>
							</a>
							<div id="palestra12">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12 curso-img">
											<a href="acao-civil-publica-2">
												<img src="img/otavio.jpg">
											</a>
										</div>
									</div>
								</div>
						  </div>
-->
							<a href="javascript:toggleDiv('palestra13');" class="list-group-item">
								<h4>Otávio Brito Lopes : Inquérito Civil Público</h4>
							</a>
							<div id="palestra13">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12 curso-img">
											<a href="inquerito-civil-publico">
												<img src="img/otavio.jpg">
											</a>
										</div>
									</div>
								</div>
						  </div>

							<a href="javascript:toggleDiv('palestra14');" class="list-group-item">
								<h4>Otávio Brito Lopes : Termo de Ajustamento de Conduta</h4>
							</a>
							<div id="palestra14">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12 curso-img">
											<a href="termo-ajustamento-conduta">
												<img src="img/otavio.jpg">
											</a>
										</div>
									</div>
								</div>
						  </div>


						</ul>
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
