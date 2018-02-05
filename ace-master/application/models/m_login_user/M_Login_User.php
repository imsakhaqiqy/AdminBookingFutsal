<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
    class M_Login_User extends CI_Model{

        function Cek_Data($where,$table){
            $this->db->where($where);
            $this->db->from($table);
            $query = $this->db->get();
            return $query->result();
        }

        function count_data(){
            $query = $this->db->query("SELECT * FROM f_admin_users");
            return $query->num_rows();
        }
        function Insert_Users($data,$table){
            $this->db->insert($table,$data);
        }
    }
