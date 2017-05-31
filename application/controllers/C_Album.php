<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Album extends CI_Controller {
    public function __construct() {
        parent::__construct();
        @session_start();
    }


    public function index() {   
            $data['judul']="album";
            $data['content']="album/v_pop";
            $this->load->view('album/v_pop',$data);
    }
}