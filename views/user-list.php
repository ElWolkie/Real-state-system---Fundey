<?php
echo '
<div class="container-fluid">
    <div class="table-responsive">
        <table class="table table-dark table-sm">
            <thead>
                <tr class="text-center roboto-medium">
                    <th>#</th>
                    <th>CÉDULA</th>
                    <th>USUARIO</th>
                    <th>CORREO</th>
                    <th>PRIVILEGIO</th>
                    <th>ESTATUS</th>
                    <th>ACTUALIZAR</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se insertarán las filas de la tabla -->
            </tbody>
        </table>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
';
?>
