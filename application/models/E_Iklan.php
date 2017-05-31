<?php
class E_Iklan extends CI_Model{

	function addiklan($tabelname,$data){
        $res =$this->db->insert($tabelname,$data);
        return $res;
    }
	function list_iklan(){
		$this->db->select('*');
		$this->db->from('iklan');
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>