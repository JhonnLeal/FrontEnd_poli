<?php
require '../../estructura/header.php';
include '../../estructura/navuser.php';
?>
<!-- tabla de casos -->
<div class="container mt-3 text-center">
    <h2 style="color: #BC8741">Estado Actual de Casos</h2><br>
    <div class="table-responsive">
        <table class="table table-striped custom-table mx-auto">
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
    <div class="mt-4">
        <button class="btn btn-primary">
            <i class="fas fa-plus"></i> Crear Nuevo Caso
        </button>
        <button class="btn btn-primary">
            Estados Posibles: Activo / Inactivo
        </button>
    </div>
</div>


<br>
<?php
require '../../estructura/footer.php';
?>