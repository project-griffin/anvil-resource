<?php
App::uses('AppController', 'Controller');
/**
 * SectionsUsers Controller
 *
 * @property SectionsUser $SectionsUser
 * @property PaginatorComponent $Paginator
 */
class SectionsUsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function beforeFilter() {
		$this->M = $this->SectionsUser;
		parent::beforeFilter();
    }

}
