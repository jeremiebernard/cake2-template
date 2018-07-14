<?php $loggedUser = $this->Session->read('Auth.User'); ?>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal"><?php echo Configure::read('app.name'); ?></h5>
    <?php if ($loggedUser): ?>
        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $loggedUser['username']; ?>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?php echo $this->Html->link(__("Déconnexion"), array('plugin' => 'user', 'controller' => 'users', 'action' => 'logout'), array('class' => 'dropdown-item')); ?>
        </div>
    <?php else: ?>
        <?php echo $this->Html->link(__("Connexion"), array('plugin' => 'user', 'controller' => 'users', 'action' => 'login'), array('class' => 'btn btn-outline-primary')); ?>
    <?php endif; ?>
</div>