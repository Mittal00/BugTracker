<?php
class User extends AppModel{
    //var $name= 'User';
    function login($data = array()){
	$result = $this->find('first',array(
                 'conditions' => array(
                'Login.email' => $data['User']['email']
                    )
             )
    );
		return $result;
    }
}