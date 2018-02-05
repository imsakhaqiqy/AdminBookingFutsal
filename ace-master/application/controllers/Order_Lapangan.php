<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_Lapangan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_order_lapangan/M_Order_Lapangan');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index(){
        $data['page']="order_lapangan";
        $data['sub_page']="order_lapangan";
        $data['title_page']="Order Lapangan";
        $data['namenya']=$_SESSION['name'];
        $data['profile']= $this->M_Order_Lapangan->selectAll();
        $this->load->view('template',$data);
    }

    public function add(){
        $data['page']="order_lapangan";
        $data['sub_page']="add";
        $data['title_page']="Order Lapangan";
        $data['sub_title_page']="Add";
        $data['title']="Add Order Lapangan";
        $data['namenya']=$_SESSION['name'];
        $data['no']=$this->M_Order_Lapangan->count_data()+1;
        $this->load->view('template',$data);
    }

    public function add_aksi(){
        $this->form_validation->set_rules('kode_struk','Receipt Number','required');
        $this->form_validation->set_rules('kode_stok','Stock Code','required');
        $this->form_validation->set_rules('jam_order','Hours Order','required');
        $this->form_validation->set_rules('tanggal_order','Order Date','required');
        $this->form_validation->set_rules('jam_main','Curtain Time','required');
        $this->form_validation->set_rules('tanggal_main','Play Date','required');
        $this->form_validation->set_rules('uang_dp','Down Payment Cash','required');
        $this->form_validation->set_rules('no_rekening_tujuan','Destination Account Number','required');
        $this->form_validation->set_rules('nama_tujuan','Account Name','required');
        $this->form_validation->set_rules('sisa_pembayaran','Remaining Payment','required');
        if($this->form_validation->run() == FALSE){
            $data['page']="order_lapangan";
            $data['sub_page']="add";
            $data['title_page']="Order Lapangan";
            $data['sub_title_page']="Add";
            $data['title']="Add Order Lapangan";
            $data['namenya']=$_SESSION['name'];
            $data['no']=$this->M_Order_Lapangan->count_data()+1;
            $this->load->view('template',$data);
        }else {
            $no_struk = $this->input->post('kode_struk');
            $kode_stok = $this->input->post('kode_stok');
            $jam_pesan = $this->input->post('jam_order');
            $tgl_pesan = $this->input->post('tanggal_order');
            $jam_main = $this->input->post('jam_main');
            $tgl_main = $this->input->post('tanggal_main');
            $uang_dp = $this->input->post('uang_dp');
            $no_rek_tujuan = $this->input->post('no_rekening_tujuan');
            $atas_nama = $this->input->post('nama_tujuan');
            $sisa_pembayaran = $this->input->post('sisa_pembayaran');
            $data = array(
                'no' => $this->M_Order_Lapangan->count_data()+1,
                'no_struk' => $no_struk,
                'kode_stok' => $kode_stok,
                'jam_order' => $jam_pesan,
                'tanggal_order' => $tgl_pesan,
                'jam_main' => $jam_main,
                'tanggal_main' => $tgl_main,
                'uang_dp' => $uang_dp,
                'rekening_tujuan' => $no_rek_tujuan,
                'nama_tujuan' => $atas_nama,
                'sisa_pembayaran' => $sisa_pembayaran
            );
            $this->M_Order_Lapangan->insert_news($data,'f_order_lapangan');
            $this->session->set_flashdata('message_name', 'Data berhasil di save');
            redirect('order_lapangan');
        }
    }

    public function edit(){
        $no = $this->input->get('no');
        $data['page']="order_lapangan";
        $data['sub_page']="edit";
        $data['title_page']="Order Lapangan";
        $data['sub_title_page']="Edit";
        $data['title']="Edit Order Lapangan";
        $data['namenya']=$_SESSION['name'];
        $data['no']=$this->uri->segment(3);
        $where = array(
            'no' => $no
        );
        $data['editnya']=$this->M_Order_Lapangan->edit_data($where,'f_order_lapangan');
        $this->load->view('template',$data);
    }

    public function edit_aksi(){
        $no = $this->input->post('no');
        $no_struk = $this->input->post('kode_struk');
        $kode_stok = $this->input->post('kode_stok');
        $jam_pesan = $this->input->post('jam_order');
        $tgl_pesan = $this->input->post('tanggal_order');
        $jam_main = $this->input->post('jam_main');
        $tgl_main = $this->input->post('tanggal_main');
        $uang_dp = $this->input->post('uang_dp');
        $no_rek_tujuan = $this->input->post('no_rekening_tujuan');
        $atas_nama = $this->input->post('nama_tujuan');
        $sisa_pembayaran = $this->input->post('sisa_pembayaran');
        $data = array(
            'no_struk' => $no_struk,
            'kode_stok' => $kode_stok,
            'jam_order' => $jam_pesan,
            'tanggal_order' => $tgl_pesan,
            'jam_main' => $jam_main,
            'tanggal_main' => $tgl_main,
            'uang_dp' => $uang_dp,
            'rekening_tujuan' => $no_rek_tujuan,
            'nama_tujuan' => $atas_nama,
            'sisa_pembayaran' => $sisa_pembayaran
        );
        $where = array(
            'no' => $no
        );
        $this->M_Order_Lapangan->update_news($where,$data,'f_order_lapangan');
        $this->session->set_flashdata('message_name', 'Data berhasil di update');
        redirect('order_lapangan');
    }

    function hapus(){
        $no = $this->input->get('no');
        $where=array(
            'no' => $no
        );
        $this->M_Order_Lapangan->hapus_data($where,'f_order_lapangan');
        redirect('order_lapangan');
    }

}
