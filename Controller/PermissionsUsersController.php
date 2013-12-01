<?php
App::uses('AppController', 'Controller');
/**
 * PermissionsUsers Controller
 *
 * @property PermissionsUser $PermissionsUser
 * @property PaginatorComponent $Paginator
 */
class PermissionsUsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function beforeFilter() {
		$this->M = $this->Permission;
		parent::beforeFilter();
    }

}
