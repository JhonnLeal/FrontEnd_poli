<?php
require '../../estructura/header.php';
include '../../estructura/nav.php';
?>

<br>
<main>
    <article class="container">
        <div class="row justify-content-center">

            <div class="col-sm-4">
                <div class="">
                    <h3 class="subtitle-contact-section text-center" style="color: #BC8741;"> Contáctanos</h3>
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

            <div class="col-sm-1 text-center">
                <div class="vertical-line" style="border-left: 2px solid #BC8741; height: 100%;"></div>
            </div>

            <div class="col-sm-4">
                <h3 class="subtitle-contact-section text-center" style="color: #BC8741;"> Nuestras Redes</h3>
                <hr>
                <div class="login-main">
                    <ul class="list-unstyled">
                        <li class="margin-space">
                            <i class="fa fa-phone" style="color: #BC8741;"></i> Teléfono
                        </li><br>
                        <li class="margin-space">
                            <i class="fab fa-whatsapp" style="color: #BC8741;"></i> Whatsapp
                        </li><br>
                        <li class="margin-space">
                            <i class="fab fa-facebook" style="color: #BC8741;"></i> Facebook
                        </li><br>
                        <li class="margin-space">
                            <i class="fab fa-instagram" style="color: #BC8741;"></i> Instagram
                        </li><br>
                        <li class="margin-space">
                            <i class="fa fa-envelope" style="color: #BC8741;"></i> Email
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </article>
</main>

<br>
<?php
require '../../estructura/footer.php';
?>
<script src="/public/js/contacto.js" defer></script>