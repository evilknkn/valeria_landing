<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller
{
	public function index()
	{	
		$data['contenido'] = 'page/me';
		$this->load->view('page/principal', $data);
	}
}