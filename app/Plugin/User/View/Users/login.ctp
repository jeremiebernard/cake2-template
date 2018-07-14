<?php $this->assign('title', __("Connexion")); ?>
<h1 class="mb-5 text-center"><?php echo __("Connexion"); ?></h1>



<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="row">
            <div class="col-md-6">
                <?php echo $this->Form->create('User', array('inputDefaults' => array('class' => 'form-control', 'div' => 'form-group'))); ?>
                    <?php echo $this->Form->input('email', array('label' => __("Email"), 'required' => true)); ?>
                    <?php echo $this->Html->link(__("Mot de passe oublié ?"), array('action' => 'forgotPassword'), array('class' => 'float-right')); ?>
                    <?php echo $this->Form->input('password', array('label' => __("Mot de passe"), 'required' => true)); ?>
                    <div class="form-group custom-control custom-checkbox">
                        <?php echo $this->Form->input('remember_me', array('type' => 'checkbox', 'label' => false, 'div' => false, 'class' => 'form-control custom-control-input')); ?>
                        <?php echo $this->Form->label('remember_me', __("Se souvenir de moi"), array('class' => 'custom-control-label')); ?>
                    </div>
                    <div class="text-center mt-4">
                        <?php echo $this->Form->submit(__("Se connecter"), array('class' => 'btn btn-primary')); ?>
                    </div>
                <?php echo $this->Form->end(); ?>
            </div>
            <div class="col-md-6 border-left d-flex flex-column align-items-center justify-content-center">
                <p><?php echo __("Pas encore de compte ?"); ?></p>
                <?php echo $this->Html->link(__("Inscription"), array('action' => 'register'), array('class' => 'btn btn-outline-success')); ?>
            </div>
        </div>
    </div>
</div>


