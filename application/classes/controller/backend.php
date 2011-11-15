<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Controller_Backend 
 * 
 * Este es el backend de una aplicacion que esta usando A1 como metodo de autenticación
 * 
 * @author Javier
 * @package Backend
 * 
 */
class Controller_Backend extends Controller {

    /**
     *
     * @var User $auth contains object a1 user 
     */
    public $auth;
    
    /**
     * (non-PHPdoc)
     * @see system/classes/kohana/Kohana_Controller::before()
     */
    public function before()
    {
        parent::before();
        $this->auth = A1::instance();
        $this->_prevent_back();
        if($this->auth->logged_in()=== FALSE)
        {
            $this->request->redirect(Route::url('default',array('controller' => 'account', 'action' => 'login')));
            return;
        }
        view::set_global('logout',Route::url('default',array('controller' => 'account', 'action' => 'logout')));
    }
    
    public function action_index()
    {
        $view = View::factory("backend/home")
                        ->set("auth",$this->auth);
        
        $this->response->body($view);
    }

    private function _prevent_back()
    {
    	$this->response->headers("Cache-Control","no-store, no-cache, must-revalidate");
    }
} // End Welcome
