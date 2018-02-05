<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deskripsi_Lapangan extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('m_deskripsi_lapangan/M_Deskripsi_Lapangan');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['page']="deskripsi_lapangan";
        $data['sub_page']="deskripsi_lapangan";
        $data['title_page']="Deskripsi Lapangan";
        $data['namenya'] = $_SESSION['name'];
        $data['profile']=$this->M_Deskripsi_Lapangan->selectAll();
        $this->load->view('template',$data);
    }

	public function add(){
        $data['page']="deskripsi_lapangan";
        $data['sub_page']="add";
        $data['title_page']="Deskripsi Lapangan";
        $data['sub_title_page']="Add";
        $data['title']="Add Deskripsi Lapangan";
        $data['namenya'] = $_SESSION['name'];
		$data['no']=$this->M_Deskripsi_Lapangan->count_data()+1;
        $this->load->view('template',$data);
    }

    public function adde(){
        $data['page']="deskripsi_lapangan";
        $data['sub_page']="adde";
        $data['title_page']="Deskripsi Lapangan";
        $data['sub_title_page']="Adde";
        $data['title']="Add Deskripsi Lapangan";
        $data['namenya'] = $_SESSION['name'];
		$data['no']=$this->M_Deskripsi_Lapangan->count_data()+1;
        $this->load->view('template',$data);
    }

	public function add_aksi(){
        // form validation rules
        //$this->form_validation->set_rules('gambar_background','Header Description','required');
        $this->form_validation->set_rules('heading_article','Title Description','required');
        $this->form_validation->set_rules('content','Article Description','required');
        if($this->form_validation->run() == FALSE){
            $data['page']="deskripsi_lapangan";
            $data['sub_page']="adde";
            $data['title_page']="Deskripsi Lapangan";
            $data['sub_title_page']="Adde";
            $data['title']="Add Deskripsi Lapangan";
            $data['namenya'] = $_SESSION['name'];
    		$data['no']=$this->M_Deskripsi_Lapangan->count_data()+1;
            $this->load->view('template',$data);
        }else{
            $target_dir = "assets/uploads/deskripsi_lapangan/";
            $target_file = $target_dir . basename($_FILES["gambar_background"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])){
                $check = getimagesize($_FILES["gambar_background"]["tmp_name"]);
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
            if($_FILES["gambar_background"]["size"] > 1000000){
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
                if(move_uploaded_file($_FILES["gambar_background"]["tmp_name"], $target_file)){
                echo "The file ". basename($_FILES["gambar_background"]["name"]). "has been uploaded.";
                }else{
                echo "Sorry, there was an error uploading your file.";
                }
            }
            $background_header = $_FILES["gambar_background"]["name"];
            $judul_deskripsi = $this->input->post('heading_article');
            $artikel_deskripsi = $this->input->post('content');
            $kode_lap = $this->input->post('kode_lap');
            $data = array(
                'nomor' => $this->M_Deskripsi_Lapangan->count_data()+1,
                'background_header' => $background_header,
                'judul_deskripsi' => $judul_deskripsi,
                'artikel_deskripsi' => $artikel_deskripsi,
                'kode_lap' => 'KL0'.($this->M_Deskripsi_Lapangan->count_data()+1),
            );
            $this->M_Deskripsi_Lapangan->insert_news($data,'f_deskripsi_lapangan');
            $this->session->set_flashdata('message_name', 'Data berhasil di save');
            redirect('deskripsi_lapangan');
        }

	}

	public function edit(){
		$kode_lap = $this->input->get('kode_lap');
        $data['page']="deskripsi_lapangan";
        $data['sub_page']="edit";
        $data['title_page']="Deskripsi Lapangan";
        $data['sub_title_page']="Edit";
        $data['title']="Edit Deskripsi Lapangan";
        $data['namenya'] = $_SESSION['name'];
		$data['kode_lap'] = $this->uri->segment(3);
		$where = array(
			'kode_lap' => $kode_lap
			);
		$data['editnya'] = $this->M_Deskripsi_Lapangan->edit_data($where,'f_deskripsi_lapangan');
        $this->load->view('template',$data);
        //$this->M_Profil_Lapangan->select_data($data,'f_profil_lapangan');
    }

	public function edit_aksi(){
            $target_dir = "assets/uploads/deskripsi_lapangan/";
            $target_file = $target_dir . basename($_FILES["gambar_background"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])){
                $check = getimagesize($_FILES["gambar_background"]["tmp_name"]);
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
            if($_FILES["gambar_background"]["size"] > 5000000){
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
                if(move_uploaded_file($_FILES["gambar_background"]["tmp_name"], $target_file)){
                echo "The file ". basename($_FILES["gambar_background"]["name"]). "has been uploaded.";
                }else{
                echo "Sorry, there was an error uploading your file.";
                }
            }
            $background_header = $_FILES["gambar_background"]["name"];
            if($background_header == ""){
                // TODO validation
                $background_header = $this->input->post('gambar_background2');
            }else{
                $background_header = $_FILES["gambar_background"]["name"];
            }
            $judul_deskripsi = $this->input->post('heading_article');
            $artikel_deskripsi = $this->input->post('content');
            $kode = $this->input->post('kode_lap');
            $data = array(
                'background_header' => $background_header,
                'judul_deskripsi' => $judul_deskripsi,
                'artikel_deskripsi' => $artikel_deskripsi,
                'kode_lap' => $kode
            );
            $where = array(
                'kode_lap' => $kode
            );
            $this->M_Deskripsi_Lapangan->update_news($where,$data,'f_deskripsi_lapangan');
            $this->session->set_flashdata('message_name', 'Data berhasil di update');
            redirect('deskripsi_lapangan');

    }

	public function hapus(){
		$kode_lap = $this->input->get('kode_lap');
        $where=array(
            'kode_lap' => $kode_lap
        );
        $this->M_Deskripsi_Lapangan->hapus_data($where,'f_deskripsi_lapangan');
        redirect('deskripsi_lapangan');
    }
}
