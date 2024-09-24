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
                    <h2 class="card-title" style="color: #BC8741;">Accede a tu cuenta</h2>
                </div>
                <div class="card-body">
                    <form id="loginForm" accept-charset="UTF-8" role="form">
                        <fieldset>
                            <div class="form-group">
                                <label for="email">Correo electrónico</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" required>
                                    <div class="input-group-append">
                                        <button id="show_password" class="btn btn-primary" type="button">
                                            <span class="fa fa-eye-slash icon"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary" type="button" onclick="login()">Iniciar sesión</button>
                    <a href="../registro/index.php" class="btn btn-primary">Registrarse</a>
                </div>
                <div class="text-center mt-3">
                    <a href="../contraseña/index.php" style="color: black; text-decoration: underline;">Olvidé mi contraseña</a>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>


<style>
    .btn-primary {
        background-color: #BC8741;
        /* Color de fondo del botón */
        border-color: #BC8741;
        /* Color del borde del botón */
    }

    .btn-primary:hover {
        background-color: #a3743b;
        /* Color de fondo al pasar el mouse sobre el botón */
        border-color: #a3743b;
        /* Color del borde al pasar el mouse sobre el botón */
    }
</style>

<script type="text/javascript">
    $(document).ready(function() {
        $('#show_password').click(function() {
            const passwordInput = $('#password');
            const icon = $(this).find('.icon');

            if (passwordInput.attr('type') === 'password') {
                passwordInput.attr('type', 'text');
                icon.removeClass('fa-eye-slash').addClass('fa-eye');
            } else {
                passwordInput.attr('type', 'password');
                icon.removeClass('fa-eye').addClass('fa-eye-slash');
            }
        });
    });
</script>

<script type="text/javascript" src="../../public/js/login.js"></script>

<br><br>
<?php
require '../../estructura/footer.php';
?>