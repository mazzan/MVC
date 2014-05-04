<?php
/**
 * Holding a instance of CRama to enable use of $this in subclasses and provide some helpers.
 *
 * @package RamaCore
 */
class CObject {

	/**
	 * Members
	 */
	protected $ra;
	protected $config;
	protected $request;
	protected $data;
	protected $db;
	protected $views;
	protected $session;
	protected $user;


	/**
	 * Constructor, can be instantiated by sending in the $ra reference.
	 */
	protected function __construct($ra=null) {
	  if(!$ra) {
	    $ra = CRama::Instance();
	  }
	  $this->ly       = &$ra;
    $this->config   = &$ra->config;
    $this->request  = &$ra->request;
    $this->data     = &$ra->data;
    $this->db       = &$ra->db;
    $this->views    = &$ra->views;
    $this->session  = &$ra->session;
    $this->user     = &$ra->user;
	}


	/**
	 * Wrapper for same method in CRama. See there for documentation.
	 */
	protected function RedirectTo($urlOrController=null, $method=null, $arguments=null) {
    $this->ly->RedirectTo($urlOrController, $method, $arguments);
  }


	/**
	 * Wrapper for same method in CRama. See there for documentation.
	 */
	protected function RedirectToController($method=null, $arguments=null) {
    $this->ly->RedirectToController($method, $arguments);
  }


	/**
	 * Wrapper for same method in CRama. See there for documentation.
	 */
	protected function RedirectToControllerMethod($controller=null, $method=null, $arguments=null) {
    $this->ly->RedirectToControllerMethod($controller, $method, $arguments);
  }


	/**
	 * Wrapper for same method in CRama. See there for documentation.
	 */
  protected function AddMessage($type, $message, $alternative=null) {
    return $this->ly->AddMessage($type, $message, $alternative);
  }


	/**
	 * Wrapper for same method in CRama. See there for documentation.
	 */
	protected function CreateUrl($urlOrController=null, $method=null, $arguments=null) {
    return $this->ly->CreateUrl($urlOrController, $method, $arguments);
  }


}
  