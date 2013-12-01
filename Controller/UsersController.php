<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function beforeFilter()
    {
        $this->M = $this->User;
        parent::beforeFilter();
    }

    public function login() {
    	if ($this->request->is('post')) {
    		if ($this->Auth->login()) {
    			$this->set('result', 'OK');
    		} else {
    			$this->set('result', 'ERROR');
			}
				$this->set('_serialize', array('result'));	
    	}
    }

    public function logout() {
    	$this->set('result', 'OK');
    	$this->set('_serialize', array('result'));
    }


    public function admin_login() {
    	if ($this->request->is('post')) {
    		if ($this->Auth->login()) {
    			return $this->redirect($this->Auth->redirectUrl());
    		}
    		$this->Session->setFlash(__('Username or password is incorrect.'));
    	}
    }

    public function admin_logout() {
    	return $this->redirect($this->Auth->logout());
    }

}
