<!--navegacion-->
<?php
    $session = session();
    $Nombre = $session->get('Nombre');
    $Perfil = $session->get('Perfil_id');
?>

<nav class="navbar navbar-expand-lg bg-body-green">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand me auto barra" href="principal_ultimo">
                <!--logo/marca de la empresa-->
                <img src='assets/img/logo.jpg' alt="marca"width="75" height="30" class="img-fluid"/>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php if(session()->Perfil_id == 1): ?>
        <div class="btn btn-secondary active btnUser btn-sm">
            <a href="">ADMIN: <?php echo session('Nombre'); ?> </a>
        </div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <a class="navbar-brand" href="#"></a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav.item">
                    <a class="nav-link" href="registro"> Registrarse</a></li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login">Login</a></li>
                </li>''
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo base_url('/logout');?> tabidenx="-1" aria-distabled="true">Cerrar Sesion</a>
                </li>   
            </ul>
        </div>
        <?php elseif(session()->Perfil_id == 2): ?>
            <!--NAVBAR PARA CLIENTES que puedan comprar-->
            <a class="navbar-brand" href="#"></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link">Cliente: <?php echo session('Nombre'); ?> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='quienes_somos'> Quienes somos</a></li>
                    </li>
                    <li class="nav-item">
                        <a class=nav-link href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesion</a>
                    </li>
                </ul>
            </div>
        <?php else:?>
            <!--NAVBAR PARA CLIENTES no logueados_-->
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <a class="navbar-brand" href="#"></a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <li class="nav-item">
                        <a class="nav-link" href='quienes_somos'> Quienes somos</a></li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='acerca_de'>Acerca de</a></li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='registro'>Registrarse</a></li>
                    </li> 
                    <li class="nav-item">
                    <a class="nav-link" href='login'>Login</a></li>
                    </li>
                </ul>
            </div>
        <form class="d-flex" role="buscar">
            <input class="form-control me-2" type="search" placeholder= "buscar" arial-label="search">
            <button class="btn btn-outline-secondary" type="submit">Buscar</button>
        </form>
        <?php endif;?>
    </div>
</nav>
<!--fin barra de navegacion-->