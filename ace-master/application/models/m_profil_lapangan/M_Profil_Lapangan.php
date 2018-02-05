<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class M_Profil_Lapangan extends CI_Model{

        function selectAll()
		{
			$query = $this->db->query("Select * from f_profil_lapangan ORDER BY nomor ASC");
			return $query->result();
			//return $query->result();
		}

		function count_data(){
			$query = $this->db->query("SELECT * FROM f_profil_lapangan");
			return $query->num_rows();
		}

        function insert_news($data,$table){
            $this->db->insert($table,$data);
            //$query = $this->db->query("INSERT INTO f_profil_lapangan VALUES('17','$_GET[kode]','$_GET[nama]','$_GET[alamat]','$_GET[phone]','$_GET[city]')");
            //return $query->result();
        }

        function edit_data($where,$table){
			//$query = $this->db->query("Select * from f_profil_lapangan WHERE kode_lap='$where'");
			//return $query->result();
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

        function cek_data($where,$table){
            $this->db->where($where);
            $this->db->from($table);
            $query = $this->db->get();
            return $query->result();
        }
    }
?>
