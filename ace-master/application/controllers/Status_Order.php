<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_Order extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_status_order/M_Status_Order');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index(){
        $data['page']="status_order";
        $data['sub_page']="status_order";
        $data['title_page']="Status Order";
        $data['namenya']=$_SESSION['name'];
        $data['profile']= $this->M_Status_Order->selectAll();
        $this->load->view('template',$data);
    }

    public function add(){
        $data['page']="status_order";
        $data['sub_page']="add";
        $data['title_page']="Status Order";
        $data['sub_title_page']="Add";
        $data['title']="Add Status Order";
        $data['namenya']=$_SESSION['name'];
        $data['no']=$this->M_Status_Order->count_data()+1;
        $this->load->view('template',$data);
    }

    public function add_aksi(){
        $this->form_validation->set_rules('no_struk','Receipt Number','required');
        $this->form_validation->set_rules('status_jadwal','Schedule Status','required');
        $this->form_validation->set_rules('batas_waktu_transfer','Deadline Transfer','required');
        $this->form_validation->set_rules('status_order','Order Status','required');
        $this->form_validation->set_rules('kode_pesanan','Booking Code','required');
        if($this->form_validation->run() == FALSE){
            $data['page']="status_order";
            $data['sub_page']="add";
            $data['title_page']="Status Order";
            $data['sub_title_page']="Add";
            $data['title']="Add Status Order";
            $data['namenya']=$_SESSION['name'];
            $data['no']=$this->M_Status_Order->count_data()+1;
            $this->load->view('template',$data);
        }else {
            $no_struk = $this->input->post('no_struk');
            $status_jadwal = $this->input->post('status_jadwal');
            $batas_waktu_transfer = $this->input->post('batas_waktu_transfer');
            $status_order = $this->input->post('status_order');
            $kode_pesanan = $this->input->post('kode_pesanan');
            $data = array(
                'no' => $this->M_Status_Order->count_data()+1,
                'no_struk' => $no_struk,
                'status' => $status_jadwal,
                'batas_waktu_transfer' => $batas_waktu_transfer,
                'status_pesanan' => $status_order,
                'kode_pesan' => $kode_pesanan
            );
            $this->M_Status_Order->insert_news($data,'f_status_order');
            $this->session->set_flashdata('message_name', 'Data berhasil di save');
            redirect('status_order');
        }
    }

    public function edit(){
        $no = $this->input->get('no');
        $data['page']="status_order";
        $data['sub_page']="edit";
        $data['title_page']="Status Order";
        $data['sub_title_page']="Edit";
        $data['title']="Edit Status Order";
        $data['namenya']=$_SESSION['name'];
        $data['no']=$this->uri->segment(3);
        $where = array(
            'no' => $no
        );
        $data['editnya']=$this->M_Status_Order->edit_data($where,'f_status_order');
        $this->load->view('template',$data);
    }

    public function edit_aksi(){
        $no = $this->input->post('no');
        $no_struk = $this->input->post('no_struk');
        $status_jadwal = $this->input->post('status_jadwal');
        $batas_waktu_transfer = $this->input->post('batas_waktu_transfer');
        $status_order = $this->input->post('status_order');
        $kode_pesanan = $this->input->post('kode_pesanan');
        $data = array(
            'no_struk' => $no_struk,
            'status' => $status_jadwal,
            'batas_waktu_transfer' => $batas_waktu_transfer,
            'status_pesanan' => $status_order,
            'kode_pesan' => $kode_pesanan
        );
        $where = array(
            'no' => $no
        );
        $this->M_Status_Order->update_news($where,$data,'f_status_order');
        $this->session->set_flashdata('message_name', 'Data berhasil di update');
        redirect('status_order');
    }

    public function hapus(){
        $no = $this->input->get('no');
        $where = array(
            'no' => $no
        );
        $this->M_Status_Order->hapus_data($where,'f_status_order');
        redirect('status_order');
    }

}
