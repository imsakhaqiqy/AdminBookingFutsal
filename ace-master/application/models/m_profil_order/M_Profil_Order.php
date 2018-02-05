<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class M_Profil_Order extends CI_Model{

        function selectAll()
		{
			$query = $this->db->query("Select * from f_profil_order ORDER BY no ASC");
			return $query->result();
			//return $query->result();
		}

        function count_data(){
            $query = $this->db->query("SELECT * FROM f_profil_order");
            return $query->num_rows();
        }

        function insert_news($data,$table){
            $this->db->insert($table,$data);
        }

        function edit_data($where,$table){
            $this->db->where($where);
            $this->db->from($table);
            $query = $this->db->get();
            return $query->result();
        }

        function update_news($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }

        function hapus_data($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }
    }
?>
