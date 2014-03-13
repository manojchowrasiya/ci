<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// echo 'manoj';
		// echo 'manojhhhhhddd';//exit;
		// $this->load->model('profile_model');
		// $data['msg']=$this->profile_model->getMsg();
		// print_r($data);exit;
		$this->load->view('form_content');
	}
	public function selection()
	{
		// echo 'manoj';
		// echo 'manojhhhhhddd';//exit;
		// $this->load->model('profile_model');
		// $data['msg']=$this->profile_model->getMsg();
		// print_r($data);exit;
		// echo '<pre>';
		$data =array();
		$something = $this->input->post();
		foreach ($something as $index=>$value) {
			// print_r($index);
			// echo '------------';
			if(is_array($value)){
				$value=implode(',', $value);
			}
			$data[$index]=$value;

			// print_r($value);echo '<br/>';


		}
		// print_r($data);
		// exit;
			// print_r($something = $this->input->post());exit;
		$this->db->insert('selection', $data); 
		$this->load->view('form_content');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */