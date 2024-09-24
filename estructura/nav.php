<nav class="navbar navbar-expand-lg navbar-light bg-light custom-navbar">
  <a class="navbar-brand" href="#">
    <img src="../../public/img/icon.png" style="width: 45px; height: 45px; margin-right: 8px;">
    Technology Solutions
  </a>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Servicios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Marcas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../vistas/contacto/">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#acercade">Acerca de</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../login/login.php">
          Ingreso <img src="../../public/img/log1.png" class="icono-ingreso" style="width: 20px; height: 20px; margin-left: 8px;" alt="Icono de ingreso"> <!-- Icono después del texto -->
        </a>
      </li>
    </ul>
  </div>
</nav>


<style>
  .custom-navbar {
    border-bottom: 4px solid #BC8741;
    /* Línea inferior */
  }

  .navbar-brand img {
    vertical-align: middle;
    /* Alinea el icono con el texto */
  }

  /* --------------------------------------------- */
  .nav-link {
    color: #31241E !important;
  }

  .navbar-brand {
    color: #31241E !important;
  }

  .nav-item .nav-link:hover {
    color: #BC8741 !important;
    /* Cambia el color del texto al pasar el mouse, asegurándote de que sobrescriba el estilo de Bootstrap */
    transition: color 0.3s ease;
    /* Transición suave del color */
  }

  /* Estilo para la imagen inicial */
  .icono-ingreso {
    width: 20px;
    height: 20px;
    transition: 0.3s ease;
    /* Transición suave para el cambio de imagen */
  }

  /* Cambiar la imagen cuando se hace hover sobre el enlace */
  .nav-item .nav-link:hover .icono-ingreso {
    /* Cambia la imagen cuando se hace hover */
    content: url('../../public/img/log2.png');
  }
</style>