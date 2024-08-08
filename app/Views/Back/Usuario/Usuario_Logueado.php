<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-5">
            <?php if(session()->getFlashdata('msg')):?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg');?>
                </div>
            <?php endif;?>
            <?php if(session()->Perfil_id == 1): ?>
            <div style="margin-bottom:3rem; color: blue;"> 
                <h1>Bienvenido</h1>   
                <img class="center" height="auto" width="526px" src="<?php echo base_url ('assets/img/admin.png');?>">
            </div>
            <?php elseif(session()->Perfil_id ==2): ?>
            <div style="margin-bottom:3rem; color: blue;">
                <h1>Bienvenido</h1>   
                <img class="center" height="auto" width="526px" src="<?php echo base_url ('assets/img/entornos-de-desarrollo.jpg');?>">
            </div>
            <?php endif;?>
        </div>
    </div>
</div>
