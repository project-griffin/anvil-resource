<?php
App::uses('AppController', 'Controller');
/**
 * RolesUsers Controller
 *
 * @property RolesUser $RolesUser
 * @property PaginatorComponent $Paginator
 */
class RolesUsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function beforeFilter() {
		$this->M = $this->RolesUser;
		parent::beforeFilter();
    }

}
