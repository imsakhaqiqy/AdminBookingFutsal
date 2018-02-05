<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_Order extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_profil_order/M_Profil_Order');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index(){
        $data['page']="profil_order";
        $data['sub_page']="profil_order";
        $data['title_page']="Profil Order";
        $data['namenya']=$_SESSION['name'];
        $data['profile']= $this->M_Profil_Order->selectAll();
        $this->load->view('template',$data);
    }

    public function add(){
        $data['page']="profil_order";
        $data['sub_page']="add";
        $data['title_page']="Profil Order";
        $data['sub_title_page']="Add";
        $data['title']="Add Profil Order";
        $data['namenya']=$_SESSION['name'];
        $data['no']=$this->M_Profil_Order->count_data()+1;
        $this->load->view('template',$data);
    }

    public function add_aksi(){
        $this->form_validation->set_rules('kode_pengguna','Users ID','required');
        $this->form_validation->set_rules('nama','Name','required');
        $this->form_validation->set_rules('alamat','Address','required');
        $this->form_validation->set_rules('phone','Phone Number','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('no_struk','Receipt Number','required');
        $this->form_validation->set_rules('kode_stok','Stock Code','required');
        if($this->form_validation->run() == FALSE){
            $data['page']="profil_order";
            $data['sub_page']="add";
            $data['title_page']="Profil Order";
            $data['sub_title_page']="Add";
            $data['title']="Add Profil Order";
            $data['namenya']=$_SESSION['name'];
            $data['no']=$this->M_Profil_Order->count_data()+1;
            $this->load->view('template',$data);
        }else{
            $kode_pengguna = $this->input->post('kode_pengguna');
            $nama_pengguna = $this->input->post('nama');
            $alamat_pengguna = $this->input->post('alamat');
            $phone_pengguna = $this->input->post('phone');
            $email_pengguna = $this->input->post('email');
            $struk_pengguna = $this->input->post('no_struk');
            $kode_stok_pengguna = $this->input->post('kode_stok');
            $data = array(
                'no' => $this->M_Profil_Order->count_data()+1,
                'kode_pengguna' => $kode_pengguna,
                'nama' => $nama_pengguna,
                'alamat' => $alamat_pengguna,
                'telpon' => $phone_pengguna,
                'email' => $email_pengguna,
                'no_struk' => $struk_pengguna,
                'kode_stok' => $kode_stok_pengguna
            );
            $this->M_Profil_Order->insert_news($data,'f_profil_order');
            $this->session->set_flashdata('message_name', 'Data berhasil di save');
            redirect('profil_order');
        }
    }

    public function edit(){
        $no = $this->input->get('no');
        $data['page']="profil_order";
        $data['sub_page']="edit";
        $data['title_page']="Profil Order";
        $data['sub_title_page']="Edit";
        $data['title']="Edit Profil Order";
        $data['namenya'] = $_SESSION['name'];
        $data['namenya'] = $_SESSION['name'];
        $data['no']=$this->uri->segment(3);
        $where = array(
            'no' => $no
        );
        $data['editnya']=$this->M_Profil_Order->edit_data($where,'f_profil_order');
        $this->load->view('template',$data);
    }

    public function edit_aksi(){
        $no_pengguna = $this->input->post('no');
        $kode_pengguna = $this->input->post('kode_pengguna');
        $nama_pengguna = $this->input->post('nama');
        $alamat_pengguna = $this->input->post('alamat');
        $phone_pengguna = $this->input->post('phone');
        $email_pengguna = $this->input->post('email');
        $no_struk_pengguna = $this->input->post('no_struk');
        $kode_stok_pengguna = $this->input->post('kode_stok');
        $data = array(
            'kode_pengguna' => $kode_pengguna,
            'nama' => $nama_pengguna,
            'alamat' => $alamat_pengguna,
            'telpon' => $phone_pengguna,
            'email' => $email_pengguna,
            'no_struk' => $no_struk_pengguna,
            'kode_stok' => $kode_stok_pengguna
        );
        $where = array(
            'no' => $no_pengguna
        );
        $this->M_Profil_Order->update_news($where,$data,'f_profil_order');
        $this->session->set_flashdata('message_name', 'Data berhasil di update');
        redirect('profil_order');
    }

    function hapus(){
        $no = $this->input->get('no');
        $where=array(
            'no' => $no
        );
        $this->M_Profil_Order->hapus_data($where,'f_profil_order');
        redirect('profil_order');
    }
}
