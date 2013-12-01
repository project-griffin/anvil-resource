<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

    public function beforeFilter()
    {
        $this->M = $this->User;
        parent::beforeFilter();
    }
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

}
