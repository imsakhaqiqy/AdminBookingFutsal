<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('form','url'));
    }

    public function index(){
        $this->form_validation->set_rules('username','Username','required');
        //$this->form_validation->set_rules('password','Password','required');
        //$this->form_validation->set_rules('pssconf','Password Confirmation','required');
        $this->form_validation->set_rules('email','Email','required');
        if($this->form_validation->run() == FALSE)
        {
            $data['page']="dashboard";
            $data['sub_page']="dashboard";
            $data['title_page']="Dashboard";
            
            $data['namenya'] = $_SESSION['name'];
            $this->load->view('template',$data);
        }else
        {
            $this->load->view('/content/page/dashboard/formsuccess');
        }


        // $this->load->helper(array('form','url'));
        // $this->load->library('form_validation');
        // if($this->form_validation->run() == FALSE)
        // {
        //     $this->load->view('content/page/dashboard/form');
        // }else{
        //     $this->load->view('content/page/dashboard/formsuccess');
        // }
    }

    public function aksi_submit()
    {

    }
}
