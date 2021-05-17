<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('crud_model');
	}
	
	public function index()
	{
	}
	
	function faq()
	{
		$page_data['page_name']		=	'faq';
		$page_data['page_title']	=	'Perguntas Frequentes';
		$this->load->view('frontend/index', $page_data);
		
	}
	
	function refundpolicy()
	{
		$page_data['page_name']		=	'refundpolicy';
		$page_data['page_title']	=	'Politica de reembolso';
		$this->load->view('frontend/index', $page_data);
		
	}
	
	function privacypolicy()
	{
		$page_data['page_name']		=	'privacypolicy';
		$page_data['page_title']	=	'Politica de privacidade';
		$this->load->view('frontend/index', $page_data);
		
	}
	
	


}
