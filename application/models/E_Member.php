<?php
class E_Member extends CI_Model{

     public function update_user($namatabel,$dataprofil,$id){
        $this->db->where('id',$id);
        $res = $this->db->update($namatabel,$dataprofil);
        return $res;
    }
     function addcomment($tabelname,$data){
        $res =$this->db->insert($tabelname,$data);
        return $res;
    }
    public function list_comment($id_event){
        $this->db->order_by("id_comment",'ASC');
        $this->db->where(array('event.id_event'=>$id_event));
        $this->db->select('*');    
        $this->db->from("comment");
        $this->db->join("user", "comment.id_user = user.id");
        $this->db->join("event", "comment.id_event = event.id_event");
        $data=$this->db->get();
        return $data->result_array();
    }
    
	public function edit($namatabel,$dataprofil,$id){    
        $this->db->where('id',$id);
        $this->db->update($namatabel,$dataprofil);
        return true;
    }
}
?>