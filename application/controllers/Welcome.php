<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function aboutUs()
	{
		$this->load->view('about');
	}
	public function gallery()
	{
		$this->load->view('gallery');
	}
	public function doctor()
	{
		$this->load->view('dr-pawan-jain');
	}
	public function contactUs()
	{
		$this->load->view('contact');
	}
}
