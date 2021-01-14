<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class PkmModel extends CI_Model
{
    public function getPenelitianpkm()
    {
        
        return $this->db->query('Select Judul as judul, Peneliti as nama_dosen, Bidang_Penelitian as mata_kuliah, null as bentuk_integrasi, Tahun_Pendanaan as tahun from sip3mu')->result();
	}

	public function getPenelitianpkm2($departemen)
    {
        
        return $this->db->query('Select Judul as judul, Peneliti as nama_dosen, Bidang_Penelitian as mata_kuliah, null as bentuk_integrasi, Tahun_Pendanaan as tahun from sip3mu where Departemen Like "%'.$departemen.'%"')->result();
	}

	public function getPenelitiandtpsmhs()
    {
        
        return $this->db->query('SELECT Judul AS judul, Peneliti AS nama_dosen, NULL AS nama_mahasiswa, NULL AS tema_penelitian, Tahun_Pendanaan AS tahun FROM sip3mu')->result();
	}

	public function getPenelitiandtpstesis()
    {
        
        return $this->db->query('SELECT Judul AS judul, Peneliti AS nama_dosen, NULL AS nama_mahasiswa, NULL AS tema_penelitian, Tahun_Pendanaan AS tahun FROM sip3mu')->result();
	}
	
	

    
}  
