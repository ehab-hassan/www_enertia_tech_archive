<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Station extends CI_Controller{
    function __construct(){
      parent::__construct();
      $this->login_lib->verifica_login();
      $this->template->set_template('dashboard');
      $this->load->model(array('Station_model', 'User'));
    }
    
    /*station details*/
    public function index($StationId)
    {
      $data = array();
      $this->load->model('Station_model');
      $result['data'] = $this->Station_model->StationView($StationId);
      $this->template->write_view('content', 'dashboard/station/view', $result, TRUE);
      $this->template->render();
    }

    /*station add viwe function*/
    public function station_add()
    {
      $data = array();
      $this->template->write_view('content', 'dashboard/station/add', $data, TRUE);
      $this->template->render();
    }

    /*station add_new viwe function*/
    public function station_add_new()
    {
      $data = array();
      $this->template->write_view('content', 'dashboard/station/add_new', $data, TRUE);
      $this->template->render();
    }

    /*station edit function*/
    public function station_edit($id=null)
    {
      if ($id == null && $this->agent->is_referral())
      {
          echo $this->agent->referrer();
      }
      $data = array();
      $this->template->write_view('content', 'dashboard/station/edit', $data, TRUE);
      $this->template->render();
    }

    public function station_post()
    {
      
    }

    public function add_station()
    {
      $station_name = $this->input->post('station_Name');
      $station_address = $this->input->post('station_Address');
      $station_provider = $this->input->post('provider_name');
      $from_day_time = $this->input->post('from_day_time');
      $to_day_time = $this->input->post('to_day_time');
      $station_from = $this->input->post('station_FromTimings');
      $from_time = $this->input->post('from_time');
      $to_time = $this->input->post('to_time');
      $open24 = $this->input->post('open24');
      $parking = $this->input->post('parking');
      $wifi = $this->input->post('wifi');
      $payments = $this->input->post('payments');
      $price = $this->input->post('price');
      $access_type = $this->input->post('access_type');
      $plugs = $this->input->post('plug');
      $general_comments = $this->input->post('general_comments');
      $station_images = $this->input->post('station_Photos');
      $lat = $this->input->post('station_Location_lat');
      $long = $this->input->post('station_Location_long');
      $images = array();
      $station_location = json_encode(array($lat, $long));
      // Validation for fields
      // $this->form_validation->set_rules('station_Name', 'name', 'required');
      // $this->form_validation->set_rules('station_Address', 'address', 'required');
      // $this->form_validation->set_rules('station_Power', 'power', 'required');
      // $this->form_validation->set_rules('station_Provider', 'provider', 'required');
      // $this->form_validation->set_rules('station_Description', 'description', 'required');

      // if($this->form_validation->run() == FALSE) {
      //   echo validation_errors();
      // } else{

        $data = array(
          // 'station_ID' => '',
          'station_Name' => $station_name,
          'station_Address' => $station_address,
          'station_Location' => $station_location,
          'station_Provider' => $station_provider,
          'from_day_time' => $from_day_time,
          'to_day_time' => $to_day_time,
          'station_FromTimings' => $from_time.':00',
          'station_ToTimings' => $to_time.':00',
          'open_24_7' => ($open24 == 'true' ? 'yes':($open24 == 'false'? 'no' : 'yes')),
          'parking' => ($parking == 'true' ? 'yes':($parking == 'false'? 'no' : 'yes')),
          'wifi' => ($wifi == 'true' ? 'yes':($parking == 'false'? 'no' : 'yes')),
          'payments' => $payments,
          'price' => $price,
          'access_type' => $access_type,
          'plugs' => $plugs,
          'general_comments' => $general_comments,
          'video' => '',
          'station_Photos' => json_encode($station_images),
          'station_NetworkID' => '',
          'station_ownerID' => ''
        );

        $this->load->model('Station_model');
        $result = $this->Station_model->AddStation($data);
        echo $result;
      // }
      // $station_name = $this->input->post('station_Name');
      // $station_address = $this->input->post('station_Address');
      // echo $parking;
    }

    // For multiple img upload
    public function UploadImages()
    { 
      // For multiple file upload
      $images = array();
      if(!empty($_FILES['station_images'])){
        $config['upload_path']          = './assets/uploads/';
        $config['allowed_types']        = 'gif|jpg|png';

        $this->load->library('upload', $config);
        $files = $_FILES;
        $count = count($_FILES['station_images']['name']);
        for($i=0; $i<$count-1; $i++) {
          $_FILES['station_images']['name']= strtotime(date('d-m-Y')).'_'.$files['station_images']['name'][$i];
          $_FILES['station_images']['type']= $files['station_images']['type'][$i];
          $_FILES['station_images']['tmp_name']= $files['station_images']['tmp_name'][$i];
          $_FILES['station_images']['error']= $files['station_images']['error'][$i];
          $_FILES['station_images']['size']= $files['station_images']['size'][$i];
          $this->upload->initialize($config); //function defination below
          $this->upload->do_upload('station_images');
          $upload_data = $this->upload->data();
          $name_array[] = $upload_data['file_name'];
          $fileName = base_url().'assets/uploads/'.$upload_data['file_name'];
          $images['image_'.$i] = $fileName;
        }
        $fileName = $images;
        print_r(json_encode($fileName));

      } else {
        echo false;
      }
    }

    // For get station details
    public function edit($id){
      if(!empty($id)) {
        $this->load->model('Station_model');
        $result['data'] = $this->Station_model->GetStationDetails($id);
        $this->template->write_view('content', 'dashboard/station/edit', $result, TRUE);
        $this->template->render();
        // echo '<pre>';
        // print_r($result);
        // echo '</pre>';
      }
    }

    public function edit_station($id)
    {
      // $station_name = $this->input->post('station_Name');
      // $station_address = $this->input->post('station_Address');
      // $station_plug = $this->input->post('station_Connectors');
      // $station_power = $this->input->post('station_Power');
      // $station_from = $this->input->post('station_FromTimings');
      // $station_to = $this->input->post('station_ToTimings');
      // $station_provider = $this->input->post('station_Provider');
      // $station_description = $this->input->post('station_Description');
      // // $station_images = $this->input->post('station_Photos');
      // $lat = $this->input->post('station_Location_lat');
      // $long = $this->input->post('station_Location_long');
      // $images = array();

      // // Validation for fields
      // $this->form_validation->set_rules('station_Name', 'name', 'required');
      // $this->form_validation->set_rules('station_Address', 'address', 'required');
      // $this->form_validation->set_rules('station_Power', 'power', 'required');
      // $this->form_validation->set_rules('station_Provider', 'provider', 'required');
      // $this->form_validation->set_rules('station_Description', 'description', 'required');

      // if($this->form_validation->run() == FALSE) {
      //   echo validation_errors();
      // } else{

      //   $data = array(
      //     'station_ID' => $id,
      //     'station_Name' => $station_name,
      //     'station_Address' => $station_address,
      //     'station_Location' => '',
      //     'station_Provider' => $station_provider,
      //     'station_FromTimings' => "$station_from".':00',
      //     'station_Connectors' => $station_plug,
      //     'station_Power' => $station_power,
      //     'station_Description' => $station_description,
      //     'station_Photos' => '',
      //     'station_ToTimings' => "$station_to".':00',
      //     'station_NetworkID' => '',
      //     'station_ownerID' => ''
      //   );

      //   $this->load->model('Station_model');
      //   $result = $this->Station_model->EditStation($id, $data);
      //   echo $result;
      // }
      $station_name = $this->input->post('station_Name');
      $station_address = $this->input->post('station_Address');
      $station_provider = $this->input->post('provider_name');
      $from_day_time = $this->input->post('from_day_time');
      $to_day_time = $this->input->post('to_day_time');
      $station_from = $this->input->post('station_FromTimings');
      $from_time = $this->input->post('from_time');
      $to_time = $this->input->post('to_time');
      $open24 = $this->input->post('open24');
      $parking = $this->input->post('parking');
      $wifi = $this->input->post('wifi');
      $payments = $this->input->post('payments');
      $price = $this->input->post('price');
      $access_type = $this->input->post('access_type');
      $plugs = $this->input->post('plug');
      $general_comments = $this->input->post('general_comments');
      $station_images = $this->input->post('station_Photos');
      $lat = $this->input->post('station_Location_lat');
      $long = $this->input->post('station_Location_long');
      $station_id = $this->input->post('station_ID');
      $images = array();

        $data = array(
          'station_Name' => $station_name,
          'station_Address' => $station_address,
          'station_Provider' => $station_provider,
          'from_day_time' => $from_day_time,
          'to_day_time' => $to_day_time,
          'station_FromTimings' => $from_time.':00',
          'station_ToTimings' => $to_time.':00',
          'open_24_7' => ($open24 == 'true' ? 'yes':($open24 == 'false'? 'no' : 'yes')),
          'parking' => ($parking == 'true' ? 'yes':($parking == 'false'? 'no' : 'yes')),
          'wifi' => ($wifi == 'true' ? 'yes':($parking == 'false'? 'no' : 'yes')),
          'payments' => $payments,
          'price' => $price,
          'access_type' => $access_type,
          'plugs' => $plugs,
          'general_comments' => $general_comments,
          'video' => '',
          'station_Photos' => json_encode($station_images),
          'station_NetworkID' => '',
          'station_ownerID' => ''
        );

        // $this->load->model('Station_model');
        // $result = $this->Station_model->AddStation($data);
        // echo $result;

        $this->load->model('Station_model');
        $result = $this->Station_model->EditStation($id, $data);
        echo $result;
    }

    // For station remove
    public function RemoveStation($stationId){
      if (!empty($stationId)) {
        $this->load->model('Station_model');
        $result = $this->Station_model->StationRemove($stationId);
        if ($result == true) {
          echo 1;
        } else {
          echo 0;
        }
      }
    }
  }
?>
 