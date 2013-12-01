<?php
App::uses('AppController', 'Controller');
/**
 * ResFolders Controller
 *
 * @property ResFolder $ResFolder
 * @property PaginatorComponent $Paginator
 */
class ResFoldersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function beforeFilter() {
		$this->M = $this->ResFolder;
		parent::beforeFilter();
    }

}
