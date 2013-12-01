<?php
App::uses('AppController', 'Controller');
/**
 * ResFiles Controller
 *
 * @property ResFile $ResFile
 * @property PaginatorComponent $Paginator
 */
class ResFilesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function beforeFilter() {
		$this->M = $this->ResFile;
		parent::beforeFilter();
    }

}
