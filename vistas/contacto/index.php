<?php
require '../../estructura/header.php';
include '../../estructura/nav.php';
?>

<main>
    <article class="container">
        <div class="row">

            <div class="col-sm-4">
                <div class="">

                    <h3 class="subtitle-contact-section"><i class="fa fa-shield"></i> Contáctanos</h3>
                    <hr>
                    <div class="form-group">
                        <label class="control-label" for="">Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="">Apellido</label>
                        <input type="text" class="form-control" placeholder="Apellido">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="">Correo</label>
                        <input type="text" class="form-control" placeholder="Correo">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="">Mensaje</label>
                        <textarea name="Mensaje" class="form-control" placeholder="Mensaje"></textarea>
                    </div>

                    <div style="height:10px;"></div>
                    <div class="form-group">
                        <label class="control-label" for=""></label>
                        <input type="submit" class="btn btn-primary">
                    </div>

                </div>
            </div>
            <div class="col-sm-4">
                <h3 class="subtitle-contact-section"><i class="fa fa-shield"></i> Nuestras Redes</h3>
                <hr>
                <div class="login-main">
                    <ull>
                        <li class="margin-space">
                            <img src="https://via.placeholder.com/20?text=📞" alt="Teléfono" class="icon-contact">Teléfono
                        </li>
                        <li class="margin-space">
                            <img src="https://via.placeholder.com/20?text=📱" alt="Whatsapp" class="icon-contact">Whatsapp
                        </li>
                        <li class="margin-space">
                            <img src="https://via.placeholder.com/20?text=📘" alt="Facebook" class="icon-contact">Facebook
                        </li>
                        <li class="margin-space">
                            <img src="https://via.placeholder.com/20?text=📸" alt="Instagram" class="icon-contact">Instagram
                        </li>
                        <li class="margin-space">
                            <img src="https://via.placeholder.com/20?text=✉️" alt="Email" class="icon-contact">Email
                        </li>
                    </ull>


                </div>
            </div>
        </div>
        </div>
    </article>
</main>

<footer>
    <p>&copy; 2024 Tu Empresa. Todos los derechos reservados.</p>
</footer>
<script src="/public/js/contacto.js" defer></script>