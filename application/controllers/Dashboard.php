<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Dashboard controller class
 * This is only viewable to those members that are logged in
 */
 class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->login_lib->verifica_login();
        $this->template->set_template('dashboard');
    }
    
    public function index(){
		$data = array();
	 	$this->template->write_view('content', 'dashboard/index', $data, TRUE);
        $this->template->render();
    }
  	/*logout*/
  	function logout(){
	    $this->load->helper('security');
	    $this->login_lib->check_out();
	    redirect('/');
  	}
 }
 ?>