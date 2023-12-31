<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Clinica Muhaivire</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>
 @include('user.navbar')


            @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{session()->get('message')}}
            <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close">X</button>
          </div>
                  
            @endif


  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Vamos tornar sua vida mais feliz</span>
        <h1 class="display-4">Vida Saudável</h1>
        <a href="#" class="btn btn-primary">Agende a sua Consulta</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Converse</span> com doctores</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>Plano</span> de Saude</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>Farmacia</span> 24/7 </p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Bem-vindo a<br> Clinica Muhaivire</h1>
            <p class="text-grey mb-4">Um oásis de cuidado de saúde no coração do animado bairro urbano de Nampula que leva o mesmo nome. Nossa clínica, embora simples em sua estética, é rica em calor humano e dedicação à saúde da comunidade. Localizada entre as vibrantes ruas de Muhaivire, oferecemos uma gama abrangente de serviços médicos para atender às necessidades variadas de nossos pacientes.</p>
            <a href="#" class="btn btn-primary">Leia Mais...</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  @include('user.doctor')  

  @include('user.noticias')

  @include('user.consultas')


  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Empresa</h5>
          <ul class="footer-menu">
            <li><a href="#">Sobre nos</a></li>
            <li><a href="#">Careira</a></li>
            <li><a href="#">Equipe editorial</a></li>
            <li><a href="#">Proteção</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Mais..</h5>
          <ul class="footer-menu">
            <li><a href="#">Termos e Condições</a></li>
            <li><a href="#">Privacidade</a></li>
            <li><a href="#">Junte-se como médicos</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>O nosso parceiro</h5>
          <ul class="footer-menu">
            <li><a href="#">Plano-Fitness</a></li>
            <li><a href="#">Plano-Geral</a></li>
            <li><a href="#">Plano-Vitalicio</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">Av Fplm, Muhaivire Expansao</p>
          <a href="#" class="footer-link">+258 84 627 6296</a>
          <a href="#" class="footer-link">suporte@clinicamuhaivire.com</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2023 Kelsny Brito. Todos Direitos Reservados</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>