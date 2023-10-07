<div class="content">
<!---error--->
    <?php if(session()->getFlashdata('msg')):?>
    <div class="alert alert-warning">
    <?= session()->getFlashdata('msg')?>
    </div>
    <?php endif;?>
    <!---login--->
<form method=post action="<?php echo base_url('enviarlogin') ?>">
    
    
    <section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Ingresá a tu cuenta!</h2>

              <form>

                <div class="form-outline mb-4">
                  <input autocomplete="off" name="email" type="email" id="form3Example1cg" class="form-control form-control-lg" placeholder="Email" />
                
                </div>
                <div class="form-outline mb-4">
                  <input name="pass" type="password" id="form3Example4cg" class="form-control form-control-lg" placeholder="Contraseña" />
                  
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Ingresar</button>
                
                  <button type="reset"
                    class="btn btn-danger btn-block btn-lg gradient-custom-4 text-body">Cancelar</button>
                </div>
</div>
                <p class="text-center text-muted mt-5 mb-0">No tenés una cuenta? <a href="registro">Registrate acá</a></p>

              </form>
</form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
</section>