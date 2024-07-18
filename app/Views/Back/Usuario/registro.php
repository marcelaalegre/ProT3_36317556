<div class="container mt-0 mb-0">
     <div class="card-header text-justify">
         <div class="row d-flex justify-content-center">
             <div class="card col-lg-3" style="width: 50%;">
                <h4>Registrarse</h4>
            
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
<div class="card-body justify-content-center" media="(max-width:768px)">            
         <div class="form">
                 <label for="exampleFormControlInputl" class="form-label">Nombre</label>   
                 <input name="Nombre" type="text" class="form-control" placeholder="nombre">
        <!--Error-->
        <?php if($validation->geterror('Nombre')) {?>
                 <div class='alert alert-danger' mt-2>
                   <?= $error = $validation->getError('Nombre'); ?>
                 </div>
            <?php }?>
         </div>   
        
        <div class="mb-3">
             <label for="exampleFormControlTextarea1" class="form-label">Apellido</label>
             <input type="text" name="Apellido" class="form-control" placeholder="Apellido">
             <!--Error-->
        <?php if($validation->geterror('Apellido')) {?>
                 <div class='alert alert-danger' mt-2>
                   <?= $error = $validation->getError('Apellido'); ?>
                 </div>
            <?php }?>
        </div>
        
        <div class="mb-3">
             <label for="exampleFormControlTextarea1" class="form-label">Email</label>
             <input type="text" name="Email" class="form-control" placeholder="email">
              <!--Error-->
        <?php if($validation->geterror('Email')) {?>
                 <div class='alert alert-danger' mt-2>
                   <?= $error = $validation->getError('Email'); ?>
                 </div>
            <?php }?>
         </div>
         
         <div class="mb-3">
             <label for="exampleFormControlTextarea1" class="form-label">Usuario</label>
             <input type="text" name="Usuario" class="form-control" placeholder="usuario">
              <!--Error-->
        <?php if($validation->geterror('Usuario')) {?>
                 <div class='alert alert-danger' mt-2>
                   <?= $error = $validation->getError('Usuario'); ?>
                 </div>
            <?php }?>
         </div>
       
         <div class="mb-3">
             <label for="exampleFormControlTextarea1" class="form-label">Password</label>
             <input type="text" name="Pass" class="form-control" placeholder="password">
              <!--Error-->
        <?php if($validation->geterror('Pass')) {?>
                 <div class='alert alert-danger' mt-2>
                   <?= $error = $validation->getError('Pass'); ?>
                 </div>
            <?php }?>
         </div>
         
         <input type="submit" value="Guardar" class="btn btn-success">
         <input type="reset" value="Cancelar" class="btn btn-danger">
         </div>
     </form>
             </div>
         </div>
     </div>
</div>
