<?php
# /app/Controller/RecipesController.php

class UsersController extends AppController {
	var $layout = 'login';
	var $uses = array();
	var $components = array('Auth', 'Session');
    var $helpers = array('Html', 'Form', 'Session');

    function beforeFilter() {
        //Configure AuthComponent
        $this->Auth->authorize = 'actions';
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'logout');
        $this->Auth->loginRedirect = array('controller' => 'posts', 'action' => 'add');
    }

	function index(){

	}

	function login(){

	}

	function logout(){

	}

}

?>