<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 class Main_model extends CI_Model {  
 
    function __construct() {
      parent::__construct();
    }
    
    /**
   * is email available
   *
   * @access public
   * @return object
   */
    function is_email_available($email){  
      $this->db->where('UserEmail', $email);  
      $this->db->where_in('Userstep', [2,3]);  
      $query = $this->db->get("ev_users");  
      if($query->num_rows() > 0){  
        return true;  
      }else{  
        return false;  
      }  
    }

    /**
     * is phone available
     *
     * @access public
     * @return object
    */
		function is_phone_available($phone){  
      $this->db->where('UserPhone', $phone);  
      $this->db->where_in('Userstep', [2,3]);  
      $query = $this->db->get("ev_users");  
      if($query->num_rows() > 0){  
          return true;  
      }else{  
          return false;  
      }  
    }
    /**
     * is phone available
     *
     * @access public
     * @return object
    */
    function is_otp_available($otp){  
      $this->db->where('UserOTP', $otp);  
      $query = $this->db->get("ev_users");  
      if($query->num_rows() > 0){  
          return $query->row();  
      }else{  
          return false;  
      }  
    }
 }  
 ?>  