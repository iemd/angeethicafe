<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPanel extends CI_Controller {

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


	 public function index()
		{
			//$this->load->view('common/header');
			$this->load->view('login');
		}


	public function Dasboard()
	{
		$this->load->model('DataModel');
		$sum = array();
		$date = date('Y-m-d');
		$data['editData'] = $this->DataModel->getData();
		$data['invoice'] = $this->DataModel->todayinvoicecount($date);
		$data['Totalinvoice'] = $this->DataModel->totalinvoicecount();
		$data['todayrevenue'] = $this->DataModel->todayrevenue($date);
		foreach($data['todayrevenue'] as $revenue){
			$sum[]=$todayrevenue = $revenue['payable_amount'];
		}
		$data['todayrevenue1'] = array_sum($sum);
		$data['totalrevenue'] = $this->DataModel->totalrevenue();
		$sum2 = array();
		foreach($data['totalrevenue'] as $totalrevenue){
			$sum2[]=$totalrevenue = $totalrevenue['payable_amount'];
		}
		$data['totalrevenue1'] = array_sum($sum2);
		$data['totalgst'] = $this->DataModel->totalgst();
		$sum3 = array();
		foreach($data['totalgst'] as $totalgst){
			$sum3[]=$totalgst = $totalgst['gst'];
		}
		$data['totalgst1'] = array_sum($sum3);
		//print_r($data['todayrevenue']);die;
		$this->load->view('common/header');
		$this->load->view('index1', $data);
	}

	public function CustomerList()
	{
		$this->load->model('DataModel');
		$data['Totalinvoice'] = $this->DataModel->totalinvoicecount();
		//print_r($data['Totalinvoice']);die;
		$this->load->view('common/header');
		$this->load->view('customer_list',$data);
	}

	public function adminloginAction()
	{

		//$name = $this->input->post('name');
		$username = $this->input->post('username');
		$password =  $this->input->post('password');
		//$email = $this->input->post('email');

		$remember = $this->session->set_userdata('remember_me', TRUE);

		$this->load->model('DataModel');
		$result = $this->DataModel->authenti($username, $password, $remember);


		if($result >0){
			redirect(base_url('AdminPanel/Dasboard'));
		}else{

			$message="<span style='color:red'><b>Access Denied Please Login First...</b></span>";
		}
		$this->session->set_flashdata('message', $message);
		redirect(base_url('AdminPanel'));
	}

	public function logOut()
	{
		$this->session->sess_destroy();
		redirect(base_url('AdminPanel'));
	}
}
