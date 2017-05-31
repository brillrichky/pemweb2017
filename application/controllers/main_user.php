<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main_user extends CI_Controller {
    public function __construct() {
        parent::__construct();
        @session_start();
    }
  public function index(){
         $data['event'] = $this->E_Event->list_eventjadi();
         $data['iklan'] = $this->E_Iklan->list_iklan();
         $this->load->view('home_user',$data);
    }
    
    public function signup(){
            $this->load->view('v_register');
    }

     public function indonesia(){
            $this->load->view('v_indonesia');
    }

    public function western(){
            $this->load->view('v_western');
    }

    public function japan(){
            $this->load->view('v_japan');
    }

    public function korea(){
            $this->load->view('v_korean');
    }

    public function lihatdetail($id_event){
        $data['event'] = $this->E_Event->pilih_event($id_event)->row();
        $data['comment'] = $this->E_Member->list_comment($id_event);
        $data['user'] = $this->main_model->pilih_user($this->session->userdata('id'))->row();
        $this->load->view('v_detail',$data);
    }

    public function adduser(){
            $username =$this->input->post('username');
            $password =md5($this->input->post('password'));
            $nama =$this->input->post('nama');
            $nohp =$this->input->post('nohp');
            $email =$this->input->post('email');
            $level =$this->input->post('level');
           

            //Upload Foto

            $config['upload_path'] = 'C:\xampp\htdocs\pemweb2017\assets\images\profil';
            $config['allowed_types'] = 'jpg|png';
            $config['file_name'] = 'profil_'.$nama;
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
                $foto = 'assets/images/profil/profil_'.$nama.'.'.$tipe;
                $cek = $this->main_model->add_user('user',array ("username" => $username, "password" => $password, "nama" => $nama, "nohp" => $nohp, "email" => $email,"foto"=>$foto, "level" => $level));
                 if ($cek >= 1){
                    ?> <script language="JavaScript">alert('Berhasil signup');
                        document.location='<?php echo site_url('C_Login/masuk');?>'</script><?php
                    //redirect();
                }
                else {
                    ?> <script language="JavaScript">alert('Gagal Ditambah');
                        document.location='<?php echo site_url();?>'</script><?php
                }
            }
}
?>