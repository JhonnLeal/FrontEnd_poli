<?php
require '../../estructura/header.php';
include '../../estructura/nav2.php';
?>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header text-center">
                    <h3 class="card-title" style="color: #BC8741;">Registro</h3>
                </div>
                <div class="card-body">
                    <form id="registerForm" accept-charset="UTF-8" role="form">
                        <fieldset>
                            <div class="form-group">
                                <label for="firstName">Nombre</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Apellido</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Correo</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary" type="button">Registrarse</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<?php
require '../../estructura/footer.php';
?>