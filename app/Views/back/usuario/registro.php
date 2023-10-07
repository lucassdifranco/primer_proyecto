<div class="content">
<!---registrar--->
<section class="vh-60 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Registrate!</h2>
                
                <?php $validation = \Config\Services::validation(); ?>
                <form method="post" action="<?php echo base_url('/enviar-form') ?>">
                    <?=csrf_field();?>
                    <?=csrf_field();?>
                    <?php if(!empty (session()->getFlashdata('fail'))):?>
                    <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
                    <?php endif?>
                    <?php if(!empty (session()->getFlashdata('success'))):?>
                    <div class="alert alert-danger"><?=session()->getFlashdata('success');?></div>
                    <?php endif?>
             

                <div class="form-outline mb-4">
                  <input name="nombre" type="text" id="form3Example1cg" class="form-control form-control-lg" placeholder="Nombre" />
                <!---ERROR--->
                    <?php if($validation->getError('nombre')) {?>
                    <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('nombre'); ?> 
                    </div>
                    <?php }?>
                    <!---finError--->
                </div>
                  <div class="form-outline mb-4">
                  <input name="apellido" type="text" id="form3Example1cg" class="form-control form-control-lg" placeholder="Apellido" />
                <!---ERROR--->
                    <?php if($validation->getError('apellido')) {?>
                    <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('apellido'); ?> 
                    </div>
                    <?php }?>
                    <!---finError--->
                </div>

                <div class="form-outline mb-4">
                  <input name="email" type="email" id="form3Example3cg" class="form-control form-control-lg" placeholder="Email" />
                <!---ERROR--->
                    <?php if($validation->getError('email')) {?>
                    <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('email'); ?> 
                    </div>
                    <?php }?>
                    <!---finError--->
                </div>
                  
                  <div class="form-outline mb-4">
                  <input name="usuario" type="user" id="form3Example3cg" class="form-control form-control-lg" placeholder="Usuario"/>
                <!---ERROR--->
                    <?php if($validation->getError('usuario')) {?>
                    <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('usuario'); ?> 
                    </div>
                    <?php }?>
                    <!---finError--->
                </div>

                <div class="form-outline mb-4">
                  <input name="pass" type="password" id="form3Example4cg" class="form-control form-control-lg" placeholder="Contraseña" />
                  <!---ERROR--->
                    <?php if($validation->getError('pass')) {?>
                    <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('pass'); ?> 
                    </div>
                    <?php }?>
                    <!---finError--->
                </div>
                 
                  

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                      
                      
                      
                      
                      
                      
                     Acepto los <a href="#!" class="text-body"><u>Términos y condiciones</u></a>
                  </label>
                </div>
                     <div>
                          <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Crear cuenta</button>
                </div>
                  <div class="d-flex justify-content-center">
                  
                      <button type="reset"
                    class="btn btn-danger btn-block btn-lg gradient-custom-4 text-body">Eliminar</button>
                </div>
                  
                     </div>
               

                <p class="text-center text-muted mt-5 mb-0">Ya tenés una cuenta? <a href="ingresa">Ingresá acá</a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
</section>