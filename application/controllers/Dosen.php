<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('DosenModel');
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function getAllData()
	{
		$data = $this->DosenModel->getAlldata();
		
		
		// Success
		header('Content-Type: application/json');

		echo json_encode([
			'success' => true,
			'message' => 'Semua dari Tabel Data',
			'data' => $data,
		]);
	}

	public function getDepartemen() {
		$data = $this->DosenModel->getDepartemen();
		
		
		// Success
		header('Content-Type: application/json');

		echo json_encode([
			'success' => true,
			'message' => 'Data Departemen',
			'data' => $data,
		]);
	}

	public function getProdibyDepartemen() {
		$data = $this->DosenModel->getProdibyDepartemen();
		
		
		// Success
		header('Content-Type: application/json');

		echo json_encode([
			'success' => true,
			'message' => 'Data Prodi',
			'data' => $data,
		]);
	}

	public function getIjazah() {
		$data = $this->DosenModel->getIjazah();
		
		
		// Success
		header('Content-Type: application/json');

		echo json_encode([
			'success' => true,
			'message' => 'Data Ijazah',
			'data' => $data,
		]);
	}

	public function getTabel3a1() {
		$data = $this->DosenModel->getTabel3a1();
		
		
		// Success
		header('Content-Type: application/json');

		echo json_encode([
			'success' => true,
			'message' => 'Data Tabel 3a1',
			'data' => $data,
		]);
	}

	public function getJumlahProfesor()
	{
		$data = $this->DosenModel->getJumlahProfesor();
		
		
		// Success
		header('Content-Type: application/json');

		echo json_encode([
			'success' => true,
			'message' => 'Data Jumlah Profesor',
			'data' => $data,
		]);
	}

	public function getRasioDsnMhs()
	{
		$data = $this->DosenModel->getRasioDsnMhs();
		
		
		// Success
		header('Content-Type: application/json');

		echo json_encode([
			'success' => true,
			'message' => 'Data Rasio Dosen terhadap Mahasiswa',
			'data' => $data,
		]);
	}

	public function getTabel3a2() {
		$data = $this->DosenModel->getTabel3a2();
		
		
		// Success
		header('Content-Type: application/json');

		echo json_encode([
			'success' => true,
			'message' => 'Data Tabel 3a2',
			'data' => $data,
		]);
	}

	public function getTabel3a4() {
		$data = $this->DosenModel->getTabel3a4();
		
		
		// Success
		header('Content-Type: application/json');

		echo json_encode([
			'success' => true,
			'message' => 'Data Tabel 3a4',
			'data' => $data,
		]);
	}
}
