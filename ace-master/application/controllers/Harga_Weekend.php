<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Harga_Weekend extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_harga_weekend/M_Harga_Weekend');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index($page = 'harga_weekend'){
        $data['page']="harga_weekend";
        $data['sub_page']="harga_weekend";
        $data['title_page']="Harga Weekend";
        $data['namenya']=$_SESSION['name'];
        $data['profile']= $this->M_Harga_Weekend->selectAll();
        $this->load->view('template',$data);
    }

    public function add(){
        $data['page']="harga_weekend";
        $data['sub_page']="add";
        $data['title_page']="Harga Weekend";
        $data['sub_title_page']="Add";
        $data['title']="Add Harga Weekend";
        $data['namenya']=$_SESSION['name'];
        $data['no']=$this->M_Harga_Weekend->count_data()+1;
        $this->load->view('template',$data);
    }

    public function add_aksi(){
        $this->form_validation->set_rules('jam_pagi','Morning','required');
        $this->form_validation->set_rules('harga_pagi','Price of Morning','required');
        $this->form_validation->set_rules('jam_malam','Afternoon','required');
        $this->form_validation->set_rules('harga_malam','Price of Afternoon','required');
        $this->form_validation->set_rules('kode_stok','Stock Code','required');
        if($this->form_validation->run() == FALSE){
            $data['page']="harga_weekend";
            $data['sub_page']="add";
            $data['title_page']="Harga Weekend";
            $data['sub_title_page']="Add";
            $data['title']="Add Harga Weekend";
            $data['namenya']=$_SESSION['name'];
            $data['no']=$this->M_Harga_Weekend->count_data()+1;
            $this->load->view('template',$data);
        }else {
            $jam_pagi = $this->input->post('jam_pagi');
            $harga_pagi = $this->input->post('harga_pagi');
            $jam_malam = $this->input->post('jam_malam');
            $harga_malam = $this->input->post('harga_malam');
            $kode_stok = $this->input->post('kode_stok');
            $data = array(
                'no' => $this->M_Harga_Weekend->count_data()+1,
                'jam_pagi' => $jam_pagi,
                'harga_pagi' => $harga_pagi,
                'jam_malam' => $jam_malam,
                'harga_malam' => $harga_malam,
                'kode_stok' => $kode_stok
            );
            $this->M_Harga_Weekend->insert_data($data,'f_harga_libur');
            $this->session->set_flashdata('message_name', 'Data berhasil di save');
            redirect('harga_weekend');
        }
    }

    public function edit(){
        $data['namenya']=$_SESSION['name'];
        $kode_stok = $this->input->get('kode_stok');
        $data['page']="harga_weekend";
        $data['sub_page']="edit";
        $data['title_page']="Harga Weekend";
        $data['sub_title_page']="Edit";
        $data['title']="Edit Harga Weekend";
        $data['namenya'] = $_SESSION['name'];
        $data['kode_stok']=$this->uri->segment(3);
        $where = array(
            'kode_stok' => $kode_stok
        );
        $data['editnya']=$this->M_Harga_Weekend->edit_data($where,'f_harga_libur');
        $this->load->view('template',$data);
    }

    public function edit_aksi(){
        $jam_pagi = $this->input->post('jam_pagi');
        $harga_pagi = $this->input->post('harga_pagi');
        $jam_malam = $this->input->post('jam_malam');
        $harga_malam = $this->input->post('harga_malam');
        $kode_stok = $this->input->post('kode_stok');
        $data = array(
            'jam_pagi' => $jam_pagi,
            'harga_pagi' => $harga_pagi,
            'jam_malam' => $jam_malam,
            'harga_malam' => $harga_malam,
            'kode_stok' => $kode_stok
        );
        $where = array(
            'kode_stok' => $kode_stok
        );
        $this->M_Harga_Weekend->update_data($where,$data,'f_harga_libur');
        $this->session->set_flashdata('message_name', 'Data berhasil di update');
        redirect('harga_weekend');
    }

    public function hapus(){
        $kode_stok = $this->input->get('kode_stok');
        $where = array(
            'kode_stok' => $kode_stok
        );
        $this->M_Harga_Weekend->hapus_data($where,'f_harga_libur');
        redirect('harga_weekend');
    }

}
