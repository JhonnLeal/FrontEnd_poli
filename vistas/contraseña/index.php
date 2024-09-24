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
                    <h3 class="card-title" style="color: #BC8741;">Reestablecer Contraseña</h3>
                </div>
                <div class="card-body">
                    <form id="resetPasswordForm" accept-charset="UTF-8" role="form">
                        <fieldset>
                            <div class="form-group">
                                <label for="email">Correo</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary" type="button">Enviar Correo</button>
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