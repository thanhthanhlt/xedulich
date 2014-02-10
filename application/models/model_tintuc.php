<?php
class Model_tintuc extends CI_Model{
	function getall(){
		$query = $this->db->get('tintuc');
		return $query->result();

	}
	public function demsoluong_ketqua() {
        return $this->db->count_all("tintuc");
    }
 
    public function fetch_tintuc($limit, $page) {
		//$query = $this->db->get('mytable', 10, 20);
		// Produces: SELECT * FROM mytable LIMIT 20, 10 (in MySQL. Other databases have slightly different syntax)
     
        $query = $this->db->get("tintuc",$limit,$page);
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
   
   public function get_noidung($id_tin) {  
	  $this->db->select('TieuDe,TomTat,NoiDung');      
	  $query = $this->db->get_where('tintuc', array('id_tin' => $id_tin));
	  
	  //select NoiDung from tintuc where id_tin=$id_tin;
	  return $query->result();   
   }
}