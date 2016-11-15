<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		echo 'first prioject edite';
		echo 'first prioject edite 22';
		echo 'sama';
		$this->load->view('welcome_message');
	}
}
