<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Station_Model extends CI_Model {
	
	function __construct() {
		parent::__construct();
    }
	
	/**
	 * Get model by id
	 *
	 * @access public
	 * @return object
	 */
	function get()
	{
		$this->db->select('st.*');
		$this->db->from('ev_stations as st');
		$this->db->where("`st`.`station_status`", 1);
		return $this->db->get()->result();
	}
	/**
	 * Get model by station_ID
	 *
	 * @access public
	 * @param string $make ID
	 * @return object model make object
	 */
	function get_by_ID($station_ID)
	{
		$this->db->select('st.*,us.UserEmail,us.UserName');
		$this->db->from('ev_stations as st');
		$this->db->join('ev_users as us','us.UserID = st.station_ownerID');
		$this->db->where("`st`.`station_ID`",$station_ID);
		$this->db->where("`st`.`station_status`", 1);
		return $this->db->get()->result();
	}


	/**
	 * Create an ev_stations
	 *
	 * @access public
	 * @return int insert id
	 */
	function create($data)
	{
		$this->db->insert('ev_stations', $data);
		return $this->db->insert_id();
	}
	
	/**
	 * update an ev_stations
	 *
	 * @access public
	 */
	function update($station_ID,$data_arr)
	{
		$this->db->update('ev_stations',$data_arr, array('station_ID' => $station_ID));
        return TRUE;
	}

	// For add station
	public function AddStation($data) {
		if(!empty($data)){
			$this->db->insert('ev_stations', $data);
			if($this->db->affected_rows() > 0) {
				return true;
			} else {
				return false;
			}
		}
	}

	// For get station details
	public function GetStationDetails($id){
		$this->db->select('*');
		$this->db->from('ev_stations');
		$this->db->where('station_ID' , $id);

		$query = $this->db->get();
		if($query->num_rows() > 0)
	    {
	        $row = $query->row_array();
	        return $row;
	    }
	}

	// For add station
	public function EditStation($id, $data) {
		if(!empty($data)){
			$this->db->set($data);
			$this->db->where('station_ID', $id);
			$this->db->update('ev_stations');
			if($this->db->affected_rows() > 0) {
				return true;
			} else {
				return false;
			}
		}
	}

	// Station view
	public function StationView($StationId){
		$this->db->select('*');
		$this->db->from('ev_stations');
		$this->db->where('station_ID', $StationId);

		$query = $this->db->get();
		if($this->db->affected_rows() > 0){
			return $query->row();
		} else{
			return false;
		}
	}

	// Station view
	public function StationRemove($StationId){
		$this->db->where('station_ID', $StationId);
		$this->db->delete('ev_stations');

		// $query = $this->db->get();
		if($this->db->affected_rows() > 0){
			return true;
		} else{
			return false;
		}
	}
}