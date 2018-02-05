<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_Lapangan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_profil_lapangan/M_Profil_Lapangan');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('validation');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['page']="profil_lapangan";
        $data['sub_page']="profil_lapangan";
        $data['title_page']="Profil Lapangan";
        $data['title']="Profil Lapangan";
        //$_SESSION['name'] = "iim";
        //$data['username'] = $_SESSION['$key->nama_lengkap'];
        $data['namenya'] = $_SESSION['name'];
        $data['profile']= $this->M_Profil_Lapangan->selectAll();
        $this->load->view('template',$data);
    }

    public function add(){
        $data['page']="profil_lapangan";
        $data['sub_page']="add";
        $data['title_page']="Profil Lapangan";
        $data['sub_title_page']="Add";
        $data['title']="Add Profil Lapangan";
        $data['namenya'] = $_SESSION['name'];
		$data['no']=$this->M_Profil_Lapangan->count_data()+1;
        $this->load->view('template',$data);
    }

    public function add_aksi(){
        //$this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('phone','Phone','required');
        $this->form_validation->set_rules('city','City','required');
        if($this->form_validation->run() == FALSE)
        {
            $data['page']="profil_lapangan";
            $data['sub_page']="add";
            $data['title_page']="Profil Lapangan";
            $data['sub_title_page']="Add";
            $data['title']="Add Profil Lapangan";
            $data['namenya'] = $_SESSION['name'];
    		$data['no']=$this->M_Profil_Lapangan->count_data()+1;
            $this->load->view('template',$data);
        }
        else
        {
            //$kode = $this->input->post('kode');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $phone = $this->input->post('phone');
            $city = $this->input->post('city');

            $where = array(
                'nama_lap' => $nama
            );
            $cocok = $this->M_Profil_Lapangan->cek_data($where,'f_profil_lapangan');
            if(count($cocok)){
                foreach ($cocok as $key) {
                    if($nama==$key->nama_lap){
                        $this->session->set_flashdata('message_name', 'Nama lapangan sudah terdaftar');
                        redirect('profil_lapangan/add');
                    }
                }
            }else{
                $namax = $this->validation->do_one_space('/\s+/',' ',$nama);
                $alamatx = $this->validation->do_one_space('/\s+/',' ',$alamat);
                $phonex = $this->validation->do_one_space('/\s+/','',$phone);
                $cityx = $this->validation->do_one_space('/\s+/',' ',$city);

                    $data = array(
                        'nomor' => $this->M_Profil_Lapangan->count_data()+1,
                        'kode_lap' => 'KL0'.($this->M_Profil_Lapangan->count_data()+1),
                        'nama_lap' => $this->validation->do_ucwords($namax),
                        'alamat_lap' => $this->validation->do_ucwords($alamatx),
                        'telpon_lap' => $phonex,
                        'kota_lap' => $this->validation->do_ucwords($cityx)
                    );
                    $this->M_Profil_Lapangan->insert_news($data,'f_profil_lapangan');
                    // Set flash data
                    $this->session->set_flashdata('message_name', 'Data berhasil di simpan');
                    redirect('profil_lapangan');
            }

        }
    }

    public function edit(){
        $kode_lap = $this->input->get('kode_lap');
        //exit($kode_lap);
        $data['page']="profil_lapangan";
        $data['sub_page']="edit";
        $data['title_page']="Profil Lapangan";
        $data['sub_title_page']="Edit";
        $data['title']="Edit Profil Lapangan";
        $data['namenya'] = $_SESSION['name'];
		$data['kode_lap'] = $this->uri->segment(3);
		$where = array(
			'kode_lap' => $kode_lap
			);
		$data['editnya'] = $this->M_Profil_Lapangan->edit_data($where,'f_profil_lapangan');
        $this->load->view('template',$data);
        //$this->M_Profil_Lapangan->select_data($data,'f_profil_lapangan');
    }

    public function edit_aksi(){
        $kode = $this->input->post('kode_lap');
        $nama = $this->input->post('nama_lap');
        $alamat = $this->input->post('alamat_lap');
        $phone = $this->input->post('phone');
        $city = $this->input->post('city');

        $namax = $this->validation->do_one_space('/\s+/',' ',$nama);
        $alamatx = $this->validation->do_one_space('/\s+/',' ',$alamat);
        $phonex = $this->validation->do_one_space('/\s+/','',$phone);
        $cityx = $this->validation->do_one_space('/\s+/',' ',$city);
        $data = array(
            'nama_lap' => $this->validation->do_ucwords($namax),
            'alamat_lap' => $this->validation->do_ucwords($alamatx),
            'telpon_lap' => $phone,
            'kota_lap' => $this->validation->do_ucwords($cityx)
        );
        $where = array(
            'kode_lap' => $kode
        );
        $this->M_Profil_Lapangan->update_news($where,$data,'f_profil_lapangan');
        $this->session->set_flashdata('message_name', 'Data berhasil di update');
        redirect('profil_lapangan');
    }

    function hapus(){
        $kode_lap = $this->input->get('kode_lap');
        $where=array(
            'kode_lap' => $kode_lap
        );
        $this->M_Profil_Lapangan->hapus_data($where,'f_profil_lapangan');
        redirect('profil_lapangan');
    }

}
