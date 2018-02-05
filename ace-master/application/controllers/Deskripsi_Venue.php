<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deskripsi_Venue extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_deskripsi_venue/M_Deskripsi_Venue');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['page']="deskripsi_venue";
        $data['sub_page']="deskripsi_venue";
        $data['title_page']="Deskripsi Venue";
        $data['namenya']=$_SESSION['name'];
        $data['profile']=$this->M_Deskripsi_Venue->selectAll();
        $this->load->view('template',$data);
    }

    public function add(){
        $data['page']="deskripsi_venue";
        $data['sub_page']="add";
        $data['title_page']="Deskripsi Venue";
        $data['sub_title_page']="Add";
        $data['title']="Add Deskripsi Venue";
        $data['namenya']=$_SESSION['name'];
        $data['no']=$this->M_Deskripsi_Venue->count_data()+1;
        $this->load->view('template',$data);
    }

    public function add_aksi(){
        // Form Validation rules
        //$this->form_validation->set_rules('gambar_venue','Header Venue','required');
        $this->form_validation->set_rules('content','Article Venue','required');
        $this->form_validation->set_rules('link_map','Link Map','required');
        //$this->form_validation->set_rules('gambar_icon','Icon Venue','required');
        if($this->form_validation->run() == FALSE){
            $data['page']="deskripsi_venue";
            $data['sub_page']="add";
            $data['title_page']="Deskripsi Venue";
            $data['sub_title_page']="Add";
            $data['title']="Add Deskripsi Venue";
            $data['namenya']=$_SESSION['name'];
            $data['no']=$this->M_Deskripsi_Venue->count_data()+1;
            $this->load->view('template',$data);
        }else{
            $target_dir ="assets/uploads/deskripsi_venue/";
            $target_dir_icon = "assets/uploads/icon_venue/";
            $target_file = $target_dir . basename($_FILES["gambar_venue"]["name"]);
            $target_file_icon = $target_dir_icon . basename($_FILES["gambar_icon"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $imageFileTypeIcon = pathinfo($target_file_icon,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])){
                $check = getimagesize($_FILES["gambar_venue"]["tmp_name"]);
                $checkicon = getimagesize($_FILES["gambar_icon"]["tmp_name"]);
                if($check !== false && $checkicon!== false){
                    echo "File is an image - " . $check["mime"] . "." . $checkicon["mime"] . ".";
                    $uploadOk = 1;
                }else{
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check is file already exists
            if(file_exists($target_file) && file_exists($target_file_icon)){
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if($_FILES["gambar_venue"]["size"] > 3000000){
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"
                && $imageFileTypeIcon != "jpg" && $imageFileTypeIcon != "png" && $imageFileTypeIcon != "jpeg" && $imageFileTypeIcon != "gif"){
                echo "Sorry, only JPG, JPEG, PNG & GIF are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if($uploadOk == 0){
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to uploads file
            }else{
                if(move_uploaded_file($_FILES["gambar_venue"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["gambar_icon"]["tmp_name"], $target_file_icon)){
                    echo "The file ". basename($_FILES["gambar_venue"]["name"]). "has been uploaded.";
                }else{
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            $venue_background = $_FILES["gambar_venue"]["name"];
            $venue_description = $this->input->post('content');
            $link_map = $this->input->post('link_map');
            $venue_icon = $_FILES["gambar_icon"]["name"];
            //$kode_lap = $this->input->post('kode_lap');
            $data = array(
                'nomor' => $this->M_Deskripsi_Venue->count_data()+1,
                'background_venue' => $venue_background,
                'artikel_venue' => $venue_description,
                'map_venue' => $link_map,
                'icon_venue' => $venue_icon,
                'kode_lap' => 'KL0'.($this->M_Deskripsi_Venue->count_data()+1),
            );
            $this->M_Deskripsi_Venue->insert_news($data,'f_deskripsi_venue');
            $this->session->set_flashdata('message_name', 'Data berhasil di save');
            redirect('deskripsi_venue');
        }
    }

    public function edit(){
        $kode_lap = $this->input->get('kode_lap');
        $data['page']="deskripsi_venue";
        $data['sub_page']="edit";
        $data['title_page']="Deskripsi Venue";
        $data['sub_title_page']="Edit";
        $data['title']="Edit Deskripsi Venue";
        $data['namenya']=$_SESSION['name'];
        $data['kode_lap']=$this->uri->segment(3);
        $where = array(
            'kode_lap' => $kode_lap
        );
        $data['editnya']=$this->M_Deskripsi_Venue->edit_data($where,'f_deskripsi_venue');
        $this->load->view('template',$data);
    }

    public function edit_aksi(){
        $target_dir ="assets/uploads/deskripsi_venue/";
        $target_dir_icon = "assets/uploads/icon_venue/";
        $target_file = $target_dir . basename($_FILES["gambar_venue"]["name"]);
        $target_file_icon = $target_dir_icon . basename($_FILES["gambar_icon"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $imageFileTypeIcon = pathinfo($target_file_icon,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])){
            $check = getimagesize($_FILES["gambar_venue"]["tmp_name"]);
            $checkicon = getimagesize($_FILES["gambar_icon"]["tmp_name"]);
            if($check !== false && $checkicon!== false){
                echo "File is an image - " . $check["mime"] . "." . $checkicon["mime"] . ".";
                $uploadOk = 1;
            }else{
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check is file already exists
        if(file_exists($target_file) && file_exists($target_file_icon)){
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if($_FILES["gambar_venue"]["size"] > 3000000){
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"
            && $imageFileTypeIcon != "jpg" && $imageFileTypeIcon != "png" && $imageFileTypeIcon != "jpeg" && $imageFileTypeIcon != "gif"){
            echo "Sorry, only JPG, JPEG, PNG & GIF are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if($uploadOk == 0){
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to uploads file
        }else{
            if(move_uploaded_file($_FILES["gambar_venue"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["gambar_icon"]["tmp_name"], $target_file_icon)){
                echo "The file ". basename($_FILES["gambar_venue"]["name"]). "has been uploaded.";
            }else{
                echo "Sorry, there was an error uploading your file.";
            }
        }
        $venue_background = $_FILES["gambar_venue"]["name"];
        $venue_icon = $_FILES["gambar_icon"]["name"];
        if($venue_background == ""){
            // TODO validation
            $venue_background = $this->input->post('gambar_venue2');
        }else{
            $venue_background = $_FILES["gambar_venue"]["name"];
        }
        if($venue_icon == ""){
            $venue_icon = $this->input->post('gambar_icon2');
        }else{
            $venue_icon = $_FILES["gambar_icon"]["name"];
        }
        $venue_description = $this->input->post('content');
        $link_map = $this->input->post('link_map');
        $kode_lap = $this->input->post('kode_lap');
        $data = array(
            'background_venue' => $venue_background,
            'artikel_venue' => $venue_description,
            'map_venue' => $link_map,
            'icon_venue' => $venue_icon,
            'kode_lap' => $kode_lap
        );
        $where = array(
            'kode_lap' => $kode_lap
        );
        $this->M_Deskripsi_Venue->update_news($where,$data,'f_deskripsi_venue');
        $this->session->set_flashdata('message_name', 'Data berhasil di update');
        redirect('deskripsi_venue');
    }

    public function hapus(){
        $kode_lap = $this->input->get('kode_lap');
        $where = array(
            'kode_lap' => $kode_lap
        );
        $this->M_Deskripsi_Venue->hapus_data($where,'f_deskripsi_venue');
        redirect('deskripsi_venue');
    }
}
