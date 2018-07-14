<?php

App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

    public $validate = array(
        'email' => array(
            'email' => array(
                'rule' => array('email'),
                'message' => 'Veuillez saisir une adresse email valide.',
                'required' => true
            ),
            'unique' => array(
                'rule' => array('isUnique'),
                'message' => 'L\'adresse email est déjà associé à un compte.'
            )
        ),
        'password' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'Veuillez saisir un mot de passe.'
            ),
            'confirmPassword' => array(
                'rule' => array('confirmPassword'),
                'message' => 'Les mots de passe doivent être identiques.'
            )
        ),
    );

    public function confirmPassword() {
        if (empty($this->data['User']['confirm_password'])) {
            return false;
        }

        if ($this->data['User']['password'] !== $this->data['User']['confirm_password']) {
            return false;
        }

        return true;
    }

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
        }
        return true;
    }

}
