<?php
$emailTo = '<administrativo@segtaxi.com.br>';
$show_modal = false;
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name    = stripslashes(trim($_POST['name']));
    $email   = stripslashes(trim($_POST['email']));
    $phone   = stripslashes(trim($_POST['phone']));
    $message = stripslashes(trim($_POST['message']));

    $emailIsValid = preg_match('/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/', $email);

    if ($name && $email && $emailIsValid && $phone && $message) {
        $body = "Nome: $name <br /> Email: $email <br /> Telefone: $phone <br /> Mensagem: $message";

        $headers  = 'MIME-Version: 1.1' . PHP_EOL;
        $headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
        $headers .= "From: $name <$email>" . PHP_EOL;
        $headers .= "Return-Path: $emailTo" . PHP_EOL;
        $headers .= "Reply-To: $email" . PHP_EOL;
		
        mail($emailTo, "[Contato via Site]", $body, $headers);
        $emailSent = true;
	$show_modal = true;
    } else {
        $hasError = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mediclick</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo_redimensionada.png" rel="icon">
  <link href="assets/img/logo_redimensionada.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Hind+Madurai:wght@400;500;600;700&family=MuseoModerno:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HeroBiz - v2.4.0
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header style="display: flex; align-items: center; height: 9vh;" id="header" class="header mb1 fixed-top" data-scrollto-offset="0">
    <div style="width: 90%;" class="container-fluid d-flex align-items-center justify-content-around">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img class="img-fluid logo-sm " src="assets/img/logoMediclick.png" alt="logo mediclick nas cores laranja e azul">
        <br>
        <!--<h1>HeroBiz<span>.</span></h1>-->
      </a>

      <nav style="display: flex; align-items: center;" id="navbar" class="navbar">
        <ul>
            
          </li>
          <li><a class="nav-link scrollto" href="#hero-fullscreen">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
          <li><a class="nav-link scrollto" href="#pr2">Soluções</a></li>  
          <li><a class="nav-link scrollto" href="blog.html">Blog</a></li>
          <li><a class="nav-link scrollto" href="#cont1">Contato</a></li>
          <li style="margin-left: 3%; width: 60%;"><a style="text-align: center; font-size: 13px;" class="btn-getstarted scrollto" href="https://admin.mediclick.com.br/portal">Área restrita</a></li>
          
        </ul>
        <i style="margin-top: 1%;" class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->
      

    </div>
  </header><!-- End Header -->

    <!-- ======= Header ======= -->
    <header id="header1" class="header d1 fixed-top" data-scrollto-offset="0">
      <div style="width: 90%;" class="container-fluid d-flex align-items-left justify-content-between">
  
        <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img  class="img-fluid logo-sm " src="assets/img/logoMediclick.png" alt="logo mediclick nas cores laranja e azul">
          <!--<h1>HeroBiz<span>.</span></h1>-->
        </a>
  
        <nav id="navbar" class="navbar">
          <ul>
              
            </li>
            <li><a class="nav-link scrollto" href="index.html#hero-fullscreen">Home</a></li>
            <li><a class="nav-link scrollto" href="index.html#about">Sobre</a></li>
            <li><a class="nav-link scrollto" href="#pr1">Soluções</a></li>  
            <li><a class="nav-link scrollto" href="blog.html">Blog</a></li>
            <li><a class="nav-link scrollto" href="index.html#cont1">Contato</a></li>
            <li style="margin-left: 3%;"><a class="btn-getstarted scrollto" href="https://admin.mediclick.com.br/portal">Área restrita</a></li>
            
          </ul>
          <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav><!-- .navbar -->
        
  
      </div>
    </header><!-- End Header -->



    <div class="circle-container mb2">
      <div class="d-flex justify-content-center align-content-center">
        <p style="font-size: 18px;">Cuidar da sua saúde nunca <br> foi tão fácil e acessível</p>
      </div>

      <div class="circle circle1"></div>
      <div class="circle circle2"></div>
      <div class="circle circle3">
        <a href="https://youtu.be/q6EpFf5Chwk" class="glightbox btn-watch-video "><i style="color: white; font-size: 20px;" class="bi bi-play"></i></a>
      </div>
    </div>


  </section>
  <section  id="hero-fullscreen" class="hero-fullscreen d-flex align-items-baseline justify-content-center d1">
    <div  id="containerTitulo" class="container d-flex flex-column align-items-center justify-content-top position-relative" data-aos="zoom-out">
      <p style=" font-size: 28px; margin-top: 5%;" id="paragrafoTitulo">Cuidar da sua saúde nunca<br> foi tão fácil e acessível</p>
      <div class="d-flex justify-content-center">

        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
        <div class="circle circle3 d-flex justify-content-center align-content-center">
          <a href="https://youtu.be/q6EpFf5Chwk" ><i class="bi bi-play-fill"></i></a>
        </div>
        

        
      </div>
    </div>
  </section>

  <main id="main">









    <!-- ======= Primeiro Bloco ======= -->
    <section style="margin-bottom: 0; padding-bottom: 0;" id="primeiroB" class="primeiroB d-flex justify-content-center align-items-center">
      <div class="container-fluid d-flex justify-content-center" >

        <div class="row gy-4 d-flex justify-content-center" style="padding: 0 2%;">
          <div class="col-12 col-lg-5 align-items-stretch img img-fluid mb1" style='background-image: url("assets/img/slider2.jpeg"); background-size: cover; background-position: 85% center; min-height: 400px; border-radius: 20px;'>&nbsp;</div>
          <div class="col-12 col-lg-5 align-items-stretch img img-fluid d1" style='background-image: url("assets/img/slider2.jpeg"); background-size: cover; background-position: 100% center; min-height: 400px; border-radius: 20px;'>&nbsp;</div>
          <div class="col-lg-5 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
            <div class="content px-xl-5 d-flex justify-content-center flex-column">
              <h3 style="font-size: 24px; font-weight: 100; color: var(--color-secondary);font-weight: bold; " class=""><strong>Soluções completas <br> em Telessaúde para<br> Empresas e Municípios</strong></h3><br>
              <p style="text-align: justify;">Por meio da Telessaúde, conectamos pacientes, médicos e profissionais de saúde em mais de vinte especialidades. <br><br>Processos padronizados, um rigoroso controle de qualidade e a utilização de mais de 150 algoritmos clínicos proporcionam um alto índice de resolutividade já no primeiro atendimento.<br><br> Temos as melhores soluções em saúde digital para empresas, clínicas, hospitais, operadoras de saúde, seguradoras, além do setor público e municípios.</p>
            </div>

          </div>

          
        </div>

      </div>
    </section><!-- End Primeiro Bloco -->


<!-- ============== Slider ======================
    <div id="myCarousel" class="carousel slide d-none d-md-block" data-ride="carousel" data-interval="4000">
     
      <ul class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ul>
      
    
      <div class="carousel-inner">
        <div class="carousel-item active slider-right">
          <img src="assets/img/slider1.jpeg" alt="Image 1">
          <div class="carousel-caption">
            <h3>Telemedicina ao seu alcance</h3>
            <p>Consultas online 24H</p>
        </div>
        </div>
        <div class="carousel-item slider-left2">
          <img src="assets/img/slider2.jpeg" alt="Image 2">
          <div class="carousel-caption">
            <h3>Nos especializamos<br> em saúde digital</h3>
            <p>Para estarmos ao seu lado na hora que você precisar</p>
        </div>
        </div>
      
        <div class="carousel-item slider-left">
          <img src="assets/img/slider3.jpeg" alt="Image 3">
          <div class="carousel-caption">
            <p>A saúde e a<br> motivação de seus<br> colaboradores em dia</p>
        </div>
        </div>
      </div>
   
  
      <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </div>

 =================-->






    <!-- ======= Featured Services Section ======= -->
    <section style="padding-top: 0; margin-top: 2%; margin-bottom: 2%; padding-bottom: 0;" id="featured-services" class="featured-services d1">
      <div class="container">

        <div class="row gy-4">

          <div style="margin-top: 4%; padding-top: 0;" class="col-12 col-sm-4 col-md-3 d-flex" data-aos="zoom-out" data-aos-delay="200">
            <div class="service-item position-relative d-flex justify-content-start">
              <div class="icon">
                <img class="d-flex img-fluid" src="assets/img/icons/icon-4.png" width="60" height="60">
              </div>
              <h4>Assistência<br> Imediata</h4>
              <p>Atendimento 24h por dia,<br>
                7 dias por semana, incluindo<br>
                sábados, domingos e feriados</p>
            </div>
          </div><!-- End Service Item -->
          
          <div class="col-12 col-sm-4 col-md-3 d-flex" data-aos="zoom-out" data-aos-delay="400">
            <div class="service-item position-relative d-flex justify-content-start">
              <div class="icon">
                <img class="d-flex img img-fluid" src="assets/img/icons/icon-2.png" width="60" height="60">
              </div>
              <h4>Redução<br> de custos</h4>
              <p>A teleconsulta à distância reduz custos de locomoção, além da redução de despesas com consultas presenciais</p>
            </div>
          </div><!-- End Service Item -->

          

          <div class="col-12 col-sm-4 col-md-3 d-flex" data-aos="zoom-out" data-aos-delay="200">
            <div class="service-item position-relative d-flex justify-content-start">
              <div class="icon">
                <img class="d-flex img-fluid" src="assets/img/icons/icon-3.png" width="60" height="60">
              </div>
              <h4>Economia<br> de tempo</h4>
              <p>As consultas podem ser realizadas da sua casa, sem perder tempo com deslocamentos</p>
            </div>
          </div><!-- End Service Item -->
          
          <div class="col-12 col-sm-4 col-md-3 d-flex" data-aos="zoom-out" data-aos-delay="400">
            <div class="service-item position-relative d-flex justify-content-start">
              <div class="icon">
                <img class="d-flex img img-fluid" src="assets/img/icons/icon-1.png" width="60" height="60">
              </div>
              <h4>Sem risco de<br> contaminação</h4>
              <p>Não há exposição à<br>
                ambientes potencialmente<br>
                contaminados, trazendo mais<br>
                segurança à sua saúde</p>
            </div>
          </div><!-- End Service Item -->

          

        </div>

      </div>
    </section><!-- End Featured Services Section -->



    <!-- ======= Featured Services Section ======= -->
    <section style="padding-top: 0; margin-top: 0; margin-bottom: 0; padding-bottom: 0;" id="featured-services" class="featured-services mb1">
      <div class="container">

        <div class="row gy-4">

          <div style="margin-top: 4%; padding-top: 0;" class="col-12 col-sm-4 col-md-3 d-flex" data-aos="zoom-out" data-aos-delay="200">
            <div class="service-item position-relative d-flex justify-content-start">
              <div class="icon">
                <img class="d-flex img-fluid" src="assets/img/icons/icon-4.png" width="60" height="60">
              </div>
              <h4>Assistência<br> Imediata</h4>
              <p>Atendimento 24h por dia,<br>
                7 dias por semana, incluindo<br>
                sábados, domingos e feriados</p>
            </div>
          </div><!-- End Service Item -->
          
          <div class="col-12 col-sm-4 col-md-3 d-flex" data-aos="zoom-out" data-aos-delay="400">
            <div class="service-item position-relative d-flex justify-content-start">
              <div class="icon">
                <img class="d-flex img img-fluid" src="assets/img/icons/icon-2.png" width="60" height="60">
              </div>
              <h4>Redução<br> de custos</h4>
              <p>A teleconsulta à distância<br> reduz custos de locomoção,<br> além da redução de despesas<br> com consultas presenciais</p>
            </div>
          </div><!-- End Service Item -->

          

          <div class="col-12 col-sm-4 col-md-3 d-flex" data-aos="zoom-out" data-aos-delay="200">
            <div class="service-item position-relative d-flex justify-content-start">
              <div class="icon">
                <img class="d-flex img-fluid" src="assets/img/icons/icon-3.png" width="60" height="60">
              </div>
              <h4>Economia<br> de tempo</h4>
              <p>As consultas podem ser<br> realizadas da sua casa,<br> sem perder tempo<br> com deslocamentos</p>
            </div>
          </div><!-- End Service Item -->
          
          <div class="col-12 col-sm-4 col-md-3 d-flex" data-aos="zoom-out" data-aos-delay="400">
            <div class="service-item position-relative d-flex justify-content-start">
              <div class="icon">
                <img class="d-flex img img-fluid" src="assets/img/icons/icon-1.png" width="60" height="60">
              </div>
              <h4>Sem risco de<br> contaminação</h4>
              <p>Não há exposição à<br>
                ambientes potencialmente<br>
                contaminados, trazendo mais<br>
                segurança à sua saúde</p>
            </div>
          </div><!-- End Service Item -->

          

        </div>

      </div>
    </section><!-- End Featured Services Section -->
    <br>
    <div class="ChamadaTele" data-aos="fade-in">
      <div class="containerTele">
          <div class="tituloSubTitulo mb2" data-aos="fade-in">

              <h1 style="margin-bottom: 0%;" >Historicamente comprovado,<br>a teleconsulta resolve mais <br> de 90% dos casos de saúde</h1>

          </div>
          <br>
          <!--
          <div class="imagemTele" data-aos="fade-up">
    
    
              <button class="play-button">&#9658;</button>
    
          </div>
          -->
      </div>
    </div>


<!-- Botão para abrir o overlay -->


<!-- Overlay
<div class="overlay">
  <div class="play-btn">
    <i class="bi bi-play"></i>
  </div>
</div>

<div class="modal-container">
  <div class="modal-content">
    <span class="close-btn">&times;</span>
    <iframe id="video" width="100%" height="315" frameborder="0" allowfullscreen></iframe>
  </div>
</div>

fim over funciona-->


    

    <!-- ======= About Section ======= -->
    <section style="padding-top: 0%;" id="about" class="about">
      <div style="padding-top: 0%;" class="container" data-aos="fade-in">

        <div style="padding-top: 0%;" class="section-header">
          <h3 style="font-size: 24px; color: var(--color-secondary); padding-top: 0%; font-weight: bold; "><b>Sobre a Mediclick</b></h3>
          <p class="text-left d1" style="color: var(--color-secondary); margin-left: 40% 0; text-align: center; padding: 0;  display: flex; justify-content: center;"> Somos um grupo de empresas e profissionais com larga experiência em saúde pública e privada.<br><br>Com a crescente necessidade de atendimento rápido e eficiente, criamos a Mediclick para atender você<br> a qualquer hora e lugar, utilizando as mais avançadas tecnologias, de uma forma humanizada e acessível.</p>
          <p class="text-left mb1" style="color: var(--color-secondary); margin: 3% 0;">Somos um grupo de empresas e profissionais com larga experiência em saúde pública e privada.<br><br>Com a crescente necessidade de atendimento rápido e eficiente, criamos a Mediclick para atender você a qualquer hora e lugar, utilizando as mais avançadas tecnologias, de uma forma humanizada e acessível.</p>
        </div>

        <div class="row g-4 g-lg-5 sumir" data-aos="fade-in" data-aos-delay="200">

          <div style=" margin-top: 0; padding-top: 0;" class="col-lg-5 mb1">
            <div class="about-img">
              <img src="assets/img/Mao.png" class="img-fluid d-flex justify-content-left" alt="">
            </div>
          </div>
          <div  class="col-lg-5 d1">
            <div class="about-img">
              <img src="assets/img/Mao.png" class="img-fluid d-flex justify-content-left" alt="">
            </div>
          </div>

          <div style="margin-left: 3%;" class="col-lg-6">
          

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3 tabs">
              <li><a class="nav-link active text-center" data-bs-toggle="pill" href="#tab1">Benefícios<br>para a Empresa</a></li>
              <li><a class="nav-link text-center" data-bs-toggle="pill" href="#tab2">Benefícios<br> para o Usuário</a></li>
              <li><a class="nav-link text-center" data-bs-toggle="pill" href="#tab3">Equipe de <br> Saúde/ Médicos</a></li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active equipeLista" id="tab1">
                <br>
                <p class="text-left">Nos tempos atuais, está bastante destacada a relevância e atenção que as empresas devem dar ao 
                  seu principal patrimônio: <strong>seus colaboradores</strong></p>
                <p class="text-left">Ter a equipe motivada, feliz e com a certeza de que estão sendo bem cuidados e protegidos gera uma série de desdobramentos positivos e benefícios para a empresa, dentre os quais:</p>

                <ul style="width: 90%;">
                  <li style="text-align: left;"><i class="bi bi-check2"></i>Diminui o absenteísmo na empresa, causado por doenças e enfermidades ou devido à problemas emocionais causados por questões familiares, financeiras ou pessoais.</li>
                  <br>
                  <li><i class="bi bi-check2"></i>Diminui a sinistralidade junto aos atuais planos de saúde;</li>
                  <br>
                  <li><i class="bi bi-check2"></i>Aumenta o engajamento do funcionário e o seu reconhecimento perante o RH da empresa;</li>
                  <br>
                  <li><i class="bi bi-check2"></i>Evolução dos KPIs de saúde da empresa.</li>
                </ul>
                

              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade show equipeLista" id="tab2">
                <br>
                <p >Contra fatos não há argumentos: a Telemedicina traz resultados positivos com alto índice de resolutividade. Isso sem contar inúmeros outros benefícios, tais como:</p>

                <ul>
                  <li><i class="bi bi-check2"></i>Atendimento imediato, na hora da sua dor</li>
                  <br>
                  <li><i class="bi bi-check2"></i>Direto pelo celular;</li>
                  <br>
                  <li><i class="bi bi-check2"></i>Economia de tempo</li>
                  <br>
                  <li><i class="bi bi-check2"></i>Menos despesas médicas</li>
                  <br>
                  <li><i class="bi bi-check2"></i>Sem exposições a riscos em ambientes contaminados.</li>
                </ul>

              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade show" id="tab3">
                <br>
                <p > O atendimento é realizado por uma equipe com mais de 300 profissionais de saúde, que estarão prontos para lhe atender, 24h por dia, 7 dias por semana. 
                </p>
                  <p>Nosso corpo médico possui as seguintes especialidades: </p>
                  <div class="d-flex justify-content-around equipeLista">
                    <ul class="col-4">
                      <li><i class="bi bi-check2"></i>Cardiologia</li>
                      <li><i class="bi bi-check2"></i>Dermatologia</li>
                      <li><i class="bi bi-check2"></i>Geriatria</li>
                      <li><i class="bi bi-check2"></i>Pediatria</li>
                      <li><i class="bi bi-check2"></i>Psiquiatria</li>
                      <li class="d-flex justify-content-left"><i class="bi bi-check2"></i>Psiquiatria <br> Infantil</li>
                    </ul>
  
                    <ul class="col-4">
                      <li><i class="bi bi-check2"></i>Pneumologia</li>
                      <li><i class="bi bi-check2"></i>Infectologia</li>
                      <li><i class="bi bi-check2"></i>Neurologia</li>
                      <li><i class="bi bi-check2"></i>Endocrinologia</li>
                      <li><i class="bi bi-check2"></i>Ortopedia</li>
                      <li><i class="bi bi-check2"></i>Traumatologia</li>
                    </ul>
                    <ul class="col-5">
                      <li><i class="bi bi-check2"></i>Nefrologia</li>
                      <li><i class="bi bi-check2"></i>Gastroenterologia</li>
                      <li><i class="bi bi-check2"></i>Ginecologia</li>
                      <li><i class="bi bi-check2"></i>Obstetrícia</li>
                      <li><i class="bi bi-check2"></i>Medicina da família</li>
                    </ul>
                  </div>
                  
                  
                    <p>Além das seguintes especialidades de saúde: </p>
  
                    <ul class="col-5 equipeLista" style="list-style-type: none; padding: 0%; margin: 0; padding: 0;">
                      <li style="margin: 0; padding: 0;"><i class="bi bi-check2"></i>Psicologia</li>
                      <li><i class="bi bi-check2"></i>Psicologia Infantil</li>
                      <li><i class="bi bi-check2"></i>Nutrição</li>
                      <li><i class="bi bi-check2"></i>Assistência Social</li>
                    </ul>
                  
                 
                

              </div><!-- End Tab 3 Content -->

            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->



    <!-- ======= Clients Section ======= -->
    <h3 class="mb1" style="color: var(--color-gray); font-size: 18px;">Clientes satisfeitos</h3>
    <h3 class="d1" style="color: var(--color-gray); font-size: 18px; width: 100%; text-align: center; ">Clientes satisfeitos</h3>
    <br>
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt="Hospital Albert Sabin"></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt="MRX Capital Partners"></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt="Fonte Ambiental"></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt="TJB Energia"></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt="Hospital Albert Sabin"></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt="Acebra Consultas"></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt="SegTaxi"></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt="TJB Energia"></div>
          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="fade-in">

        <div class="row g-5">

          <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center align-items-center order-last order-md-first">
            <h3 style="font-size: 24px; font-weight: bold; " class="text-center"><strong>O futuro da sua consulta médica está aqui</strong></h3>
            <p></p>
            <p style="padding: 0 5%;"  class="text-justify d1 text-md-center"> A telemedicina vem mudando a forma como as pessoas acessam a saúde, oferecendo um serviço à distância mais rápido, fácil e seguro. <br><br>Com a opção de consultas online, você pode marcar uma consulta com seu médico sem sair de casa, economizando tempo e evitando filas de espera. Além disso, as avançadas tecnologias utilizadas na telemedicina garantem uma excelente qualidade de atendimento.<br><br>Experimente essa nova forma de cuidar da sua saúde.<br> O futuro da medicina já chegou!</p>
            <p  class="text-justify mb1 text-md-center"> A telemedicina vem mudando a forma como as pessoas acessam a saúde, oferecendo um serviço à distância mais rápido, fácil e seguro. <br><br>Com a opção de consultas online, você pode marcar uma consulta com seu médico sem sair de casa, economizando tempo e evitando filas de espera. Além disso, as avançadas tecnologias utilizadas na telemedicina garantem uma excelente qualidade de atendimento.<br><br> Não perca mais tempo e experimente essa nova forma de cuidar da sua saúde. O futuro da medicina já chegou!</p>
            <a class="cta-btn align-self-center" href="index.html#cont1">Fale Conosco</a>
          </div>

          <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
            <div class="img">
              <img src="assets/img/cta.jpeg" alt="" class="img-fluid">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Call To Action Section -->


    <div class="menuPlanos mb1 sol" data-aos="fade-up" id="pr2">
      <h3 style="font-size: 24px;color: var(--color-secondary); font-weight: bold; "><strong>Nossas Soluções</strong></h3>
      <div class="containerPlanos">
        <div style="background-color:#01ACC9 ; border: 0px;" class="planosMenu">
          <div  class="tituloPlano">
            <h3  >Mediclick Standard</h3>
          </div>
          <div class="plusIcon" onclick="mostrarConteudo(0)">
            <i class="bi bi-plus-circle-fill"></i>
          </div>
        </div>
        <!--planosMenu-->
        <div class="conteudoPlanos" id="conteudoPlanos0">
          <ul>
              <li><i class="bi bi-check2"></i> <span>Via aplicativo;</span></li>
              <li><i class="bi bi-check2"></i> <span>Atendimento 24 horas;</span></li>
              <li><i class="bi bi-check2"></i> <span>Telemedicina na modalidade pronto atendimento virtual.</span></li>
          </ul>
        </div>
        <!--conteudoPlanos-->
      </div>
      <!--containerPlanos-->

      <div class="containerPlanos">
          <div style="background-color:#01ACC9 ; border: 0px;" class="planosMenu">
            <div class="tituloPlano">
              <h3>Mediclick Plus</h3>
            </div>
            <div class="plusIcon" onclick="mostrarConteudo(1)">
              <i class="bi bi-plus-circle-fill"></i>
            </div>
          </div>
          <!--planosMenu-->
          <div class="conteudoPlanos" id="conteudoPlanos1">
              <ul>
                  <li><i class="bi bi-check2"></i> <span>Via aplicativo e 0800;</span></li>
                  <li><i class="bi bi-check2"></i> <span>Atendimento 24 horas;</span></li>
                  <li><i class="bi bi-check2"></i> <span>Teletriagem + Telemedicina + Especialidades;</span></li>
                  <li><i class="bi bi-check2"></i> <span>Atenção primária à saúde;</span></li>
                  <li><i class="bi bi-check2"></i> <span>Inicia com a equipe de enfermagem, segue para o clínico geral, e conforme a necessidade ocorre o encaminhamento para o médico especialista.</span></li>
                </ul>
          </div>
          <!--conteudoPlanos-->
        </div>
        <!--containerPlanos-->


    <div class="containerPlanos">
      <div style="background-color:#01ACC9 ; border: 0px;" class="planosMenu">
        <div class="tituloPlano">
          <h3>Mediclick Premium</h3>
        </div>
        <div class="plusIcon" onclick="mostrarConteudo(2)">
          <i class="bi bi-plus-circle-fill"></i>
        </div>
      </div>
      <!--planosMenu-->
      <div class="conteudoPlanos" id="conteudoPlanos2">
          <ul>
              <li><i class="bi bi-check2"></i><span>Via aplicativo;</span></li>
              <li><i class="bi bi-check2"></i> <span>Atendimento 24 horas;</span></li>
              <li><i class="bi bi-check2"></i> <span>Telemedicina + Especialidades;</span></li>
              <li><i class="bi bi-check2"></i><span>Possibilidade de escolha do profissional que irá atender;</span></li>
              <li><i class="bi bi-check2"></i> <span>Agendamento de consultas eletivas em várias especialidades.</span></li>
            </ul>
      </div>
      <!--conteudoPlanos-->
    </div>
    <!--containerPlanos-->

    <div class="containerPlanos">
      <div style="background-color:#0082A4 ; border: 0px;" class="planosMenu">
        <div class="tituloPlano">
          <h3>Mediclick Psicologia</h3>
        </div>
        <div class="plusIcon" onclick="mostrarConteudo(3)">
          <i class="bi bi-plus-circle-fill"></i>
        </div>
      </div>
      <!--planosMenu-->
      <div class="conteudoPlanos" id="conteudoPlanos3">
          <ul>
              <li><i class="bi bi-check2"></i> <span>Via aplicativo;</span></li>
              <li><i class="bi bi-check2"></i> <span>Atendimento 24 horas por equipe de enfermagem;</span></li>
              <li><i class="bi bi-check2"></i> <span>Atendimento por psicólogos de 2ª à 6ª feira das 8 às 20h.</span></li>
            </ul>
      </div>
      <!--conteudoPlanos-->
    </div>
    <!--containerPlanos-->

    <div class="containerPlanos">
      <div style="background-color:#0082A4 ; border: 0px;" class="planosMenu">
        <div class="tituloPlano">
          <h3>Mediclick Nutrição</h3>
        </div>
        <div class="plusIcon" onclick="mostrarConteudo(4)">
          <i class="bi bi-plus-circle-fill"></i>
        </div>
      </div>
      <!--planosMenu-->
      <div class="conteudoPlanos" id="conteudoPlanos4">
          <ul>
              <li><i class="bi bi-check2"></i> <span>Via aplicativo;</span></li>
              <li><i class="bi bi-check2"></i> <span>Atendimento 24 horas por equipe de enfermagem;</span></li>
              <li><i class="bi bi-check2"></i> <span>Atendimento por nutricionistas de 2ª à 6ª feira das 8 às 20h.</span></li>
          </ul>
      </div>
      <!--conteudoPlanos-->
    </div>
    <!--containerPlanos-->

    <div class="containerPlanos">
      <div style="background-color:#006172 ; border: 0px;" class="planosMenu backgroundM">
        <div class="tituloPlano">
          <h3>Setor Público</h3>
        </div>
        <div class="plusIcon" onclick="mostrarConteudo(5)">
          <i class="bi bi-plus-circle-fill"></i>
        </div>
      </div>
      <!--planosMenu-->
      <div class="conteudoPlanos" id="conteudoPlanos5">
        <br>
        <p>Uma importante contribuição da Mediclick junto aos Municípios e Estados se deve ao fato de que, estatisticamente comprovado, o atendimento à distância através da telessaúde resolve com grande efetividade a maior parte das situações que os pacientes vivenciam nas UBS, UPAs e hospitais.<br><br>
        Dessa forma, as soluções da Mediclick colaboram para resolver situações críticas da rede pública, tais como:
        </p>
        <ul>
          <li><i class="bi bi-check2"></i> <span>Filas de espera para atendimento em especialidades médicas nas UBS, UPAs e hospitais públicos;</span></li>
          <br>
          <li><i class="bi bi-check2"></i> <span>Falta de médicos no Município após as 18 horas, e durante todo o período noturno, até 6h da manhã;</span></li>
          <br>
          <li><i class="bi bi-check2"></i> <span>Gargalo com a grande quantidade de pessoas que superlotam as UBS, UPAs e hospitais da rede pública.</span></li>
          <br>
      </ul>
      <p>IMPORTANTE: o não acesso às consultas em tempo oportuno pode agravar condições tratáveis e impactar na mortalidade, o que fica sempre mais evidente em momentos pandêmicos, como ocorreu na crise do coronavírus.</p>
      <br><br>
      <div style="width: 100%; display: flex; justify-content: right;">
        <a style="width: 100%; text-align: right;" class="text-right" href="setorPublico.html">Saiba Mais...</a>
      </div>
      
      </div>
      <!--conteudoPlanos-->
    </div>
    <!--containerPlanos-->





</div>
<!--menuPlanos-->   



<!--================ SLIDERS NOVOS ====================-->

<div class="blocoSliders d1">
  <div class="tituloBloco" id="pr1">
    <h1>Nossas Soluções</h1>
  </div>

  <div class="sliders">
    <div class="sliderInterno">

      <div class="planosSlider">
        <div style="background-color:#01ACC9 ; " class="tituloPlanos">
          <h2 >Mediclick Standard</h2>
        </div><!--titulosPlanos-->
        <div class="conteudoPlanos">
          <div class="centralizaConteudo">
            <div class="listaConteudo">
              <ul>
                <li class="liMargemLista"><i class="bi bi-check2"></i> <span>Via aplicativo;</span></li></li>
                <li class="liMargemLista"><i class="bi bi-check2"></i><span>Telemedicina na modalidade<br>pronto atendimento virtual</span></li>
                <li class="liMargemLista"><i class="bi bi-check2"></i><span>Atendimento 24 horas.</span></li>                
              </ul>

            </div><!--listaConteudo-->

          </div><!--centralizaConteudo-->
        </div><!--conteudoPlanos-->
      </div><!--planosSlider-->


    </div><!--sliderInterno-->
    <div class="sliderInterno">

      <div class="planosSlider">
        <div style="background-color:#01ACC9 ;" class="tituloPlanos">
          <h2 >Mediclick Plus</h2>
        </div><!--titulosPlanos-->
        <div class="conteudoPlanos">
          <div class="centralizaConteudo">
            <div class="listaConteudo">
              <ul>
                <li class="liMargemLista"><i class="bi bi-check2"></i><span>Via aplicativo e 0800;</span></li>
                <li class="liMargemLista"><i class="bi bi-check2"></i><span>Atendimento 24 horas;</span></li>
                <li class="liMargemLista"><i class="bi bi-check2"></i><span>Teletriagem + Telemedicina<br>+ Especialidades;</span></li> 
                <li class="liMargemLista"><i class="bi bi-check2"></i><span>Atenção primária à saúde</span></li>  
                <li class="liMargemLista"><i class="bi bi-check2"></i><span>Inicia com a equipe de enfermagem, médicos da família e ainda a possibilidade de encaminhamento para médicos especialistas</span></li>             
              </ul>

            </div><!--listaConteudo-->

          </div><!--centralizaConteudo-->
        </div><!--conteudoPlanos-->
      </div><!--planosSlider-->
      
    </div><!--sliderInterno-->
    <div class="sliderInterno">

      <div class="planosSlider">
        <div style="background-color:#01ACC9; " class="tituloPlanos">
          <h2 >Mediclick Premium</h2>
        </div><!--titulosPlanos-->
        <div class="conteudoPlanos">
          <div class="centralizaConteudo">
            <div class="listaConteudo">
              <ul>
                <li class="liMargemLista"><i class="bi bi-check2"></i><span>Via aplicativo;</span></li>
                <li class="liMargemLista"><i class="bi bi-check2"></i><span>Atendimento 24 horas;</span></li>
                <li class="liMargemLista"><i class="bi bi-check2"></i><span>Telemedicina + Especialidades;</span></li> 
                <li class="liMargemLista"><i class="bi bi-check2"></i><span>Possibilidade de escolha do profissional que irá atender;</span></li>  
                <li class="liMargemLista"><i class="bi bi-check2"></i><span>Agendamento de consultas eletivas em várias especialidades.</span></li>             
              </ul>

            </div><!--listaConteudo-->

          </div><!--centralizaConteudo-->
        </div><!--conteudoPlanos-->
      </div><!--planosSlider-->

    </div><!--sliderInterno-->
    <div class="sliderInterno">

      <div class="planosSlider">
        <div style="background-color: #0082A4 ;"  class="tituloPlanos">
          <h2 >Mediclick Psicologia</h2>
        </div><!--titulosPlanos-->
        <div class="conteudoPlanos">
          <div class="centralizaConteudo">
            <div class="listaConteudo">
              <ul>
                <li class="liMargemLista"><i class="bi bi-check2"></i><span>Via aplicativo;</span></li>
                <li class="liMargemLista"><i class="bi bi-check2"></i><span>Atendimento 24 horas por equipe de enfermagem;</span></li>
                <li class="liMargemLista"><i class="bi bi-check2"></i><span>Solicitação de atendimento 24h;</span></li> 
                <li class="liMargemLista"><i class="bi bi-check2"></i><span>Atendimento por psicólogos: de 2ª à 6ª feira das 8 às 20h.</span></li>             
              </ul>

            </div><!--listaConteudo-->

          </div><!--centralizaConteudo-->
        </div><!--conteudoPlanos-->
      </div><!--planosSlider-->

    </div><!--sliderInterno-->
    <div class="sliderInterno">

      <div class="planosSlider">
        <div style="background-color: #0082A4 ;" class="tituloPlanos">
          <h2 >Mediclick Nutrição</h2>
        </div><!--titulosPlanos-->
        <div class="conteudoPlanos">
          <div class="centralizaConteudo">
            <div class="listaConteudo">
              <ul>
                <li class="liMargemLista"><i class="bi bi-check2"></i><span>Via aplicativo;</span></li>
                <li class="liMargemLista"><i class="bi bi-check2"></i><span>Atendimento 24 horas por equipe de enfermagem;</span></li>
                <li class="liMargemLista"><i class="bi bi-check2"></i><span>Solicitação de atendimento 24h;</span></li> 
                <li class="liMargemLista"><i class="bi bi-check2"></i><span>Atendimento por nutricionistas: de 2ª à 6ª feira das 8 às 20h.</span></li>             
              </ul>

            </div><!--listaConteudo-->

          </div><!--centralizaConteudo-->
        </div><!--conteudoPlanos-->
      </div><!--planosSlider-->

    </div><!--sliderInterno-->
    <div class="sliderInterno">

      <div class="planosSlider">
        <div style="background-color:#006172 ;" class="tituloPlanos">
          <h2 >Setor Público</h2>
        </div><!--titulosPlanos-->
        <div class="conteudoPlanos">
          <div class="centralizaConteudo">
            <div class="listaConteudo">
              <p class="liMargem">As soluções da Mediclick colaboram para resolver situações críticas da rede pública, tais como:</p>
              <ul>
                <li class="liMargem"><i class="bi bi-check2"></i><span>Filas de espera para atendimento em especialidades médicas nas UBS, UPAs e hospitais públicos;</span></li>
                <li class="liMargemLista"><i class="bi bi-check2"></i><span>Falta de médicos no Município após as 18 horas, e durante todo o período noturno, até 6h da manhã;</span></li>
                <li class="liMargemLista"><i class="bi bi-check2"></i><span>
                  Gargalo com a grande quantidade de pessoas que superlotam as UBS, UPAs e hospitais da rede pública.</span></li>         
              </ul>
              <div class="linkFinalConteudo">
                <a href="setorPublico.html">Saiba Mais...</a>
              </div>
            </div><!--listaConteudo-->

          </div><!--centralizaConteudo-->
        </div><!--conteudoPlanos-->
      </div><!--planosSlider-->

    </div><!--sliderInterno-->
    <div class="seta esquerda"><i class="bi bi-caret-left-fill"></i></div>
    <div class="seta direita"><i class="bi bi-caret-right-fill"></i></div>
  </div><!--sliders-->

</div><!--blocoSliders-->

  

        
<!--==============FIM SLIDERS NOVOS=====================-->




    <!-- ======= F.A.Q Section ======= -->
    <section style="margin-bottom: 0;" id="faq" class="faq">
      <div class="container-fluid" data-aos="fade-in">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content px-xl-5">
              <h3 style="font-size: 24px; color: var(--color-secondary);font-weight: bold; " class="text-center"><strong>Perguntas Frequentes</strong></h3>
              <p class="text-center">
                
              </p>
            </div>

            <div style="margin-bottom: 5%;" class="accordion accordion-flush px-xl-5" id="faqlist">

              <div class="accordion-item" data-aos="fade-in" data-aos-delay="200">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <div style="width: 5%; display: flex; justify-content: left; align-items: center;">
                      <img style=" width: 15px; height: 15px; margin-right: 20%;" src="/assets/img/quotes-icon.png">
                    </div>
                    <div style="display: flex; justify-content: left; margin-left: 4%; align-items: center; width: 95%;">
                      <span>Telessaúde é um plano de saúde?</span>
                    </div>
                    
                    
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Não necessariamente. Embora algumas empresas de planos de saúde possam oferecer serviços de telessaúde como parte de seus pacotes de benefícios, a telessaúde não é considerada um plano de saúde por si só.<br> A Telesaúde é uma opção viável para quem precisa de atendimento médico imediato ou acompanhamento à distância.<br> É importante diferenciar entre os dois, já que a telessaúde pode ser oferecida como um serviço independente e muito mais acessível, como a Mediclick o faz. <br>
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-in" data-aos-delay="300">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    
                    <div style="width: 5%; display: flex; justify-content: left; align-items: center;">
                      <img style=" width: 15px; height: 15px; margin-right: 20%;" src="/assets/img/quotes-icon.png">
                    </div>
                    <div style="display: flex; justify-content: left; margin-left: 4%; align-items: center; width: 95%;">
                      <span>Falo diretamente com o médico?</span>
                    </div>

                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div style="width: 87%;" class="accordion-body">
                    A Mediclick disponibiliza diferentes opções, cada uma com suas próprias características para melhor atender às necessidades de sua empresa. Temos desde a opção em que o usuário passa primeiro por uma triagem com a equipe de enfermagem; ou o atendimento direto pelo clínico geral; ou ainda a opção de atendimento com hora marcada pelo médico especialista. <br><br>
                    Ao escolher o plano de Telessaúde para seus colaboradores, é importante considerar as necessidades e prioridades de sua empresa. Avalie as opções disponíveis para garantir a melhor escolha de atendimento e tratamento de saúde.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-in" data-aos-delay="400">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <div style="width: 5%; display: flex; justify-content: left; align-items: center;">
                      <img style=" width: 15px; height: 15px; margin-right: 20%;" src="/assets/img/quotes-icon.png">
                    </div>
                    <div style="display: flex; justify-content: left; margin-left: 4%; align-items: center; width: 95%;">
                      <span>O atendimento é imediato?</span>
                    </div>
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div style="width: 87%;" class="accordion-body">
                    A equipe da Mediclick atende 24 horas por dia, todos os dias da semana, incluindo sábados, domingos e feriados. <br><br>

                    O tipo de atendimento irá depender do plano escolhido, conforme a conveniência e necessidade da empresa. O usuário poderá contar desde o pronto atendimento virtual, até o agendamento com o médico/ profissional especialista, com dia e hora marcada.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-in" data-aos-delay="500">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <div style="width: 5%; display: flex; justify-content: left; align-items: center;">
                      <img style=" width: 15px; height: 15px; margin-right: 20%;" src="/assets/img/quotes-icon.png">
                    </div>
                    <div style="display: flex; justify-content: left; margin-left: 4%; align-items: center; width: 95%;">
                      <span>Como os exames são solicitados?</span>
                    </div>
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    
                    <p>A solicitação de exames pode ser feita de diferentes maneiras:</p>
                    <ol style="width: 87%;">
                      <li>Por meio de prescrição eletrônica: o profissional de saúde que está atendendo o paciente pode prescrever os exames diretamente pela plataforma durante o atendimento.</li>
                      <br>
                      <li>Por meio de solicitação por e-mail ou mensagem: o profissional de saúde pode enviar uma solicitação de exame por e-mail ou mensagem para o paciente.</li>
                      <br>
                      <li>Por meio de solicitação direta pelo paciente: o paciente pode efetuar a solicitação diretamente pelo aplicativo.</li>
                    </ol>
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-in" data-aos-delay="600">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <div style="width: 5%; display: flex; justify-content: left; align-items: center;">
                      <img style=" width: 15px; height: 15px; margin-right: 20%;" src="/assets/img/quotes-icon.png">
                    </div>
                    <div style="display: flex; justify-content: left; margin-left: 4%; align-items: center; width: 95%;">
                      <span>Como recebo a receita médica?</span>
                    </div>
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    A receita médica pode ser emitida eletronicamente durante o atendimento da Mediclick, e enviada pelo profissional diretamente para o paciente por meio da plataforma. <br><br>
                    A prescrição é gerada conforme os protocolos exigidos pelos órgãos reguladores, seguindo as mesmas normas de segurança e qualidade das prescrições em papel, e incluem a identificação do profissional de saúde, a descrição completa do medicamento, a posologia e a duração do tratamento.<br><br>
                    O paciente pode então apresentar a receita normalmente em uma farmácia para a compra dos medicamentos prescritos.
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    

        



    

    <!-- ======= Contact Section ======= -->
    <section id="cont1" class="contact">
      <div  class="container">

        <div class="section-header">
          <h3 style="font-size: 24px; color: var(--color-secondary);font-weight: bold; "><strong>Contato</strong></h3>
          <p>Em caso de dúvidas,<br> não hesite em falar conosco:</p>
        </div>

      </div>



      <div class="container">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">


              


              <div class="info-item d-flex justify-content-sm-around align-items-center">
                <i class="bi bi-phone flex-shrink-0 justify-content-center text-center"></i> 
                <div class="col-md-8">
                  <h4 class="text-center">Telefone:</h4>
                  <p class="text-center">(32) 3213-9000</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex justify-content-sm-around align-items-center">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div class="col-md-8" >
                  <h4 class="text-center">Email:</h4>
                  <p class="text-center">contato@mediclick.com.br</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex justify-content-sm-around align-items-center">
                <i class="bi bi-geo-alt flex-shrink-0 d-flex justify-content-left"></i> 
                <div class="col-md-8">
                  <h4 class="text-center">Endereço:</h4>
                  <p class="text-center">Rua Braz Bernardino, 105 - Centro<br>Juiz de Fora/ MG - 36.010-041</p>
                </div>
              </div><!-- End Info Item -->







             

            </div>

          </div>

          <div class="col-lg-8 d1" id="ct78">
            <form action="/forms/contact.php" role="form" class="php-email-form" >
              <div class="row">
                <div class="col-md-6 form-group mt-3" >
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
                </div>
                <div class="col-md-6 form-group mt-3 ">
                  <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
                </div>
              </div>
              <div class="form-group ">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea style="height: 21.2vh;" class="form-control" name="message" placeholder="Mensagem" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Enviando</div>
                <div class="error-message"></div>
                <div class="sent-message">Sua mensagem foi enviada. Muito obrigado!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensagem</button></div>
            </form>
          </div><!-- End Contact Form -->


          <div class="col-lg-8 mb1" id="formmmmm">
            <form action="/forms/contact.php" method="post" role="form" class="php-email-form" >
              <div class="row">
                <div class="col-md-6 form-group" >
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <textarea style="height: 100%;" class="form-control" name="message" id="message" placeholder="Mensagem" required></textarea>
                </div>
              </div>
              
              <div class="my-3">
                <div class="loading">Enviando</div>
                <div class="error-message"></div>
                <div class="sent-message">Sua mensagem foi enviada. Muito obrigado!</div>
              </div>
              <div class="text-center"><button type="submit" onclick="enviarFormulario()">Enviar mensagem</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>
        <br><br>
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.435444288883!2d-43.34979588540929!3d-21.763402003540936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989b5ff527c2e3%3A0xf028c53ef3bf7226!2sR.%20Braz%20Bernardino%2C%20105%20-%20Centro%2C%20Juiz%20de%20Fora%20-%20MG%2C%2036010-320!5e0!3m2!1spt-BR!2s!4v1676677365338!5m2!1spt-BR!2s" frameborder="0" allowfullscreen></iframe>
          
          
          
        </div><!-- End Google Maps -->
      </div>

      <div class="appsDownload mb2">
        <div class="containerApps">
          <div class="iconesLoja">
            <a href="https://apps.apple.com/ng/app/mediclick-sa%C3%BAde/id1636962896"><img style="width: 20px; height: 20px;" src="assets/img/icons/apple.svg"></i>

            </a>
            <a href="https://play.google.com/store/apps/details?id=br.com.ambienteprd.mediclick&hl=pt_BR&gl=US"><img style="width: 20px; height: 20px;" src="assets/img/icons/gplay.svg" alt=""></i>
            </a>
          
          </div><!--iconesLoja-->
          <div class="textoLoja">
            <h3>Disponível em todos<br> os dispositivos</h3>
          </div><!--textoLoja-->
        </div>
        
      </div><!--appsDownload-->


    </section><!-- End Contact Section -->
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer mb1">


    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            <a style="color: rgb(226, 223, 223);" href="politicaDePrivacidade.html">Política de privacidade</a><br><br>
            Copyright © 2023 <span>Mediclick</span>.<br> Todos os direitos reservados.
          </div>
          
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="https://pt-br.facebook.com/MediclickBR/" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/mediclick_jf/" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="https://www.linkedin.com/company/mediclick-app/about/" class="linkedin"><i class="bi bi-linkedin"></i></a>
          <a href="https://www.linkedin.com/company/mediclick-app/about/" class="linkedin"><i class="bi bi-youtube"></i></a>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <!--=================== RODAPE DESKTOP=====================-->
  <div class="rodape d1">

    <div class="blocoEsquerda">
      <span>Copyright © 2023 Mediclick <br>Todos os direitos reservados</span>
    </div><!--blocoEsquerda-->

    <div class="blocoCentro">
      <a style="color: rgb(226, 223, 223);" href="politicaDePrivacidade.html">Política de privacidade</a><br><br>
    </div><!--blocoCentro-->

    <div class="blocoDireita">
      <div class="iconesSociais">
        <a href="https://pt-br.facebook.com/MediclickBR/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/mediclick_jf/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/company/mediclick-app/about/" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <a href="https://www.linkedin.com/company/mediclick-app/about/" class="linkedin"><i class="bi bi-youtube"></i></a>
      </div>
    </div><!--blocoDireita-->


  </div><!--rodape-->


 <!--=================== FIM RODAPE DESKTOP=====================-->
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fitvids/1.2.0/jquery.fitvids.min.js"></script>
<script>
  $(document).ready(function() {
    $('.modal-content').fitVids();
  });
</script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
