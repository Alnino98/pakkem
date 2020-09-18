<?php

/**
* 
*/
class M_laporan extends CI_controller
{
 public function pegawai()
 	{
 	return $this->db->query("SELECT * from pegawai a,jabatan b where a.id_jabatan=b.id_jabatan");
 	}	
 public function anggota()
 	{
 	return $this->db->query("SELECT * from pegawai a,jabatan b where a.id_jabatan=b.id_jabatan");
 	}	
 public function tpp($dari='',$sampai='')
    {
   return $this->db->query("SELECT * from pegawai a,jabatan b ,tpp c where a.id_jabatan=a.id_jabatan AND c.tgl between '$dari' AND '$sampai' 
  	group by c.id_pegawai");
    }   

}