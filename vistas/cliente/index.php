<?php
require '../../estructura/header.php';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light custom-navbar ">
    <a class="navbar-brand" href="#">
        <img src="../../public/img/icon.png" style="width: 45px; height: 45px; margin-right: 8px;">
        Technology Solutions
    </a>

    <div class="collapse navbar-collapse">
      
        <div class="navbar-nav ml-auto form-group">
            <span class="fa fa-search form-control-icon"></span>
            <input type="text" class="form-control" placeholder="Busca un caso">
        </div>
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

<div class="container mt-5">
    <h2>Tabla con Botones de Switch</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>N° de Caso</th>
                <th>Fecha de Registro</th>
                <th>Estado Actual </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Caso 1</td>
                <td>dd/mm/aaa</td>
                <td>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Caso 2</td>
                <td>dd/mm/aaa</td>
                <td>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch2">
                        <label class="custom-control-label" for="customSwitch2"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Caso 3</td>
                <td>dd/mm/aaa</td>
                <td>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch3">
                        <label class="custom-control-label" for="customSwitch3"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Caso 4</td>
                <td>dd/mm/aaa</td>
                <td>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch4">
                        <label class="custom-control-label" for="customSwitch4"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Caso 5</td>
                <td>dd/mm/aaa</td>
                <td>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch5">
                        <label class="custom-control-label" for="customSwitch5"></label>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>