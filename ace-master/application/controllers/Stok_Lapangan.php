<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok_Lapangan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_stok_lapangan/M_Stok_Lapangan');
        $this->load->model('m_tipe_lapangan/M_Tipe_Lapangan');
        $this->load->model('m_jenis_lapangan/M_Jenis_Lapangan');
        $this->load->model('m_profil_lapangan/M_Profil_Lapangan');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['page']="stok_lapangan";
        $data['sub_page']="stok_lapangan";
        $data['title_page']="Stok Lapangan";
        $data['namenya']=$_SESSION['name'];
        $data['profile']= $this->M_Stok_Lapangan->selectJoin();
        $this->load->view('template',$data);
    }

    public function add(){
        $data['page']="stok_lapangan";
        $data['sub_page']="add";
        $data['title_page']="Stok Lapangan";
        $data['sub_title_page']="Add";
        $data['title']="Add Stok Lapangan";
        $data['namenya']=$_SESSION['name'];
        $data['no']=$this->M_Stok_Lapangan->count_data()+1;
        $data['location_code']=$this->M_Tipe_Lapangan->selectAll();
        $data['code_types']=$this->M_Jenis_Lapangan->selectAll();
        $data['field_id']=$this->M_Profil_Lapangan->selectAll();
        $this->load->view('template',$data);
    }

    public function add_aksi(){
        // form_validation rules
        $this->form_validation->set_rules('kode_tipe','Location Code','required');
        $this->form_validation->set_rules('kode_jenis','Code Types','required');
        $this->form_validation->set_rules('kode_lap','Field ID','required');
        if($this->form_validation->run() == FALSE){
            $data['page']="Stok_lapangan";
            $data['sub_page']="add";
            $data['title_page']="Stok Lapangan";
            $data['sub_title_page']="Add";
            $data['title']="Add Stok Lapangan";
            $data['namenya']=$_SESSION['name'];
            $data['no']=$this->M_Stok_Lapangan->count_data()+1;
            $this->load->view('template',$data);
        }else{
            $target_dir = "assets/uploads/stok_lapangan/";
            $target_file = $target_dir . basename($_FILES["gambar_lapangan"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])){
                $check = getimagesize($_FILES["gambar_lapangan"]["tmp_name"]);
                if($check !== false){
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                }else{
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check is file already exists
            if(file_exists($target_file)){
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if($_FILES["gambar_lapangan"]["size"] > 1000000){
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if($uploadOk == 0){
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            }else{
                if(move_uploaded_file($_FILES["gambar_lapangan"]["tmp_name"], $target_file)){
                echo "The file ". basename($_FILES["gambar_lapangan"]["name"]). "has been uploaded.";
                }else{
                echo "Sorry, there was an error uploading your file.";
                }
            }
            $src_img = $_FILES["gambar_lapangan"]["name"];
            $kode_tipe = $this->input->post('kode_tipe');
            $kode_jenis = $this->input->post('kode_jenis');
            $kode_lap = $this->input->post('kode_lap');
            $data = array(
                'no' => $this->M_Stok_Lapangan->count_data()+1,
                'kode_stok' => 'KS0'.($this->M_Stok_Lapangan->count_data()+1),
                'src_gambar' => $src_img,
                'kode_tipe' => $kode_tipe,
                'kode_jenis' => $kode_jenis,
                'kode_lap' => $kode_lap
            );
            $this->M_Stok_Lapangan->insert_data($data,'f_stok_lapangan');
            $this->session->set_flashdata('message_name', 'Data berhasil di save');
            redirect('stok_lapangan');
        }
    }

    public function edit(){
        $kode_stok = $this->input->get('kode_stok');
        $data['page']="stok_lapangan";
        $data['sub_page']="edit";
        $data['title_page']="Stok Lapangan";
        $data['sub_title_page']="Edit";
        $data['title']="Edit Stok Lapangan";
        $data['namenya'] = $_SESSION['name'];
        $data['kode_stok']=$this->uri->segment(3);
        $where = array(
            'kode_stok' => $kode_stok
        );
        $data['editnya']=$this->M_Stok_Lapangan->edit_data($where,'f_stok_lapangan');
        $data['location_code']=$this->M_Tipe_Lapangan->selectAll();
        $data['code_types']=$this->M_Jenis_Lapangan->selectAll();
        $data['field_id']=$this->M_Profil_Lapangan->selectAll();
        $this->load->view('template',$data);
    }

    public function edit_aksi(){
        $target_dir = "assets/uploads/stok_lapangan/";
        $target_file = $target_dir . basename($_FILES["gambar_lapangan"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])){
            $check = getimagesize($_FILES["gambar_lapangan"]["tmp_name"]);
            if($check !== false){
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            }else{
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check is file already exists
        if(file_exists($target_file)){
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if($_FILES["gambar_lapangan"]["size"] > 3000000){
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if($uploadOk == 0){
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        }else{
            if(move_uploaded_file($_FILES["gambar_lapangan"]["tmp_name"], $target_file)){
            echo "The file ". basename($_FILES["gambar_lapangan"]["name"]). "has been uploaded.";
            }else{
            echo "Sorry, there was an error uploading your file.";
            }
        }
        $gambar_lapangan = $_FILES["gambar_lapangan"]["name"];
        if($gambar_lapangan == ""){
            // TODO validation
            $gambar_lapangan = $this->input->post('gambar_lapangan2');
        }else{
            $gambar_lapangan = $_FILES["gambar_lapangan"]["name"];
        }
        $kode_stok = $this->input->post('kode_stok');
        $kode_tipe = $this->input->post('kode_tipe');
        $kode_jenis = $this->input->post('kode_jenis');
        $kode_lap = $this->input->post('kode_lap');
        $data = array(
            'kode_stok' => $kode_stok,
            'src_gambar' => $gambar_lapangan,
            'kode_tipe' => $kode_tipe,
            'kode_jenis' => $kode_jenis,
            'kode_lap' => $kode_lap
        );
        $where = array(
            'kode_stok' => $kode_stok
        );
        $this->M_Stok_Lapangan->update_data($where,$data,'f_stok_lapangan');
        $this->session->set_flashdata('message_name', 'Data berhasil di update');
        redirect('stok_lapangan');
    }

    function hapus(){
        $kode_stok = $this->input->get('kode_stok');
        $where = array(
            'kode_stok' => $kode_stok
        );
        $this->M_Stok_Lapangan->hapus_data($where,'f_stok_lapangan');
        redirect('stok_lapangan');
    }
}
