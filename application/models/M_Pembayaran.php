<?php
  class M_Pembayaran extends CI_Model
  {
    function data_pembayaran()
    {
      $query = $this->db->query("SELECT * FROM kelas c, spp d, siswa a INNER JOIN pembayaran b ON a.nisn = b.nisn WHERE c.id_kelas = a.id_kelas AND a.id_spp = d.id_spp");
      return $query;
    }
  }