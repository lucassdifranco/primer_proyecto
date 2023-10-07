<?php 
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>


<!---barranav--->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand me-autobarra" href="principal_ultimo">
    <!---logoempresa--->
        <img src="assets/img/logo.jpg" alt="marca"
         width="70" height="25" class="img-fluid"/>
    </a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
      <!---navbar ADMIN--->
      <?php if(session()->perfil_id == 1): ?>
      <div class="btn btn-secondary active btnUser btn-sm">
      <a href="">ADMIN: <?php echo session('nombre'); ?> </a>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="registro">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ingresa">Ingresar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar sesión </a>
            </li>
      </ul>
          <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="..." aria-label="Buscar">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
          </div>
          <!---navbar CLIENTE--->
            <?php elseif(session()->perfil_id == 2): ?>
      <div class="btn btn-secondary active btnUser btn-sm">
      <a href="">CLIENTE: <?php echo session('nombre'); ?> </a>
      </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="quienes_somos">Quiénes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inscripcionlog">Inscripción</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar sesión </a>
            </li>
      </ul>
         <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="..." aria-label="Buscar">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
        </div>
      <!---navbar no login--->
      <?php else:?>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="quienes_somos">Quiénes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inscripcion">Inscripción</a>
        </li>
           <li class="nav-item">
          <a class="nav-link" aria-current="page" href="registro">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ingresa">Ingresar</a>
        </li>
      </ul>
        </div>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="..." aria-label="Buscar">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
      <?php endif;?>
    </div>
  </div>
</nav>