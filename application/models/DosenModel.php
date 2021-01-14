<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class DosenModel extends CI_Model
{
    public function getAlldata()
    {
        $this->db->select('*');
        return $this->db->get('data')->result();
	}
	
	public function getDepartemen()
    {
		return $this->db->query('SELECT DISTINCT unit2 from data')->result();
	   
	}
	
	public function getProdibyDepartemen()
    {
		return $this->db->query('SELECT unit2,unit3 from data group by unit3 order by unit2')->result();
	   
	}

	public function getIjazah()
	{
		return $this->db->query('SELECT ijazah, COUNT(ijazah)  as jumlah FROM data group by ijazah')->result();
	}

	public function getTabel3a1()
	{
		return $this->db->query('
		SELECT unit,unit2,unit3,
		SUM(CASE WHEN ijazah = "S3" THEN 1 ELSE 0 END) AS doktor,
		SUM(CASE WHEN ijazah = "S2" THEN 1 ELSE 0 END) AS magister,
		SUM(CASE WHEN ijazah = "SP1" THEN 1 ELSE 0 END) AS profesi,
		SUM(CASE WHEN ijazah = "S3" THEN 1 ELSE 0 END +
		CASE WHEN ijazah = "S2" THEN 1 ELSE 0 END+
		CASE WHEN ijazah = "SP1" THEN 1 ELSE 0 END) AS jumlah
		FROM DATA WHERE unit3 IS NOT NULL GROUP BY unit2,unit3 ORDER BY unit2
		')->result();
	}

	public function getJumlahProfesor()
	{
		return $this->db->query('Select SUM(CASE WHEN Jabatan = "Guru Besar" THEN 1 ELSE 0 END) AS jumlah from data')->result();
	}

	public function getRasioDsnMhs()
	{
		return $this->db->query('
		SELECT Fakultas AS fakultas,
		Program_studi AS departemen,
		Jenjang AS jurusan,
		Jml_Dsn_TAini AS jumlah_dosen,
		Jml_Mhs_TAini AS jumlah_mahasiswa,
		Rasio_TAini AS rasio
		FROM rasio')->result();
	}

	public function getTabel3a2()
	{
		return $this->db->query('
		SELECT ijazah as pendidikan,
		SUM(CASE WHEN Jabatan = "Guru Besar" THEN 1 ELSE 0 END) AS guru_besar, 
		SUM(CASE WHEN Jabatan = "Lektor Kepala" THEN 1 ELSE 0 END) AS lektor_kepala, 
		SUM(CASE WHEN Jabatan = "lektor" THEN 1 ELSE 0 END) AS lektor, 
		SUM(CASE WHEN Jabatan = "Asisten Ahli" THEN 1 ELSE 0 END) AS asisten_ahli, 
		SUM(CASE WHEN Jabatan = "Tenaga Pengajar" THEN 1 ELSE 0 END) AS tenaga_pengajar,
		SUM(
			CASE WHEN Jabatan = "Guru Besar" THEN 1 ELSE 0 END +
			CASE WHEN Jabatan = "Lektor Kepala" THEN 1 ELSE 0 END +
			CASE WHEN Jabatan = "lektor" THEN 1 ELSE 0 END +
			CASE WHEN Jabatan = "Asisten Ahli" THEN 1 ELSE 0 END +
			CASE WHEN Jabatan = "Tenaga Pengajar" THEN 1 ELSE 0 END
			) AS jumlah
		from data where (ijazah="S2" and jenispegawai="Tenaga Dosen") or (ijazah="S3" and jenispegawai="Tenaga Dosen") group by ijazah order by ijazah 
		')->result();
	}

	public function getTabel3a4()
	{
		return $this->db->query('
		SELECT ijazah as pendidikan,
		SUM(CASE WHEN Jabatan = "Guru Besar" THEN 1 ELSE 0 END) AS guru_besar, 
		SUM(CASE WHEN Jabatan = "Lektor Kepala" THEN 1 ELSE 0 END) AS lektor_kepala, 
		SUM(CASE WHEN Jabatan = "lektor" THEN 1 ELSE 0 END) AS lektor, 
		SUM(CASE WHEN Jabatan = "Asisten Ahli" THEN 1 ELSE 0 END) AS asisten_ahli, 
		SUM(CASE WHEN Jabatan = "Tenaga Pengajar" THEN 1 ELSE 0 END) AS tenaga_pengajar,
		SUM(
			CASE WHEN Jabatan = "Guru Besar" THEN 1 ELSE 0 END +
			CASE WHEN Jabatan = "Lektor Kepala" THEN 1 ELSE 0 END +
			CASE WHEN Jabatan = "lektor" THEN 1 ELSE 0 END +
			CASE WHEN Jabatan = "Asisten Ahli" THEN 1 ELSE 0 END +
			CASE WHEN Jabatan = "Tenaga Pengajar" THEN 1 ELSE 0 END
			) AS jumlah
		from data where (ijazah="S2" and jenispegawai="Tenaga Kependidikan") or (ijazah="S3" and jenispegawai="Tenaga Kependidikan") group by ijazah order by ijazah 
		')->result();
	}

    
}  
