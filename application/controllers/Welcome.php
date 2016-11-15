<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		echo 'first prioject edite </br>';
		echo 'second prioject edite </br>';

		echo 'samaa new third  dumed edit 2</br>';
		$this->load->view('welcome_message');
	}
}
