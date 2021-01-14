<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pkm extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('PkmModel');
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function getPenelitianpkm()
	{
		$data = $this->PkmModel->getPenelitianpkm();
		
		
		// Success
		header('Content-Type: application/json');

		echo json_encode([
			'success' => true,
			'message' => 'Semua dari Tabel Data',
			'data' => $data,
		]);
	}

	public function getPenelitianpkm2($departemen)
	{
		$data = $this->PkmModel->getPenelitianpkm2(str_replace("_"," ",$departemen));
		
		
		// Success
		header('Content-Type: application/json');

		echo json_encode([
			'success' => true,
			'message' => 'Semua dari Tabel Data',
			'data' => $data,
		]);
	}

	public function getPenelitiandtpsmhs()
	{
		$data = $this->PkmModel->getPenelitiandtpsmhs();
		
		
		// Success
		header('Content-Type: application/json');

		echo json_encode([
			'success' => true,
			'message' => 'Semua dari Tabel Data',
			'data' => $data,
		]);
	}

	public function getPenelitiandtpstesis()
	{
		$data = $this->PkmModel->getPenelitiandtpstesis();
		
		
		// Success
		header('Content-Type: application/json');

		echo json_encode([
			'success' => true,
			'message' => 'Semua dari Tabel Data',
			'data' => $data,
		]);
	}

	
}
