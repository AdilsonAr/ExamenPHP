<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        APP EMPLEADOS
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
            <a class="nav-link" href="<?= constant('URL') ?>inicio/index">Inicio</a>
            <?php if($_SESSION["rol"]==1): ?>
                <a class="nav-link" href="<?= constant('URL') ?>empleado/index">Empleados</a> 
            <?php endif;?>
            <?php if($_SESSION["rol"]==2): ?>
                <a class="nav-link" href="<?= constant('URL') ?>reporte/pdfAreas" target="_blank">Reporte 1</a>
                <a class="nav-link" href="<?= constant('URL') ?>reporte/pdfEmpleados">Reporte 2</a>
            <?php endif;?>
            <?php if($_SESSION["rol"]==3): ?>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">
                        Gráficos
                    </a>
                    <div class="dropdown-menu"> 
                        <a class="dropdown-item" href="<?= constant('URL') ?>graficos/lineas">Lineas</a> 
                    </div>
                </div>
            <?php endif;?>
            <a class="nav-link" href="<?= constant('URL') ?>inicio/logout">Salir</a>
        </div>
    </div>
</nav>