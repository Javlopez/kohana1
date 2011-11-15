<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 
 * Model_Users 
 * 
 * Modelo/entidad de la tabla users
 * 
 * @author Javier
 * @package backend
 */
class Model_Users extends ORM {

	/**
	 * 
	 * Evitamos que convierta mi tabla a plural
	 * @var boolean $_table_names_plural
	 */
	protected $_table_names_plural = FALSE;
	
	
	/**
	 * 
	 * Comprueba que no exista en la base de datos(evita duplicados)
	 * @param String $username
	 * @return boolean 
	 * 
	 */
	public function unique_user($username)
	{
		$user = ORM::factory($this->_table_name)->where('email','=',$username)->find();
		return (bool) $user->loaded();
	}
	
	/**
	 * 
	 * Inserta un nuevo usuario
	 * @param String $username
	 * @param String $password
	 * @param A1 $auth
	 * @return Model_Users $user
	 * 
	 */
	public function save_user($username, $password, A1 $auth)
	{
		$user = ORM::factory($this->_table_name);
		$user->email = $username;
		$user->password = $auth->hash($password);
		$user->save();
		return $user;
	}
	
}