<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Billing extends CI_Controller {

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
	public function index($prod_id=null)
	{
		$this->load->model('DataModel');
		$data['getCategory'] = $this->DataModel->getCategory($prod_id);
		$data['editData'] = $this->DataModel->getData($prod_id);

		$data['bill'] = $this->DataModel->getinvoice($prod_id);
		$this->load->view('common/header');
		$this->load->view('billing', $data);
	}

	public function InvoiceGenerate()
	{
			$data['Invoice'] = $this->input->post('Invoice');
			$data['date'] = $this->input->post('date');
			$data['Mobile'] = $this->input->post('Mobile');
			$data['Name'] = $this->input->post('Name');
			$data['Address'] = $this->input->post('Address');

			$insert =  $this->db->insert('billing',$data);
			$return = $this->db->insert_id();
		  $this->session->set_userdata('invoiceData', $return);

			if($insert){
			$message = $this->session->set_flashdata('message', 'Generated');
			redirect(base_url('Billing/AddItem'), 'refresh', $message);
			}

	}

	public function DeleteBill($cart_id=null)
	{

		$insert['invoiceId'] = $this->session->userdata('invoiceData');
		$invoiceId = $insert['invoiceId'];
		$this->load->model('DataModel');

		$deletecart = $this->DataModel->deletecart($cart_id);
			if($deletecart){
				$message = "<span style='color:green'>Deleted Successfully</span>";
			}else{
				$message = "<span style='color:red'>Unable to delete</span>";
			}
			$this->session->set_flashdata('message', $message);
			redirect(base_url('Billing/AddItem'));


	}

	public function AddItem($product=null)
	{

		$insert['invoiceId'] = $this->session->userdata('invoiceData');
		$invoiceId = $insert['invoiceId'];
		$this->load->model('DataModel');
		$data['getCategory'] = $this->DataModel->getCategory();
		$data['editData'] = $this->DataModel->getData();
		$data['getcart'] = $this->DataModel->getcart($invoiceId);
		//print_r($data['fetchData']);die;
		$this->load->view('common/header');
		$this->load->view('addItem', $data);

	}

	public function displayItem($product=null)
	{
		$data['product'] = $this->input->post('product');
		$product = $data['product'];
		$data['quantity'] = $this->input->post('quantity');

		$this->load->model('DataModel');
		$data['getCategory'] = $this->DataModel->getCategory();
		//$data['editData'] = $this->DataModel->getData();
		$data['fetchData'] = $this->DataModel->getBillData($product);
		$data['bill'] = $this->DataModel->getinvoice();
		if(!empty($data['fetchData'])){
		foreach($data['fetchData'] as $row){
			$insert['invoiceId'] = $this->session->userdata('invoiceData');
			$invoiceId = $insert['invoiceId'];
			$insert['prod_id'] = $row['prod_id'];
			$insert['prod_name'] = $row['prod_name'];
			$insert['quantity'] = $this->input->post('quantity');
			$insert['base_price'] = $row['base_price'];
			//$insert['discount'] = $row['discount'];
			$insert['delivery_time'] = $row['delivery_time'];
		}
		$insert1 =  $this->db->insert('addcart',$insert);
		if($insert1){
			//echo $invoiceId;die;


			redirect(base_url('Billing/AddItem'), 'refresh');

		}

		}


	}

	public function update_billing()
	{
		$this->load->helper('num_helper');
		$insert['invoiceId'] = $this->session->userdata('invoiceData');
		$invoiceId = $insert['invoiceId'];
		$this->load->model('DataModel');
		$data['getCategory'] = $this->DataModel->getCategory();
		$data['editData'] = $this->DataModel->getData();
		$payment['payment_status'] = "Done";
		$payment['payment_mode'] = $this->input->post('selectSm');
		$payment['payable_amount'] = $this->input->post('payable_amount');
		$payment['grandtotal'] = $this->input->post('grandtotal');
		$payment['gst'] = $this->input->post('gst');
		$payment['discount'] = $this->input->post('discount');
		$payment['pay_date'] = date('y-m-d');
		date_default_timezone_set('Asia/Kolkata');
		$currentDateTime=date('m/d/Y H:i:s');
		$newDateTime = date('h:i A', strtotime($currentDateTime));
		$payment['pay_time'] = $newDateTime;
        $data['getcart'] = $this->DataModel->getcart($invoiceId);
		$payment = $this->DataModel->payment_update($payment, $invoiceId);
		//print_r($payment);die;
		//$this->load->view('common/header');
		if($payment > 0){
		redirect(base_url('Billing/invoice'), 'refresh');
		//$this->load->view('invoice', $data, 'refresh');
		}

	}


	public function Invoice()
	{
		$this->load->helper('num_helper');
		$insert['invoiceId'] = $this->session->userdata('invoiceData');
		$invoiceId = $insert['invoiceId'];
		$this->load->model('DataModel');
		$data['getCategory'] = $this->DataModel->getCategory();
		$data['editData'] = $this->DataModel->getData();

        $data['getcart'] = $this->DataModel->getcart($invoiceId);

		//print_r($payment);die;
		//$this->load->view('common/header');

		//redirect(base_url('Billing/invoice'), 'refresh');
		$this->load->view('invoice', $data, 'refresh');


	}

	public function InvoiceView()
	{

		//$insert['invoiceId'] = $this->session->userdata('invoiceData');
		//$invoiceId = $insert['invoiceId'];
		$this->load->model('DataModel');
		$data['getCategory'] = $this->DataModel->getCategory();
		$data['editData'] = $this->DataModel->getData();
		$data['invoice_details'] = $this->DataModel->invoicedetails();
		//print_r($data['invoice_details']);die;

		$this->load->view('common/header');
		$this->load->view('invoice_view', $data);

	}

	public function InvoicePrint($bill_id=null)
	{
		$this->load->helper('num_helper');
		$insert['invoiceId'] = $this->session->userdata('invoiceData');
		$invoiceId = $insert['invoiceId'];
		$this->load->model('DataModel');
		$data['getCategory'] = $this->DataModel->getCategory();
		$data['editData'] = $this->DataModel->getData();
		$data['invoice_details'] = $this->DataModel->invoicedetails();
		//print_r($data['invoice_details']);die;
		$data['getcart'] = $this->DataModel->getcart($bill_id);
		//$this->load->view('common/header');
		$this->load->view('invoice', $data);

	}




}
