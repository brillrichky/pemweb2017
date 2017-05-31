<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class C_Member extends CI_Controller {
    public function __construct() {
        parent::__construct();
        @session_start();
        if (($this->session->userdata('id') == null) || ($this->session->userdata('level') != 'Member')) {
            redirect('main_user');
        }
 /**/   }
    
    public function index() {   
            $data['judul']="member";
            $data['content']="member/h_member";
            $data['event'] = $this->E_Event->list_eventjadi();
            $data['user'] = $this->main_model->pilih_user($this->session->userdata('id'));
            $data['datauser'] = $this->main_model->pilih_user($this->session->userdata('id'))->row();
            $this->load->view('member/h_member',$data);
    }
      public function postevent() {
        $data['datauser'] = $this->main_model->pilih_user($this->session->userdata('id'))->row();
        $this->load->view('member/v_postevent',$data);
    }

      public function lihatdetailevent($id_event){
        $data['datauser'] = $this->main_model->pilih_user($this->session->userdata('id'))->row();
        $data['event'] = $this->E_Event->pilih_event($id_event)->row();
        $data['comment'] = $this->E_Member->list_comment($id_event);
        $data['user'] = $this->main_model->pilih_user($this->session->userdata('id'))->row();
        $this->load->view('Member/v_detailevent',$data);
    }
     public function userprofileview(){
            $data['content'] = 'Member/v_profile';
            $this->load->view('Member/v_profile',$data);
      }

  public function lihatprofilemember() {
        $data['datauser'] = $this->main_model->pilih_user($this->session->userdata('id'))->row();
        $data['user'] = $this->main_model->pilih_user($this->session->userdata('id'))->row();
        $this->load->view('Member/v_profile',$data);
    }
   public function post($id){
            $id_user = $id;
            $namaevent =$this->input->post('namaevent');
            $isi =$this->input->post('isi');

            //Upload Foto

            $config['upload_path'] = 'C:\xampp\htdocs\pemweb2017\assets\images\event';
            $config['allowed_types'] = 'jpg|png';
            $config['file_name'] = 'event_'.$namaevent;
            $this->upload->overwrite= true;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('userfile')){

                ?><script language="JavaScript">alert('Harap mengisi semua data.');
                document.location='<?php echo site_url();?>'</script><?php

            }
            else{
                $tipe='';
                $upload_data = $this->upload->data();
                if($upload_data['image_type']=='jpeg'|| $upload_data['image_type']=='JPG'){
                    $tipe='jpg';
                }else if($upload_data['image_type']=='png'|| $upload_data['image_type']=='PNG'){
                    $tipe='png';
                }
             }
                //masukkan ke database
                $foto = 'assets/images/event/event_'.$namaevent.'.'.$tipe;
                $cek = $this->E_Event->addevent('event',array ("id_user"=>$id_user,"namaevent" => $namaevent,"isi" => $isi, "foto" => $foto, "status" =>"belum terverifikasi"));
                if ($cek >= 1){
                    ?> <script language="JavaScript">alert('Input menunggu persetujuan admin!');
                        document.location='<?php echo site_url('C_Member/postevent');?>'</script><?php
                    //redirect();
                }
                else {
                    ?> <script language="JavaScript">alert('Gagal Ditambahkan');
                        document.location='<?php echo site_url();?>'</script><?php
                }
            }
        public function editprofile(){
        $id=$this->session->userdata('id');
        $namabaru =$this->input->post('namabaru');
        $nohpru =$this->input->post('nohpru');
        $emailru =$this->input->post('emailru');
        $fotoru =$this->input->post('fotoru');
        
        $pisah = explode(' ',$namabaru);
        if(count($pisah)==0){
        }else{
            $namabaru = implode('_',$pisah);
        }
        $config['upload_path'] = 'C:\xampp\htdocs\CraftTech\assets\images\profil';
        $config['allowed_types'] = 'jpg|png';
        $config['overwrite'] = 'TRUE';
        $config['file_name'] = 'profil_'.$nama;
        $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')){
                $fotoru = $this->input->post('fotolama');
            }
            else{
                $tipe='';
                $upload_data = $this->upload->data();
                if($upload_data['image_type']=='jpeg'|| $upload_data['image_type']=='JPG'){
                    $tipe='jpg';
                }else if($upload_data['image_type']=='png'|| $upload_data['image_type']=='PNG'){
                    $tipe='png';
                }
                //masukkan ke database
                $fotoru = 'assets/images/profil/profil_'.$namabaru.'.'.$tipe;
           
            }$this->E_Member->update_user('user',array("nama" => $namabaru,"nohp" => $nohpru,"foto" => $fotoru,"email" => $emailru),$id);
        
        ?><script language="JavaScript">alert('Update Profile Success');
        document.location='<?php echo site_url('C_Member/index');?>'</script><?php
        //redirect('C_Member/listuserview');
    }

     public function addcomment($id_event){
            $data['event'] = $this->E_Event->list_idEvent($this->session->userdata('id_event'));
            $komentar =$this->input->post('komentar');
            $this->E_Member->addcomment('comment',array ("id_user"=>$this->session->userdata('id'),
                                                       "id_event"=>$id_event,
                                                       "komentar" => $komentar)); 
            redirect('C_Member/index');
      }
}
?>