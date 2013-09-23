<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
/**
 * login method
 *
 * @return void
 */	
	public function login() {
		
		$this->layout = 'signin';
		
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirect());
        } else {
            $this->Session->setFlash(__('<div class="alert alert-danger">  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Nom d\'user ou mot de passe invalide, réessayer</div>'));
        }
    }
	
	
}
/**
 * logout method
 *
 * @return void
 */
public function logout() {
    return $this->redirect($this->Auth->logout());
}



/**
 * lostpassword method
 *
 * @return void
 */
public function lostpassword() {
	
	   $this->layout = 'signin';
	   $this->User->recursive = 0;
	
	   if ($this->request->is('post')) {
		   
		$entry = $this->request->data['User']['username'];
		$user = $this->User->findByEmailOrUsername($entry,$entry);
		
		if ($user){
			
			$gmail = array(
        'host' => 'smtp.gmail.com',
        'port' => 465,
        'from' => 'abder1432@gmail.com',		
        'username' => 'abder1432@gmail.com',
        'password' => 'CASAblanca1983',
        'transport' => 'Smtp',
        'tls' => true
    );
			
		    $Email = new CakeEmail($gmail);
			$Email->to($user['User']['email']);
			$Email->subject('Your New Password');
		    $Email->send('Your password: ' . $user['User']['email']);


			$this->Session->setFlash('il exits ' . $user['User']['email']);
		}
		else {
			$this->Session->setFlash('<div class="alert alert-danger">  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . __('ERROR: Invalid username or e-mail.') . '</div>');
			
		}

		

		   
		   }		
}



	
}
