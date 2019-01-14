<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {

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
		$this->load->model('InventoryModel');
		$data['getData'] = $this->InventoryModel->getData();
		//print_r($data['getData']);die;
		
		$this->load->view('common/header');
		$this->load->view('inventory', $data);
	}
	
	public function saveInventory()
	{
		$data['pname'] = $this->input->post('pname');
		$data['qty'] = $this->input->post('qty');
		$data['unit'] = $this->input->post('unit');
		$data['price'] = $this->input->post('price');
		
		$data['date'] = date("d/m/Y");
		
		date_default_timezone_set('Asia/Kolkata');

		$data['time'] = date('g:i a');
		
		
		$insert =  $this->db->insert('inventory',$data);
		if($insert)
		{
			$message = $this->session->set_flashdata('message', 'Your product has been successfully added');
			redirect('/Inventory/', 'refresh', $message);
			
		}
		
	}
	
	public function stockin($inv_id=null)
	{
		$this->load->model('InventoryModel');
		$data['getEditUser'] = $this->InventoryModel->getEditUser($inv_id);
		//print_r($data['getEditUser']);die;
		
		$this->load->view('common/header');
		$this->load->view('stockIn', $data);
		
		
	}
	
	public function stockOut($inv_id=null)
	{
		$this->load->model('InventoryModel');
		$data['getEditUser'] = $this->InventoryModel->getEditUser($inv_id);
		//print_r($data['getEditUser']);die;
		
		$this->load->view('common/header');
		$this->load->view('Stockout', $data);
		
	}
	
	public function stockUpdate($inv_id=null)
	{
		$this->load->model('InventoryModel');
		$edit = $this->InventoryModel->getEditUser($inv_id);
		foreach($edit as $row){
			$quantity = $row['qty'];
		}
		$quantity;
		$data['pname'] = $this->input->post('pname');
		$quantity1 = $this->input->post('qty');
		$data['qty'] = $quantity + $quantity1;
		//$data['qty'] = $this->input->post('qty');
		$data['unit'] = $this->input->post('unit');
		$data['price'] = $this->input->post('price');
		
		$data['date'] = date("d/m/Y");
		
		date_default_timezone_set('Asia/Kolkata');

		$data['time'] = date('g:i a');
		
		
		$result = $this->InventoryModel->User($data, $inv_id);
		if($result)
		{
			$message = $this->session->set_flashdata('message', 'Your product has been successfully added');
			redirect('/Inventory/', 'refresh', $message);
			
		}
		
	}
	
	
	public function stockOutUpdate($inv_id=null)
	{
		$this->load->model('InventoryModel');
		$edit = $this->InventoryModel->getEditUser($inv_id);
		foreach($edit as $row){
			$quantity = $row['qty'];
		}
		$quantity;
		$data['pname'] = $this->input->post('pname');
		
		$data['qtyOut'] = $this->input->post('wqty');
		$quantity2 = $data['qtyOut'];
		$data['qty'] = $quantity - $quantity2;
		//$data['qty'] = $this->input->post('qty');
		$data['unit'] = $this->input->post('unit');
		 $data['price'] = $this->input->post('price');
		
		$data['date'] = date("d/m/Y");
		
		$data['dateOut'] = date("d/m/Y");
		
		date_default_timezone_set('Asia/Kolkata');

		$data['time'] = date('g:i a');
		
		
		$result = $this->InventoryModel->User($data, $inv_id);
		if($result)
		{
			$message = $this->session->set_flashdata('message', 'Your product has been successfully added');
			redirect('/Inventory/', 'refresh', $message);
			
		}
		
	}
	
	
	public function deleteProduct($inv_id=null)
	{
			$this->load->model('InventoryModel');
			$data = $this->InventoryModel->deleteUser($inv_id);
			
			$this->session->set_flashdata('message', $message);
			if($result){
				$message = "<span style='color:green'>Deleted Successfully</span>";
			}else{
				$message = "<span style='color:red'>Unable to delete</span>";				
			}
			$this->session->set_flashdata('message', $message);
			redirect(base_url('Inventory/'));
	}
	

	
	public function export_csv()
		{
		
		$this->load->dbutil(); // call db utility library
		$this->load->helper('download'); // call download helper
	 
		$query = $this->db->query("SELECT * FROM inventory LIMIT 500"); // whatever you want to export to CSV, just select in query
		
		$filename = 'inventory_details.csv'; // name of csv file to download with data
		force_download($filename, $this->dbutil->csv_from_result($query)); // download file
			 
		}
	
	
}
