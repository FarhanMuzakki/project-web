<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {

	 public function __construct()
        {
                parent::__construct();
				$this->load->model('m_kamar');
        }


	public function index()
	{
		$data['title'] = 'Data Kamar';
		$data['row'] = $this->m_kamar->getAll()->result();
		$this->load->view('backend/list_kamar',$data);
	}
	public function tambah()

	{
		if (isset($_POST['submit'])) {
			
			$this->load->library('upload');
			$this->upload->initialize($this->set_upload());
			$data = array();
			if ( !$this->upload->do_upload('gambar'))
             {
                        $error = array('error' => $this->upload->display_errors());
 
			 }else
                {
                    $fileData = array('upload_data');
                    $data['gambar'] = $fileData['file_name'];

                }
		}
		$data['tipe_kamar'] = $this->input->post('tipe_kamar');
		$data['jumlah_kamar'] = $this->input->post('jumlah');
		$data['jum_pesan'] = $this->input->post('jumlah');
		$data['harga'] = $this->input->post('harga');
		

		$this->db->insert('t_kamar', $data);
		$data['title'] = 'Data Kamar';
		$data['row'] = $this->m_kamar->getAll()->result();
		$this->load->view('backend/list_kamar',$data);
	}

	private function set_upload ()
	{ 
		{
			$config=array();
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '10000';
			$config['file_name'] = 'kamar-' . substr(md5(rand()), 0, 10);
			return $config;
		}
	}
	
	
	
}
 