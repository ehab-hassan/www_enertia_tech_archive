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
			echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Invalid Email</span></label>';  
	   }  
	   else  
	   {  
			if($this->Main_model->is_email_available($_POST["email"]))  
			{  
				 echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Email Already register</label>';  
			}  
			else  
			{  
				 echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Email Available</label>';  
			}  
	   } 
	}

	/**
	 * is check phone
	 */
	function phone(){
		if($this->Main_model->is_phone_available($_POST["phone"]))  
		{  
			 echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Phone Already register</label>';  
		}  
		else  
		{  
			 echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Phone Available</label>';  
		}  
	}
	/**
	 * is login check phone
	 */
	function login_check_phone(){
		$checkphonenumber = $this->user->get_by_phone($_POST["phone"]);
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
		$check = $this->Main_model->is_otp_available($_POST["otp"]);
		if($check)  
		{  
		 	$this->output->set_output(json_encode(array('status' => 'true','userdata' => $check)));  
		}  
		else  
		{  
		 	$this->output->set_output(json_encode(array('status' => 'false'))); 
		}  
	}

	/* Function for send sms */
	function send_otp($UserID){
		$data = array();
		$userdata = $this->user->get_by_id($UserID);
		if ($userdata->UserOTP == '') {
			$otp = rand(1000,9999);
			$data_arr=array(
				'UserOTP' => $otp,
				);
			$this->user->update($UserID,$data_arr);
			$mobile = $userdata->UserPhone;
			$awssendmsgoutput = $this->aws_sdk->SendPushNotification($otp,$mobile);
			// $message = urlencode("Welcome to ENERTIA, Your Login Code : ".$otp);// urlencode your message
	 	//   	$curl = curl_init();
		 //  	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		 //  	curl_setopt($curl, CURLOPT_URL, "www.way2sms.com/api/v1/sendCampaign/?apikey=VGIKT5W0J9W491HZDV3C7BCZL9QKLJ71&secret=O3PNV3I6L8ZORP5E&usetype=prod&senderid=ATW&phone=".$mobile."&message=".$message);
		 //  	$result = curl_exec($curl); 
		 //  	curl_close($curl); 
			$this->output->set_output($awssendmsgoutput); 
		}
	}
	/*get cuntry code for phone number*/
	function getcuntrycode($user_ip)
	{	
		$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
		echo json_encode($geo['geoplugin_countryCode']);
	}
}
?>