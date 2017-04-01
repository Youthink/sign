<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->library('form_validation');
        $this->load->model('model');
    }

	public function index()
	{
		$this->load->view('index');
	}

	public function sign()
    {
    	$this->form_validation->set_rules('username', 'username', 'required',
            array('required' => '姓名不能为空'));
        $this->form_validation->set_rules('num', 'num', 'required',
            array('required' => '编号不能为空'));

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('welcome_message');
        }else{
            $this->model->M_addsign();
            redirect(site_url().'/sign/show');
        }
    }
	public function show($page = 'rank')
	    {
	    	$date = $this->input->post('date');
	    	if($date ==''){
	    		$date = date("Y-m-d");
	    	}
            $data['date'] = $date;
	        $data['rank'] = $this->model->get_rank($key=NULL);
	        $data['rank_items'] = $this->model->get_rank($key);
	        if (!file_exists(APPPATH.'/views/rank.php'))
	        {
	            show_404();
	        }
	            
	        $this->load->view($page,$data); 
	    }
}
