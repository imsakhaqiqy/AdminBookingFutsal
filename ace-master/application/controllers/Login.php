<?php
defined('BASEPATH')OR exit('No direct script access allowed');

    class Login extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('m_login_user/M_Login_User');
            $this->load->helper('url');
            $this->load->library('session');
        }

        public function index(){
            $this->load->view('index');
        }

        public function aksi_login(){
            $user_name = $this->input->post('user_name');
            $password = $this->input->post('password');
            $post_data = $this->input->post();
            // print_r($post_data);
            // exit();
            $where = array(
                'email' => $user_name, //imsakhaqiqy24@gmail.com
                'password' => $password //******
            );
            $cocok = $this->M_Login_User->Cek_Data($where,'f_admin_users');
            if(count($cocok)){
                foreach ($cocok as $key) {
                    if($user_name===$key->email && $password===$key->password){
                    $data['page']="dashboard";
                    $data['sub_page']="dashboard";
                    $data['title_page']="Dashboard";
                    //$data['data_login'] = $this->M_Login_User->Cek_Data($where,'f_pengguna_user');
                    //$data['editnya'] = $this->M_Login_User->Cek_Data($where,'f_pengguna_user');
                    $_SESSION['name'] = $key->username;
                    //$data['username'] = $_SESSION['$key->nama_lengkap'];
                    $data['namenya'] = $_SESSION['name'];
                    $data['error'] = 0;
                    // $this->load->view('template',$data);
                    }else{
                        $data['error']="Username or Password incorrect";
                        // $this->load->view('index',$data);
                    }
                }
            }else{
                $data['error']="Username or Password incorrect";
                // $this->load->view('index',$data);
                //echo "Tidak di temukan";
            }
          echo json_encode($data);
        }

        public function insert_users($email,$user_name,$password){
            //$email = $this->input->post('email');
            //$user_name = $this->input->post('username');
            //$password = $this->input->post('password');
            $data=array(
                'no' => $this->M_Login_User->count_data()+1,
                'email' => $email,
                'username' => $user_name,
                'password' => $password
            );
            $this->M_Login_User->Insert_Users($data,'f_admin_users');
            redirect('Login');
        }
    }
	