<?php $this->assign('title', __("Inscription")); ?>
<h1 class="mb-5 text-center"><?php echo __("Inscription"); ?></h1>

<div class="col-md-8 offset-md-2">
    <?php echo $this->Form->create('User', array('inputDefaults' => array('class' => 'form-control', 'div' => 'form-group'))); ?>
        <?php echo $this->Form->input('email', array('label' => __("Email"), 'required' => true)); ?>
        <div class="row">
            <div class="col-md-6">
                <?php echo $this->Form->input('password', array('label' => __("Mot de passe"), 'required' => true)); ?>
            </div>
            <div class="col-md-6">
                <?php echo $this->Form->input('confirm_password', array('type' => 'password', 'label' => __("Confirmation du mot de passe"), 'required' => true)); ?>
            </div>
        </div>
        <?php echo $this->Form->submit(__("S'inscrire"), array('class' => 'btn btn-primary float-right mt-4')); ?>
    <?php echo $this->Form->end(); ?>
</div>

