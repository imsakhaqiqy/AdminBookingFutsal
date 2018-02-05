<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_Lapangan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_jenis_lapangan/M_Jenis_Lapangan');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['page']="jenis_lapangan";
        $data['sub_page']="jenis_lapangan";
        $data['title_page']="Jenis Lapangan";
        $data['namenya']=$_SESSION['name'];
        $data['profile']= $this->M_Jenis_Lapangan->selectAll();
        $this->load->view('template',$data);
    }

	public function add(){
        $data['page']="jenis_lapangan";
        $data['sub_page']="add";
        $data['title_page']="Jenis Lapangan";
        $data['sub_title_page']="Add";
        $data['title']="Add Jenis Lapangan";
        $data['namenya']=$_SESSION['name'];
        $this->load->view('template',$data);
    }

	public function add_aksi(){
        $this->form_validation->set_rules('jenis','Information','required');
        if($this->form_validation->run() == FALSE){
            $data['page']="jenis_lapangan";
            $data['sub_page']="add";
            $data['title_page']="Jenis Lapangan";
            $data['sub_title_page']="Add";
            $data['title']="Add Jenis Lapangan";
            $data['namenya']=$_SESSION['name'];
            $this->load->view('template',$data);
        }else{
            $kode_jenis = $this->input->post('kode_jenis');
            $jenis = $this->input->post('jenis');
            $data = array(
                'nomor' => $this->M_Jenis_Lapangan->count_data()+1,
                'kode_jenis' => 'KJ00'.($this->M_Jenis_Lapangan->count_data()+1),
                'jenis' => $jenis
            );
            $this->M_Jenis_Lapangan->insert_data($data,'f_jenis_lapangan');
            $this->session->set_flashdata('message_name', 'Data berhasil di save');
            redirect('jenis_lapangan');
        }
    }

	public function edit(){
        $kode_jenis = $this->input->get('kode_jenis');
        $data['page']="jenis_lapangan";
        $data['sub_page']="edit";
        $data['title_page']="Jenis Lapangan";
        $data['sub_title_page']="Edit";
        $data['title']="Edit Jenis Lapangan";
        $data['namenya'] = $_SESSION['name'];
		$data['kode_jenis'] = $this->uri->segment(3);
		$where = array(
			'kode_jenis' => $kode_jenis
			);
		$data['editnya'] = $this->M_Jenis_Lapangan->edit_data($where,'f_jenis_lapangan');
        $this->load->view('template',$data);
        //$this->M_Profil_Lapangan->select_data($data,'f_profil_lapangan');
    }

	public function edit_aksi(){
        $kode = $this->input->post('kode_jenis');
        $jenis = $this->input->post('jenis');
        $data = array(
            'kode_jenis' => $kode,
            'jenis' => $jenis
        );
        $where = array(
            'kode_jenis' => $kode
        );
        $this->M_Jenis_Lapangan->update_data($where,$data,'f_jenis_lapangan');
        $this->session->set_flashdata('message_name', 'Data berhasil di update');
        redirect('jenis_lapangan');
    }

	function hapus(){
        $kode_jenis = $this->input->get('kode_jenis');
        $where=array(
            'kode_jenis' => $kode_jenis
        );
        $this->M_Jenis_Lapangan->hapus_data($where,'f_jenis_lapangan');
        redirect('jenis_lapangan');
    }
}
