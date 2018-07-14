<?php

App::uses('AppController', 'Controller');

/**
 * @property User $User
 */

class UsersController extends AppController {

    public function register() {
        $user = $this->Auth->user();
        if (!empty($user)) {
            return $this->redirect($this->Auth->redirectUrl());
        }

        if ($this->request->is('post')) {
            $data = $this->request->data;

            if (!$this->User->save($data)) {
                $this->Flash->set(__("Une erreur est survenue lors de votre inscription.") . ' ' . __("Veuillez réessayer."), array('params' => array('type' => 'danger')));
                return;
            }

            $this->Flash->set(__("Votre inscription a été effectuée avec succès."), array('params' => array('type' => 'success')));
            return $this->redirect(array('action' => 'login'));
        }
    }

    public function login() {
        $user = $this->Auth->user();
        if (!empty($user)) {
            return $this->redirect($this->Auth->redirectUrl());
        }

        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            }
			unset($this->request->data['User']['password']);
            $this->Flash->set(__("Nom d'utilisateur ou mot de passe invalide."), array('params' => array('type' => 'danger')));
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

}
