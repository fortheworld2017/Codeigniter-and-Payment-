<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eventcarddesign extends CI_Controller {
	  
	public function index()
		{
			$this->load->library('header');
			$this->header->index();
			if(!$this->header->logged())
			{
				redirect(site_url('log_in'), 'refresh');
			}
			$data['username'] = "Welcome ".ucfirst(html_escape($this->session->userdata['logged_data']['username']));
			$data['log_out_button'] = LOG_OUT;
			$data['bread_crumb_title']="Desgin Even Card";
			$this->load->view('header_view', $data);
			$this->load->view('left_menu_view');
			$this->load->view('sub_menu_two_view');
			$this->load->view('eventcarddesign_view');
			$this->load->view('footer_view');
		}
}
