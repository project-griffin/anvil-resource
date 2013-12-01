<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $scaffold = 'admin';
    public $M = null;

    public $components = array(
    	'RequestHandler', 
    	'Session', 
    	'DebugKit.Toolbar',
    	'Auth'
    );

    public function beforeFilter() {
    	$this->Auth->authenticate = array(
    		AuthComponent::ALL => array('scope' => array('User.is_active' => 1)),
    		'Anvil'
    		);
    	$this->Auth->allow('index');
    }

    public function index() {
        $res = $this->M->find('all');
        $this->set('result', $res);
        $this->set('_serialize', array('result'));
    }

    public function view($id) {
    	$res = $this->M->findById($id);
    	$this->set('result', $res);
    	$this->set('_serialize', array('result'));
    }

    public function edit($id) {
    	$this->M->id = $id;
    	if ($this->M->save($this->request->data)) {
    		$message = 'OK';
    	} else {
    		$message = 'ERROR';
    	}
    	$this->set('result', $message);
    	$this->set('_serialize', 'result');
    }

    public function delete($id) {
    	if ($this->M->delete($id)) {
    		$message = 'OK';
    	} else {
    		$message = 'ERROR';
    	}
    	$this->set('result', $message);
    	$this->set('_serialize', 'result');
    }
}
