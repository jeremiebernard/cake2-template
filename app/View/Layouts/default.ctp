<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
?>

<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $this->fetch('title') . ' - ' . Configure::read('app.name'); ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        echo $this->Html->meta('icon');
        echo $this->fetch('meta');

        echo $this->Html->css('https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
        echo $this->Html->css('https://fonts.googleapis.com/css?family=Raleway');
        echo $this->Html->css('https://use.fontawesome.com/releases/v5.1.0/css/all.css');
        echo $this->Html->css('main');
        echo $this->fetch('css');

        echo $this->Html->script('https://code.jquery.com/jquery-3.3.1.slim.min.js');
        echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js');
        echo $this->Html->script('https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js');
        echo $this->Html->script('https://use.fontawesome.com/releases/v5.1.0/js/all.js');
        echo $this->fetch('script');
    ?>
</head>
<body>
    <?php echo $this->element('header'); ?>

    <div class="container py-3">
        <?php echo $this->Flash->render(); ?>
        <?php echo $this->Flash->render('auth'); ?>
        <?php echo $this->fetch('content'); ?>
    </div>

    <?php // echo $this->element('sql_dump'); ?>
</body>
</html>
