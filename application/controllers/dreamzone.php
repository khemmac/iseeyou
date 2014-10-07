<?php
class Dreamzone extends CI_Controller {


	function __construct()
	{
		parent::__construct();

		//$this->load->library('form_validation');
		//$this->form_validation->set_error_delimiters('', '');
		$this->output->set_header('Cache-Control: no-cache, no-store, must-revalidate, max-age=0');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0', FALSE);
		$this->output->set_header('Cache-Control: max-age=-1281, public, must-revalidate, proxy-revalidate', FALSE);
		$this->output->set_header('Pragma: no-cache');
		
		$this->load->model('feeds_model','feeds');
		$this->load->model('v_feeds_model','v_feeds');
	}

	function index(){
		$this->v_feeds->order_by('id','DESC');
		$feeds = $this->v_feeds->get_all();
				
		$this->phxview->RenderView('dreamzone', array(
			'feeds'=>$feeds
		));
		$this->phxview->RenderLayout('default-inner');
	}
	
	function submit_feed(){
		
		$this->feeds->insert(array(
			'title'=>X::Request('title'),
			'location'=>X::Request('location'),
			'member_id'=>1
		));
		
		redirect(site_url('dreamzone'));
	}


}