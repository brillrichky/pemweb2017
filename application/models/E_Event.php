<?php
class E_Event extends CI_Model{
	
 function addevent($tabelname,$data){
        $res =$this->db->insert($tabelname,$data);
        return $res;
    }
function list_eventjadi(){
		$this->db->select('*');
		$this->db->where('status','terverifikasi');
		$query = $this->db->get('event'); 
		return $query->result_array();
	}
	function list_eventbelumterverifikasi(){
		$this->db->select('*');
		$this->db->where('status','belum terverifikasi');
		$query = $this->db->get('event'); 
		return $query->result_array();
	}
	function list_eventterverifikasi($id_event){
		$this->db->where('id_event',$id_event);
		$this->db->set('status', 'terverifikasi');
		$this->db->update('event');

	}
	public function deleteevent($id_event){
        $this->db->select('*');
        $this->db->where('id_event', $id_event);
        $this->db->delete('event');
    }

     function pilih_event($id_event){
        $this->db->where('id_event',$id_event);
        $query = $this->db->get('event');
        return $query;
    }
    function list_idEvent($id_event){
		$this->db->select('*');
		$this->db->from('event');
		$this->db->where('id_event',$id_event);
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>