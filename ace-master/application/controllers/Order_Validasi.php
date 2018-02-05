<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_Validasi extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_order_validasi/M_Order_Validasi');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index(){
        $data['page']="order_validasi";
        $data['sub_page']="order_validasi";
        $data['title_page']="Order Validasi";
        $data['namenya']=$_SESSION['name'];
        $data['profile']= $this->M_Order_Validasi->selectAll();
        $this->load->view('template',$data);
    }

    public function add(){
        $data['page']="order_validasi";
        $data['sub_page']="add";
        $data['title_page']="Order Validasi";
        $data['sub_title_page']="Add";
        $data['title']="Add Order Validasi";
        $data['namenya']=$_SESSION['name'];
        $data['no']=$this->M_Order_Validasi->count_data()+1;
        $this->load->view('template',$data);
    }

    public function add_aksi(){
        $this->form_validation->set_rules('keterangan','Information','required');
        $this->form_validation->set_rules('jam_transfer','Transfer Time','required');
        $this->form_validation->set_rules('uang_dp','Down Payment Cash','required');
        $this->form_validation->set_rules('no_rekening_asal','Sender Account Number','required');
        $this->form_validation->set_rules('nama_asal','Account Name','required');
        $this->form_validation->set_rules('no_rekening_tujuan','Destination Account Name','required');
        $this->form_validation->set_rules('nama_tujuan','Account Name','required');
        $this->form_validation->set_rules('no_struk','Receipt Number','required');
        if($this->form_validation->run() == FALSE){
            $data['page']="order_validasi";
            $data['sub_page']="add";
            $data['title_page']="Order Validasi";
            $data['sub_title_page']="Add";
            $data['title']="Add Order Validasi";
            $data['namenya']=$_SESSION['name'];
            $data['no']=$this->M_Order_Validasi->count_data()+1;
            $this->load->view('template',$data);
        }else {
            $keterangan = $this->input->post('keterangan');
            $jam_transfer = $this->input->post('jam_transfer');
            $uang_dp = $this->input->post('uang_dp');
            $no_rekening_asal = $this->input->post('no_rekening_asal');
            $nama_asal = $this->input->post('nama_asal');
            $no_rekening_tujuan = $this->input->post('no_rekening_tujuan');
            $nama_tujuan = $this->input->post('nama_tujuan');
            $no_struk = $this->input->post('no_struk');
            $data = array(
                'no' => $this->M_Order_Validasi->count_data()+1,
                'keterangan' => $keterangan,
                'jam_transfer' => $jam_transfer,
                'uang_dp' => $uang_dp,
                'rekening_asal' => $no_rekening_asal,
                'nama_asal' => $nama_asal,
                'rekening_tujuan' => $no_rekening_tujuan,
                'nama_tujuan' => $nama_tujuan,
                'no_struk' => $no_struk
            );
            $this->M_Order_Validasi->insert_news($data,'f_order_validasi');
            $this->session->set_flashdata('message_name', 'Data berhasil di save');
            redirect('order_validasi');
        }
    }

    public function edit(){
        $no = $this->input->get('no');
        $data['page']="order_validasi";
        $data['sub_page']="edit";
        $data['title_page']="Order Validasi";
        $data['sub_title_page']="Edit";
        $data['title']="Edit Order Validasi";
        $data['namenya']=$_SESSION['name'];
        $data['no']=$this->uri->segment(3);
        $where = array(
            'no' => $no
        );
        $data['editnya']=$this->M_Order_Validasi->edit_data($where,'f_order_validasi');
        $this->load->view('template',$data);
    }

    public function edit_aksi(){
        $no = $this->input->post('no');
        $keterangan = $this->input->post('keterangan');
        $jam_transfer = $this->input->post('jam_transfer');
        $uang_dp = $this->input->post('uang_dp');
        $no_rekening_asal = $this->input->post('no_rekening_asal');
        $nama_asal = $this->input->post('nama_asal');
        $no_rekening_tujuan = $this->input->post('no_rekening_tujuan');
        $nama_tujuan = $this->input->post('nama_tujuan');
        $no_struk = $this->input->post('no_struk');
        $data = array(
            'keterangan' => $keterangan,
            'jam_transfer' => $jam_transfer,
            'uang_dp' => $uang_dp,
            'rekening_asal' => $no_rekening_asal,
            'nama_asal' => $nama_asal,
            'rekening_tujuan' => $no_rekening_tujuan,
            'nama_tujuan' => $nama_tujuan,
            'no_struk' => $no_struk
        );
        $where = array(
            'no' => $no
        );
        $this->M_Order_Validasi->update_news($where,$data,'f_order_validasi');
        $this->session->set_flashdata('message_name', 'Data berhasil di update');
        redirect('order_validasi');
    }

    function hapus(){
        $no = $this->input->get('no');
        $where=array(
            'no' => $no
        );
        $this->M_Order_Validasi->hapus_data($where,'f_order_validasi');
        redirect('order_validasi');
    }

}
