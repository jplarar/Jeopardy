<?php

App::uses('AuthComponent', 'Controller/Component');

class Usuario extends AppModel {

    public $validate = array(
        'username' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required',
                'allowEmpty' => false
            ),
            'unique' => array(
                'rule'    => array('isUniqueUsername'),
                'message' => 'This username is already in use'
            ),
            'alphaNumericDashUnderscore' => array(
                'rule'    => array('alphaNumericDashUnderscore'),
                'message' => 'Username can only be letters, numbers and underscores'
            ),
        ),

        'email' => array(
            'unique' => array(
                'rule'    => array('isUniqueEmail'),
                'message' => 'This email is already in use',
            ),
        ),

    );

    /**
     * Before isUniqueUsername
     * @param array $check
     * @return boolean
     */
    function isUniqueUsername($check) {

        $username = $this->find(
            'first',
            array(
                'fields' => array(
                    'Usuario.id',
                    'Usuario.username'
                ),
                'conditions' => array(
                    'Usuario.username' => $check['username']
                )
            )
        );

        if(!empty($username)){
            if($this->data[$this->alias]['id'] == $username['Usuario']['id']){
                return true;
            }else{
                return false;
            }
        }else{
            return true;
        }
    }

    /**
     * Before isUniqueEmail
     * @param array $check
     * @return boolean
     */
    function isUniqueEmail($check) {

        $email = $this->find(
            'first',
            array(
                'fields' => array(
                    'Usuario.id'
                ),
                'conditions' => array(
                    'User.email' => $check['email']
                )
            )
        );

        if(!empty($email)){
            if($this->data[$this->alias]['id'] == $email['Usuario']['id']){
                return true;
            }else{
                return false;
            }
        }else{
            return true;
        }
    }

    public function alphaNumericDashUnderscore($check) {
        // $data array is passed using the form field name as the key
        // have to extract the value to make the function generic
        $value = array_values($check);
        $value = $value[0];

        return preg_match('/^[a-zA-Z0-9_ \-]*$/', $value);
    }

}

