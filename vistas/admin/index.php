<?php
require '../../estructura/header.php';
include '../../estructura/navadmin.php';
?>

<!-- <div class="container text-center">
    <img src="../../public/img/ejemplo.jpg" class="img-fluid mb-4" style="max-width: 90%;">
</div> -->


<style>
        .charts-container {
            display: flex; /* Utiliza flexbox para alinear los gráficos */
            justify-content: center; /* Centra los gráficos en el eje horizontal */
            gap: 100px; /* Espacio entre los gráficos (aumentado a 40px) */
        }

        .pie-chart {
            width: 150px; /* Ancho del gráfico */
            height: 150px; /* Alto del gráfico */
            border-radius: 50%; /* Hace que el div sea circular */
            background: conic-gradient(
                #BC8741 0% 20%,   /* Primer segmento (20%) */
                #A68C6A 20% 40%,  /* Segundo segmento (20%) */
                #FFEBD0 40% 60%,  /* Tercer segmento (20%) */
                #F6D09F 60% 80%,   /* Cuarto segmento (20%) */
                #D1A263 80% 100%   /* Quinto segmento (20%) */
            );
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Sombra alrededor del gráfico */
        }

        .chart-label {
            text-align: center; /* Centra el texto debajo de cada gráfico */
            margin-top: 10px; /* Espacio entre el gráfico y el texto */
            font-weight: bold; /* Estilo de texto en negrita */
        }

        /* Estilo para la línea */
        .divider {
            width: 80%; /* Ancho de la línea */
            height: 5px; /* Altura de la línea */
            background-color: #BC8741; /* Color de la línea */
            margin: 20px auto; /* Centra la línea horizontalmente */
        }


        /* diagramas de barras */


        .bar-chart-container {
            width: 100%; /* Ancho completo */
            display: flex; /* Utiliza flexbox para alinear las barras */
            flex-direction: column; /* Coloca las barras en una columna */
            align-items: center; /* Alinea las barras al centro */
            gap: 40px; /* Espacio entre las barras */
        }

        .bar {
            display: flex; /* Utiliza flexbox para la barra y su imagen */
            align-items: center; /* Alinea verticalmente la imagen y la barra */
            width: 300px; /* Ancho de la barra */
            height: 30px; /* Alto de la barra */
        }

        .bar img {
            width: 60px; /* Ancho de la imagen circular */
            height: 60px; /* Alto de la imagen circular */
            border-radius: 50%; /* Hace que la imagen sea circular */
            margin-right: 10px; /* Espacio entre la imagen y la barra */
        }

        .bar-segment {
            height: 100%; /* Alto completo de la barra */
        }

        .bar1 {
            background-color: #BC8741; /* Color del primer segmento */
            width: 40%; /* Ancho del primer segmento */
        }

        .bar2 {
            background-color: #A68C6A; /* Color del segundo segmento */
            width: 30%; /* Ancho del segundo segmento */
        }

        .bar3 {
            background-color: #FFEBD0; /* Color del tercer segmento */
            width: 30%; /* Ancho del tercer segmento */
        }
    </style>

<!-- diagramas circulares -->
<div class="charts-container mt-4">
    <div>
        <div class="pie-chart"></div> <!-- Diagrama circular -->
        <div class="chart-label">Estadística Anual</div>
    </div>
    <div>
        <div class="pie-chart"></div> <!-- Diagrama circular -->
        <div class="chart-label">Estadística Semestre</div>
    </div>
    <div>
        <div class="pie-chart"></div> <!-- Diagrama circular -->
        <div class="chart-label">Estadística Trimestre</div>
    </div>
</div>

<div class="divider"></div> <!-- Línea debajo de los diagramas -->


<!-- diagramas de barras -->

<div class="bar-chart-container mt-4">
    <div class="bar">
        <img src="../../public/img/usuario1.svg" alt=""> <!-- Imagen circular -->
        <div class="bar-segment bar1"></div> <!-- Primer segmento de la barra 1 -->
        <div class="bar-segment bar2"></div> <!-- Segundo segmento de la barra 1 -->
        <div class="bar-segment bar3"></div> <!-- Tercer segmento de la barra 1 -->
    </div>
    <div class="bar">
        <img src="../../public/img/usuario2.svg" alt=""> <!-- Imagen circular -->
        <div class="bar-segment bar1"></div> <!-- Primer segmento de la barra 2 -->
        <div class="bar-segment bar2"></div> <!-- Segundo segmento de la barra 2 -->
        <div class="bar-segment bar3"></div> <!-- Tercer segmento de la barra 2 -->
    </div>
    <div class="bar">
        <img src="../../public/img/usuario2.svg"> <!-- Imagen circular -->
        <div class="bar-segment bar1"></div> <!-- Primer segmento de la barra 3 -->
        <div class="bar-segment bar2"></div> <!-- Segundo segmento de la barra 3 -->
        <div class="bar-segment bar3"></div> <!-- Tercer segmento de la barra 3 -->
    </div>
</div>

<br><br>
<?php
require '../../estructura/footer.php';
?>