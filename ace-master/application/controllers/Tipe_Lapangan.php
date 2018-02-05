<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipe_Lapangan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_tipe_lapangan/M_Tipe_Lapangan');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['page']="tipe_lapangan";
        $data['sub_page']="tipe_lapangan";
        $data['title_page']="Tipe Lapangan";
        $data['namenya']=$_SESSION['name'];
        $data['profile']= $this->M_Tipe_Lapangan->selectAll();
        $this->load->view('template',$data);
    }

    public function add(){
        $data['page']="tipe_lapangan";
        $data['sub_page']="add";
        $data['title_page']="Tipe Lapangan";
        $data['sub_title_page']="Add";
        $data['title']="Add Tipe Lapangan";
        $data['namenya']=$_SESSION['name'];
        $this->load->view('template',$data);
    }

    public function add_aksi(){
        $this->form_validation->set_rules('tipe','Information','required');
        if($this->form_validation->run() == FALSE){
            $data['page']="tipe_lapangan";
            $data['sub_page']="add";
            $data['title_page']="Tipe Lapangan";
            $data['sub_title_page']="Add";
            $data['title']="Add Tipe Lapangan";
            $data['namenya']=$_SESSION['name'];
            $this->load->view('template',$data);
        }else{
            $tipe = $this->input->post('tipe');
            $data = array(
                'nomor' => $this->M_Tipe_Lapangan->count_data()+1,
                'kode_tipe' => 'KT0'.($this->M_Tipe_Lapangan->count_data()+1),
                'tipe' => $tipe
            );
            $this->M_Tipe_Lapangan->insert_data($data,'f_tipe_lapangan');
            $this->session->set_flashdata('message_name', 'Data berhasil di save');
            redirect('tipe_lapangan');
        }
    }

    public function edit(){
        $kode_tipe = $this->input->get('kode_tipe');
        $data['page']="tipe_lapangan";
        $data['sub_page']="edit";
        $data['title_page']="Tipe Lapangan";
        $data['sub_title_page']="Edit";
        $data['title']="Edit Tipe Lapangan";
        $data['namenya'] = $_SESSION['name'];
		$data['kode_tipe'] = $this->uri->segment(3);
		$where = array(
			'kode_tipe' => $kode_tipe
			);
		$data['editnya'] = $this->M_Tipe_Lapangan->edit_data($where,'f_tipe_lapangan');
        $this->load->view('template',$data);
        //$this->M_Profil_Lapangan->select_data($data,'f_profil_lapangan');
    }

    public function edit_aksi(){
        $kode = $this->input->post('kode_tipe');
        $tipe = $this->input->post('tipe');
        $data = array(
            'kode_tipe' => $kode,
            'tipe' => $tipe
        );
        $where = array(
            'kode_tipe' => $kode
        );
        $this->M_Tipe_Lapangan->update_data($where,$data,'f_tipe_lapangan');
        $this->session->set_flashdata('message_name', 'Data berhasil di update');
        redirect('tipe_lapangan');
    }

    function hapus(){
        $kode_tipe = $this->input->get('kode_tipe');
        $where=array(
            'kode_tipe' => $kode_tipe
        );
        $this->M_Tipe_Lapangan->hapus_data($where,'f_tipe_lapangan');
        redirect('tipe_lapangan');
    }

}
