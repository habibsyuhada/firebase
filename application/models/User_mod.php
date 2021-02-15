<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_mod extends CI_Model {

	public function __construct(){
    parent::__construct();
  }
   
  function user_list_db($where = null){
		if(isset($where)){
      if(count($where) > 0){
        $this->db->where($where);
      }
		}
		$this->db->order_by("created_at", "DESC");
		$query = $this->db->get('mst_users');
		
		return $query->result_array();
	}

	public function user_new_process_db($data)
  {
    $this->db->insert('mst_users', $data);
    $insert_id = $this->db->insert_id();
    return $insert_id;
  }
	
	public function user_edit_process_db($data, $where)
  {
    $this->db->where($where);
    $this->db->update('mst_users', $data);
  }
	
	public function user_delete_process_db($where)
  {
    $this->db->where($where);
    $this->db->delete('mst_users');
  }

}