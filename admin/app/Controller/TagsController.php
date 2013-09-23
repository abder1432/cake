<?php
App::uses('AppController', 'Controller');
/**
 * Tags Controller
 *
 * @property Tag $Tag
 */
class TagsController extends AppController {
	


 		public $components = array('Paginator');	
	
	
	

/**
 * index method
 *
 * @return void
 */
 
 
	
	public function index() {
		
		// Page Title
		$this->set('title_for_layout', __('Tags'));
				
		// Recursive		
		$this->Tag->recursive = 0;

		// Paginator Settings			
		$limit = isset($this->request->query['limit']) ? $this->request->query['limit'] : 20 ;
        $this->Paginator->settings = array(
        'Tag' => array(
            'limit' => $limit ,
            'order' => array('id' => 'desc'),
        )
       );
		
		
		// Retreive Data	
				
        $this->set('tags', $this->paginate());


		// Search Results
		
		if ($this->request->is('get') && !empty($this->request->query['s'])) {
			
			$query = $this->request->query['s'];
			$options =  array( "OR" => array(
							"Tag.name Like" => "%$query%" ,
							"Tag.description Like" => "%$query%" ,
								)
							 );
			$this->Paginator->setting = array('limit' => 1);
				 
			$tags =  $this->Paginator->paginate('Tag' , $options );
			
		    $this->set( 'tags' , $tags );
			
			$this->Session->setFlash( '<div class="alert alert-info"><a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>' . __('Search results for "'.$query . '"') . '</div>');
	
			}
			
			
		// Bulk Actions	
				if ($this->request->is('get') && !empty($this->request->query['action'])) {
					$action = $this->request->query['action'];
					$items = $this->request->query('cb');
					debug($items);
					switch($action){
						
						case 'delete';
						foreach ($items as $key=>$value ){
							$this->Tag->delete($key);

						}
						
						$this->Session->setFlash(__('Tags deleted'));
					    $this->redirect(array('action' => 'index'));
						break;
						
						
						} // switch

				}

	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tag->exists($id)) {
			throw new NotFoundException(__('Invalid tag'));
		}
		$options = array('conditions' => array('Tag.' . $this->Tag->primaryKey => $id));
		$this->set('tag', $this->Tag->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tag->create();
			if ($this->Tag->save($this->request->data)) {
				$this->Session->setFlash( '<div class="alert alert-success"><a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>' . __('The tag has been saved') . '</div>');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(  '<div class="alert alert-error"><a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>' . __('The tag could not be saved. Please, try again.') . '</div>');
			}
		}


	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tag->exists($id)) {
			throw new NotFoundException(__('Invalid tag'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tag->save($this->request->data)) {
				$this->Session->setFlash(__('The tag has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tag.' . $this->Tag->primaryKey => $id));
			$this->request->data = $this->Tag->find('first', $options);
		}
		$posts = $this->Tag->Post->find('list');
		$this->set(compact('posts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tag->id = $id;
		if (!$this->Tag->exists()) {
			throw new NotFoundException(__('Invalid tag'));
		}
		$this->request->onlyAllow('get', 'delete');
		if ($this->Tag->delete()) {
			$this->Session->setFlash(__('Tag deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tag was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
