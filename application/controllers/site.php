<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('menu_banner');
		$this->load->view('main_left');
		$this->load->view('main_right');
		$this->load->view('footer');
	}
	
	public function tintuc()
	{
		$this->load->model('model_tintuc');
		$this->load->library("pagination");
		$config = array();
				
		$config["base_url"] = base_url() . "site/tintuc";
        $config["total_rows"] = $this->model_tintuc->demsoluong_ketqua();
        $config["per_page"] = 6;
        $config["uri_segment"] = 3;
		$config["next_link"]= 'Kế tiếp';
		$config["prev_link"]= 'Quay Lại';
 
        $this->pagination->initialize($config);
 
        $page = ($this->uri->segment($config["uri_segment"])) ? $this->uri->segment($config["uri_segment"]) : 0;
        $data["results"] = $this->model_tintuc->fetch_tintuc($config["per_page"], $page);
        $data["phantrang"] = $this->pagination->create_links();
		
		//$data['results']=$this->model_tintuc->getall();
		$this->load->view('header');
		$this->load->view('menu_banner');
		$this->load->view('tintuc',$data);
		$this->load->view('main_right');
		$this->load->view('footer');
		
	}
	public function chitiettin()
	{
		$this->load->model('model_tintuc');
		
		$id = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["results"] = $this->model_tintuc->get_noidung($id);
		$this->load->view('header');
		$this->load->view('menu_banner');
		$this->load->view('chitiettin',$data);
		$this->load->view('main_right');
		$this->load->view('footer');
		
	}
	
}
