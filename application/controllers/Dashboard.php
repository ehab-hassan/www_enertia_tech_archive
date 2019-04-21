<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->login_lib->verifica_login();
        $this->template->set_template('dashboard');
    }
    
    /*dashboard*/
    public function index(){
  		$data = array();
  	 	$this->template->write_view('content', 'dashboard/index', $data, TRUE);
      $this->template->render();
    }

    /*station details*/
    public function station_view($stationId)
    {
      $data = array();
      $this->template->write_view('content', 'dashboard/station/view', $data, TRUE);
      $this->template->render();
    }

    public function station_add()
    {
      $data = array();
      $this->template->write_view('content', 'dashboard/station/add', $data, TRUE);
      $this->template->render();
    }

    public function station_add_post()
    {
      
    }
  	/*logout*/
  	public function logout(){
	    $this->load->helper('security');
	    $this->login_lib->check_out();
	    redirect('/');
  	}
 }
 ?>