<?php

Router::connect('/login', array('plugin' => 'user', 'controller' => 'users', 'action' => 'login'));
Router::connect('/register', array('plugin' => 'user', 'controller' => 'users', 'action' => 'register'));
Router::connect('/logout', array('plugin' => 'user', 'controller' => 'users', 'action' => 'logout'));
