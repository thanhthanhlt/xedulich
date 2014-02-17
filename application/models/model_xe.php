<?php
class Model_xe extends CI_Model{
	public function get_chitietxe ($id){
		$query = $this->db->get_where('chitietxe', array ('IDchitietxe' => $id));
		return $query -> result();		
		} 
	public function get_loaichothue	
}