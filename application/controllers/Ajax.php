<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {



	/**

	 * Constructor

	 */

	function __construct()

  	{

    	parent::__construct();

		$this->load->model("Main_model");  

		$this->load->model("user");  

		$this->load->library('aws_sdk');

  	}



  	/**

	 * is check email

	 */

	function email(){

	   if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))  

	   {  

			echo '<label class="text-danger"><i class="fa fa-times"></i></label>';  

	   }  

	   else  

	   {  

			if($this->Main_model->is_email_available($_POST["email"]))  

			{  

				 echo '<label class="text-danger"><i class="fa fa-times"></i></label>';  

			}  

			else  

			{  

				 echo '<label class="text-success"><i class="fa fa-check"></i></label>';  

			}  

	   } 

	}



	/**

	 * is check phone

	 */

	function phone(){

		if($this->Main_model->is_phone_available($_POST["phone"]))  

		{  

			 echo '<label class="text-danger"><i class="fa fa-times"></i></label>';  

		}  

		else  

		{  

			 echo '<label class="text-success"><i class="fa fa-check"></i></label>';  

		}  

	}

	/**

	 * is login check phone

	 */

	function login_check_phone(){
		$checkphonenumber = $this->user->get_by_phone($this->input->post('phone'));
		if(count((array) $checkphonenumber) > 0)  
		{  
		 	$this->output->set_output(json_encode(array('status' => 'true','userdata' => $checkphonenumber)));  
		}  
		else  
		{  
		 	$this->output->set_output(json_encode(array('status' => 'false'))); 
		} 
	}



	/**

	 * is check otp

	 */

	function is_otp_available(){

		if($this->input->post("otp") == $this->session->userdata('otp'))  
		{  

		 	$this->output->set_output(json_encode(array('status' => 'true')));  
		}  
		else  
		{  
		 	$this->output->set_output(json_encode(array('status' => 'false'))); 
		}  
	}



	/* Function for send sms */

	function send_otp($mobile){
		// $data = array();
		// $userdata = $this->user->get_by_id($UserID);
		// if ($userdata->UserOTP == '') {
			echo $otp = rand(1000,9999);
			$this->session->set_userdata('otp',$otp);
			// $data_arr=array(
			// 	'UserOTP' => $otp,
			// 	);
			// $this->user->update($UserID,$data_arr);
			// $mobile = $userdata->UserPhone;
			$awssendmsgoutput = $this->aws_sdk->SendPushNotification($otp,$mobile);
			$this->output->set_output($awssendmsgoutput); 
		// }
	}

	/*get cuntry code for phone number*/

	function getcuntrycode($user_ip)

	{	

		$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));

		echo json_encode($geo['geoplugin_countryCode']);

	}

	/*Get Lat Long using ip address*/
	function GetLatLong($user_ip)
	{	
		$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
		if (!empty($geo)) {
			
			echo  json_encode( array('geoplugin_latitude' => (float)$geo['geoplugin_latitude'],'geoplugin_longitude' => (float)$geo['geoplugin_longitude'] ));
		}else{
			echo json_encode(array('geoplugin_status' => '500'));
		}
	}
}

?>