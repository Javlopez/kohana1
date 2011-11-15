<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Controller_Account
 * 
 * Aqui estaran las funcionalidades de login y registro
 * 
 * @author Javier
 * @package Backend
 * 
 */
class Controller_Account extends Controller {

    /**
     *
     * @var User $auth contains object a1 user 
     */
    public $auth;
    
    /**
     * 
     * Variable que guardara la sesión
     * @var Session $session
     */
    public $session;
    
    /**
     * 
     * Vista que usara el sistema
     * @var View|String $view
     */
    public $view;
    
    /**
     * 
     * Aqui se cargara el modelo users
     * @var Model_Users $users
     */
    public $users;
    
    /**
     * (non-PHPdoc)
     * @see system/classes/kohana/Kohana_Controller::before()
     */
    public function before()
    {
        parent::before();
        $this->auth = A1::instance();
        $this->session =  Session::instance();
        $this->users   = new Model_Users();
    }
    
    public function action_index()
    {
        $this->action_login();
    }
    
    public function action_login()
    {
        $errors =  array();
        if($this->request->method()=="POST")
        { 
            
            $username = Arr::get($_POST, 'username');
            $password = Arr::get($_POST, 'password');
            $remember = (isset($_POST['remember']))?TRUE:FALSE;
            
            if($this->auth->login($username,$password,$remember))
            {      
                $this->request->redirect(Route::url('default',array('controller' => 'backend','action' => FALSE))); 
            }
            else
            {
                $errors['login'] = "Datos no validos";
            }
        }
        $this->view = View::factory('backend/login')
        					->set('posturl',Route::url('default',array('controller' => 'account', 'action' => 'login')))
        					->set('registerurl',Route::url('default',array('controller' => 'account', 'action' => 'register')))
                            ->set("errors",$errors);
    }
    
    public function action_register()
    {
    	$errors =  array();
        if($this->request->method()== "POST")
        {
        	$username = Arr::get($_POST, 'username');
            $password = Arr::get($_POST, 'password');
            $errors['register'] = "Error al intentar registrarse";
            if($this->users->unique_user($username)=== FALSE)
            {
         		   	$new_user = $this->users->save_user($username,$password,$this->auth);
         		   	if($new_user->saved())
         		   	{
         		   		$this->request->redirect(Route::url('default',array('controller' => 'account', 'action' => 'login')).'?saved');
         		   	}
         		   	$errors["register"] = "No se pudo guardar el nuevo registro";
            }
            $errors['register'] = "El usuario {$username} ya existe en la base de datos";
        }
        $this->view = View::factory('backend/register')
        						->set('errors',$errors)
            					->set('posturl',Route::url('default',array('controller' => 'account', 'action' => 'login')))
        						->set('registerurl',Route::url('default',array('controller' => 'account', 'action' => 'register')));    
    }
    
    public function action_logout()
    {
    	$this->auth->logout();
    	$this->request->redirect(Route::url('default',array('controller' => 'backend','action' => FALSE)));
    }
    
    public function after()
    {
        $this->response->body($this->view);
        parent::after();
    }

} // End Account
