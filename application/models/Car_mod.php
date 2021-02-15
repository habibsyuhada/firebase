<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Car_mod extends CI_Model {

	public function __construct(){
    parent::__construct();
  }
   
  function car_list_db($where = null){
		if(isset($where)){
      if(count($where) > 0){
        $this->db->where($where);
      }
		}
		$this->db->order_by("created_at", "DESC");
		$query = $this->db->get('mst_car');
		
		return $query->result_array();
	}

	public function car_new_process_db($data)
  {
    $this->db->insert('mst_car', $data);
    $insert_id = $this->db->insert_id();
    return $insert_id;
  }
	
	public function car_edit_process_db($data, $where)
  {
    $this->db->where($where);
    $this->db->update('mst_car', $data);
  }
	
	public function car_delete_process_db($where)
  {
    $this->db->where($where);
    $this->db->delete('mst_car');
  }

}