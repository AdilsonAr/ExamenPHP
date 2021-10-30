<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        APP
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
            <a class="nav-link" href="<?= constant('URL') ?>inicio/index">Inicio</a>
            <a class="nav-link" href="<?= constant('URL') ?>producto/index">Productos</a>
            <a class="nav-link" href="<?= constant('URL') ?>informe/pdfMarcas" target="_blank">Reporte 1</a>
            <a class="nav-link" href="<?= constant('URL') ?>informe/pdfProductos">Reporte 2</a>
            <a class="nav-link" href="<?= constant('URL') ?>inicio/logout">Salir</a>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">
                    Gráficos
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?= constant('URL') ?>graficos/anillo">Anillo</a>
                    <a class="dropdown-item" href="<?= constant('URL') ?>graficos/barras">Barras</a>
                    <a class="dropdown-item" href="<?= constant('URL') ?>graficos/circular">Circular</a>
                </div>
            </div>
        </div>
    </div>
</nav>