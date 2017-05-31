<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class C_Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        @session_start();
        if (($this->session->userdata('id') == null) || ($this->session->userdata('level') != 'Admin')) {
            redirect('main_user');
        }
    }
     public function index() {	
            $data['judul']="admin";
            $data['content']="admin/h_admin";
            $data['user'] = $this->main_model->pilih_user($this->session->userdata('id'));
            $this->load->view('admin/h_admin',$data);
    }
   public function filtermember() {
      $data['user'] = $this->main_model->list_user();
        $this->load->view('admin/v_filtermember',$data);
    }
     public function action_deletefilter($id_event) {
        $data['event'] = $this->E_Event->deleteevent($id_event);
        redirect('C_Admin/filterevent');
    }
     public function postiklan() {
        $this->load->view('admin/v_postiklan');
    }
     public function filterevent() {
        $data['event'] = $this->E_Event->list_eventbelumterverifikasi();
        $this->load->view('admin/v_filterevent',$data);
    }
     public function deleteevent() {
        $data['event'] = $this->E_Event->list_eventjadi();
        $this->load->view('admin/v_deleteevent',$data);
    }
     public function action_delete($id_event) {
        $data['event'] = $this->E_Event->deleteevent($id_event);
        redirect('C_Admin/deleteevent');
    }
     public function update_event($id_event) {
        $data['event'] = $this->E_Event->list_eventterverifikasi($id_event);
        redirect('C_Admin/filterevent');
    }
     public function actionmember($id) {
        $data['user'] = $this->main_model->deletemember($id);
        redirect('C_Admin/filtermember');
    }
     public function posting($id){
            $id_user = $id;
            $namaiklan =$this->input->post('namaiklan');

            //Upload Foto

            $config['upload_path'] = 'C:\xampp\htdocs\pemweb2017\assets\images\iklan';
            $config['allowed_types'] = 'jpg|png';
            $config['file_name'] = 'iklan_'.$namaiklan;
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
                $gambar = 'assets/images/iklan/iklan_'.$namaiklan.'.'.$tipe;
                $cek = $this->E_Iklan->addiklan('iklan',array ("id_user"=>$id_user,"namaiklan" => $namaiklan, "gambar" => $gambar));
                 redirect('C_Admin/postiklan');
            }

            public function editprofil($id){
             $namabaru =$this->input->post('nama');
             $nohpbaru =$this->input->post('nohpbaru');
             $emailbaru =$this->input->post('emailbaru');
             $usernamebaru =$this->input->post('usernamebaru');
    
        
     //masukkan ke database
            $cekdata = $this->E_Member->edit('user',array ("namabaru" => $namabaru, "nohpbaru" => $nohpbaru, "emailbaru" => $emailbaru, "usernamebaru" => $usernamebaru),$id);
        
        
     if($cekdata == true){
             ?><script language="JavaScript">alert('Update Member Berhasil');
                document.location='<?php echo site_url('C_Admin/index');?>'</script><?php
         }else{
              ?><script language="JavaScript">alert('Update Member gagal ');
                document.location='<?php echo site_url('C_Admin/index');?>'</script><?php
         }
       
        //redirect('C_Member/listuserview');
     }
    }

?>