<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class M_Stok_Lapangan extends CI_Model{

        function selectAll()
		{
			$query = $this->db->query("Select * from f_stok_lapangan ORDER BY no ASC");
			return $query->result();
			//return $query->result();
		}

        function selectJoin()
        {
            $this->db->select('no,kode_stok,src_gambar,tipe,jenis,nama_lap');
            $this->db->from('f_stok_lapangan');
            $this->db->join('f_tipe_lapangan','f_tipe_lapangan.kode_tipe = f_stok_lapangan.kode_tipe','left');
            $this->db->join('f_jenis_lapangan','f_jenis_lapangan.kode_jenis = f_stok_lapangan.kode_jenis','left');
            $this->db->join('f_profil_lapangan','f_profil_lapangan.kode_lap = f_stok_lapangan.kode_lap','left');
            $this->db->order_by('no','asc');
            $query = $this->db->get();
            return $query->result();
        }

        function count_data(){
            $query = $this->db->query("SELECT * FROM f_stok_lapangan");
            return $query->num_rows();
        }

        function insert_data($data,$table){
            $this->db->insert($table,$data);
        }

        function edit_data($where,$table){
            $this->db->where($where);
            $this->db->select('kode_stok,src_gambar,f_stok_lapangan.kode_tipe,tipe,f_stok_lapangan.kode_jenis,jenis,f_stok_lapangan.kode_lap,nama_lap');
            $this->db->from($table);
            $this->db->join('f_tipe_lapangan','f_tipe_lapangan.kode_tipe = f_stok_lapangan.kode_tipe','left');
            $this->db->join('f_jenis_lapangan','f_jenis_lapangan.kode_jenis = f_stok_lapangan.kode_jenis','left');
            $this->db->join('f_profil_lapangan','f_profil_lapangan.kode_lap = f_stok_lapangan.kode_lap','left');
            $query = $this->db->get();
            return $query->result();
        }

        function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }

        function hapus_data($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }
    }
?>
