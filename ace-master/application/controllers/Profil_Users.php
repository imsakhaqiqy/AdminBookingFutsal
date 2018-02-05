<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_Users extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_profil_users/M_Profil_Users');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index(){
        $data['page']="profil_users";
        $data['sub_page']="profil_users";
        $data['title_page']="Profil Users";
        $data['namenya']=$_SESSION['name'];
        $data['profile']= $this->M_Profil_Users->selectAll();
        $this->load->view('template',$data);
    }

    public function add(){
        $data['page']="profil_users";
        $data['sub_page']="add";
        $data['title_page']="Profil Users";
        $data['sub_title_page']="Add";
        $data['title']="Add Profil Users";
        $data['namenya']=$_SESSION['name'];
        $data['no']=$this->M_Profil_Users->count_data()+1;
        $this->load->view('template',$data);
    }

    public function add_aksi(){
        $this->form_validation->set_rules('kode_pengguna','Users ID','required');
        $this->form_validation->set_rules('nama_lengkap','Full Name','required');
        $this->form_validation->set_rules('tempat_lahir','Place of Birth','required');
        $this->form_validation->set_rules('tanggal_lahir','Date of Birth','required');
        $this->form_validation->set_rules('jenis_kelamin','Gender','required');
        $this->form_validation->set_rules('alamat','Address','required');
        $this->form_validation->set_rules('telpon','Phone','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run() == FALSE){
            $data['page']="profil_users";
            $data['sub_page']="add";
            $data['title_page']="Profil Users";
            $data['sub_title_page']="Add";
            $data['title']="Add Profil Users";
            $data['namenya']=$_SESSION['name'];
            $data['no']=$this->M_Profil_Users->count_data()+1;
            $this->load->view('template',$data);
        }else {
            $kode_pengguna = $this->input->post('kode_pengguna');
            $nama_lengkap = $this->input->post('nama_lengkap');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $alamat = $this->input->post('alamat');
            $phone = $this->input->post('telpon');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $data = array(
                'no' => $this->M_Profil_Users->count_data()+1,
                'kode_pengguna' => $kode_pengguna,
                'nama_lengkap' => $nama_lengkap,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'jenis_kelamin' => $jenis_kelamin,
                'alamat' => $alamat,
                'telpon' => $phone,
                'email' => $email,
                'password' => $password
            );
            $this->M_Profil_Users->insert_news($data,'f_pengguna_user');
            $this->session->set_flashdata('message_name', 'Data berhasil di save');
            redirect('profil_users');
        }
    }

    public function edit(){
        $no = $this->input->get('no');
        $data['page']="profil_users";
        $data['sub_page']="edit";
        $data['title_page']="Profil Users";
        $data['sub_title_page']="Edit";
        $data['title']="Edit Profil Users";
        $data['namenya']=$_SESSION['name'];
        $data['no']=$this->uri->segment(3);
        $where = array(
            'no' => $no
        );
        $data['editnya']=$this->M_Profil_Users->edit_data($where,'f_pengguna_user');
        $this->load->view('template',$data);
    }

    public function edit_aksi(){
        $no = $this->input->post('no');
        $kode_pengguna = $this->input->post('kode_pengguna');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $alamat = $this->input->post('alamat');
        $phone = $this->input->post('telpon');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $data = array(
            'kode_pengguna' => $kode_pengguna,
            'nama_lengkap' => $nama_lengkap,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat' => $alamat,
            'telpon' => $phone,
            'email' => $email,
            'password' => $password
        );
        $where = array(
            'no' => $no
        );
        $this->M_Profil_Users->update_news($where,$data,'f_pengguna_user');
        $this->session->set_flashdata('message_name', 'Data berhasil di update');
        redirect('profil_users');
    }

    public function hapus(){
        $no = $this->input->get('no');
        $where = array(
            'no' => $no
        );
        $this->M_Profil_Users->hapus_data($where,'f_pengguna_user');
        redirect('profil_users');
    }

}
