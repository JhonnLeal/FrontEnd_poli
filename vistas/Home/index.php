<?php
require '../../estructura/header.php';
include '../../estructura/nav.php';
?>

<br>
<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../../public/img/1.jpg" alt="...">
      <div class="carousel-caption">
        Pruebas de software empresarial
      </div>
    </div>
    <div class="carousel-item">
      <img src="../../public/img/1.jpg" class="d-block w-10" alt="...">
      <div class="carousel-caption" style="align-content: center;">
        Software a la medida de su empresa
      </div>
    </div>
    <div class="carousel-item">
      <img src="../../public/img/1.jpg" class="d-block w-10" alt="...">
      <div class="carousel-caption">
        Expertos es soluciones
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

<!-- Quienes somos / Acerca de -->
<div class="container mt-2">
  <div class="row">
    <div class="col-12">
      <div class="cardinfo">
        <div class="row no-gutters">
          <div class="col-md-3">
            <img src="../../public/img/ceo.jpg" class="cardinfo-img-left" alt="Card image cap">
          </div>
          <div class="col-md-8" id="acercade">
            <div class="card-body">
              <h4 class="card-title">¿Quiénes somos?</h4>
              <p class="card-text">"En Technology Solutions, nos especializamos en el diseño y desarrollo de software avanzado para empresas, hospitales y entidades bancarias. A través de un enfoque innovador y personalizado, ofrecemos soluciones tecnológicas seguras y eficientes que optimizan procesos y potencian el rendimiento.

                Permítanos convertir sus desafíos en oportunidades. Contáctenos para descubrir cómo nuestras soluciones pueden llevar su organización al siguiente nivel de excelencia."</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- sección -->
<div class="container mt-2">
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="col-md-4">
          <img src="../../public/img/marcas.png">
        </div>
        <div class="card-body">
          <h5 class="card-title">Estas marcas confían en nosotros</h5>
          <p class="card-text">Con la confianza de empresas lideres en sus campos y que marcan nuestros servicios con excelencia.</p>
          <a href="#" class="btn btn-primary">Ver mas</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="col-md-4">
          <img src="../../public/img/leng.png">
        </div>
        <div class="card-body">
          <h5 class="card-title">Aliados tecnologicos</h5>
          <p class="card-text">Nuestros aliados tecnológicos son socios clave que fortalecen nuestras soluciones con innovación y excelencia.</p>
          <a href="#" class="btn btn-primary">Ver mas</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- footer -->
<?php
require '../../estructura/footer.php';
?>