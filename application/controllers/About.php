<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class About extends CI_Controller {
	
		public function index()
		{
			$data = array(
        	'nama' => 'rendy rezkyan',
        	'nim' => '1541180172',
        	'no telpon' => '085735672161',
        	'alamat asal' => 'perum melati 1 blok 1-12 kota blitar',
        	'tanggal lahir' => '03-06-1997',
        	'jenis kelamin' => 'laki-laki',
        	'agama' => 'islam',
        	'kewarganegaraan' => 'indonesia',
        	'hobby' => 'membaca',
);
			$this->load->view('about');
		}
	
	}
	
	/* End of file About.php */
	/* Location: ./application/controllers/About.php */	




