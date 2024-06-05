<style>
    ul, li {
        font-size: 17px; 
        font-family:Arial, Helvetica, sans-serif;
    }
</style>

<figure class="full-box nav-lateral-avatar">
    <i class="far fa-times-circle show-nav-lateral"></i>
    <figcaption class="roboto-medium text-center" style="font-size: 25px; font-family: Verdana, Geneva, Tahoma, sans-serif; text-shadow: 2px 4px 3px black;">
        <?php echo $_SESSION['usuario']['username']; ?> <br><small style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 18px;" class="roboto-condensed-light"><?php echo $_SESSION['usuario']['privilegio']; ?></small>
    </figcaption>
</figure>


<div class="full-box nav-lateral-bar"></div>

<nav class="full-box nav-lateral-menu">
    <ul>
        <li>
            <a href="home.php"><i class="fas fa-home"></i> &nbsp; Inicio</a>
        </li>

        <li>
            <a href="#" class="nav-btn-submenu" ><i class="fas fa-archive"></i> &nbsp; Archivo <i class="fas fa-chevron-down"></i></a>
            <ul>
                <li>
                    <a href="persona.php"><i class="fa-solid fa-user-large"></i> &nbsp; Persona</a>
                </li>

                <li>
                    <a href="usuario.php"><i class="fas fa-user-circle"></i> &nbsp; Usuario</i></a>
                </li>
                   
                    <div class="full-box nav-lateral-bar" style="height: 2px;"></div>
                    
                    <a href="#" class="btn-exit-system">
                        <i class="fas fa-power-off"></i> &nbsp;Salir
                    </a>
            </ul>
        </li>

        <li>
            <a href="#" class="nav-btn-submenu"><i class="fa-solid fa-rotate"></i></i> &nbsp; Procesos <i class="fas fa-chevron-down"></i></a>
            <ul>
                <li>
                        <a href="#" class="nav-btn-submenu"><i class="fas fa-box"></i></i> &nbsp; Almacén <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="bienes.php"><i class="fas fa-pallet fa-fw"></i> &nbsp; Bienes</a>
                                </li>
                                
                                <li>
                                    <a href="recurso.php"><i class="fas fa-fill"></i> &nbsp; Recurso Material</a>
                                </li>
                            </ul>
                    <li>
                        <a href="departamento.php"><i class="fas fa-city"></i> &nbsp; Departamento</i></a>
                    </li>

                    <li>
                        <a href="prestamo.php"><i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Préstamos</a>
                    </li>

                    <li>
                        <a href="evento_deportivo.php"><i class="fas fa-biking"></i> &nbsp; Evento Deportivo</a>
                    </li>

                    <div class="full-box nav-lateral-bar" style="height: 2px;"></div>
                    
                    <a href="#"><i class="fas fa-chalkboard-teacher"></i> &nbsp;Actualizar Estructura</a>

                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="nav-btn-submenu"><i class="	fas fa-cogs"></i> &nbsp; Sistema <i class="fas fa-chevron-down"></i></a>
            <ul>
                <li>
                    <a href="reportes.php"><i class="fas fa-clipboard-list"></i> &nbsp; Generar Reporte</a>
                </li>
                
                    <a href="#" class="nav-btn-submenu"><i class="fas fa-cog"></i> &nbsp; Opciones <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href="#"><i class="fas fa-print"></i> &nbsp;Respaldo</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-edit"></i> &nbsp; Configuración de la Estación</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-lock"></i> &nbsp;Seguridad</a>
                        </li>
                        <li>
                            <a href="institucion.php"><i class="fa-solid fa-landmark"></i>&nbsp; Institución</a>
                        </li>
                    </ul>
            </ul>
        </li>
    </ul>
</nav>