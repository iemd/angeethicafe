<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataModel extends CI_Model 
{

	
		public function getEditUser($prod_id)
			{
				
				$whereArray = array("prod_id"=>$prod_id);
				$query = $this->db->get_where('products',$whereArray);
				//echo $this->db->last_query();
				return $query->result_array();
				
			}
			
		public function todayinvoicecount($date)
			{
				
				$whereArray = array("pay_date"=>$date, "payment_status"=>"Done");
				$query = $this->db->get_where('billing',$whereArray);
				//echo $this->db->last_query();
				return $query->result_array();
				
			}
			
		public function todayrevenue($date)
			{
				
				$whereArray = array("pay_date"=>$date, "payment_status"=>"Done");
				$query = $this->db->get_where('billing',$whereArray);
				//echo $this->db->last_query();
				return $query->result_array();
				
			}
			
		public function totalrevenue()
			{
				
				$whereArray = array("payment_status"=>"Done");
				$query = $this->db->get_where('billing',$whereArray);
				//echo $this->db->last_query();
				return $query->result_array();
				
				
			}
			
		public function totalcustomer()
			{				
				$this->db->select('*');
				//$this->db->where('prod_name',$product);
				$this->db->from('userregister');			
				//$this->db->where('payment_status','Done');
				//$this->db->order_by("ID","desc");
				$query = $this->db->get();
				//print $this->db->last_query();die;
				$result = $query->result_array();								
				return $result;				
			}
			
		public function totalgst()
			{				
				$whereArray = array("payment_status"=>"Done");
				$query = $this->db->get_where('billing',$whereArray);
				//echo $this->db->last_query();
				return $query->result_array();		
			}
			
		public function totalinvoicecount()
			{
				$this->db->select('*');
				
				$this->db->from('billing');			
				$this->db->where('payment_status',"Done");
				$this->db->order_by("bill_id","asc");
				$query = $this->db->get();
				//print $this->db->last_query();die;
				$result = $query->result_array();				
				return $result;				
			}	
		
			
		public function payment_update($payment, $invoiceId)
			{
				$this->db->where('bill_id', $invoiceId);
				return $this->db->update('billing', $payment);
				
				/*return $this->db->get('register_form', $data);*/
				
			}
			
		public function invoicedetails() 
			{
				$this->db->select('*');
				//$this->db->where('prod_name',$product);
				$this->db->from('billing');			
				$this->db->where('payment_status','Done');
				//$this->db->order_by("ID","desc");
				$query = $this->db->get();
				//print $this->db->last_query();die;
				$result = $query->result_array();
				
				
				return $result;
			} 	
		
		public function getData($prod_id=null) 
			{
				$this->db->select('*');
				//$this->db->where('prod_name',$product);
				$this->db->from('products');
				
				//$this->db->where('post_status','publish');
				//$this->db->order_by("ID","desc");
				$query = $this->db->get();
				//print $this->db->last_query();die;
				$result = $query->result_array();
				
				
				return $result;
			} 
		
		public function getBillData($product=null) 
			{
				$this->db->select('*');
				$this->db->where('prod_name',$product);
				$this->db->from('products');
				
				//$this->db->where('post_status','publish');
				//$this->db->order_by("ID","desc");
				$query = $this->db->get();
				//print $this->db->last_query();die;
				$result = $query->result_array();
				
				
				return $result;
			} 
		
		public function getinvoice($bill_id=null) 
			{
				$this->db->select('*');
				
				$this->db->from('billing');
				$query = $this->db->get();
				//print $this->db->last_query();die;
				$result = $query->result_array();
				
				
				return $result;
			} 
		
		public function getcart($invoiceId=null) 
			{
				$this->db->select('*');
				$this->db->where('invoiceId',$invoiceId);
				$this->db->from('addcart');
				$this->db->join('billing', 'billing.bill_id = addcart.invoiceId');
				$query = $this->db->get();
				//print $this->db->last_query();die;
				$result = $query->result_array();
				
				
				return $result;
			} 
		
		public function emailCheck($email)
			{		
				$this->db->where('email',$email);
				$query = $this->db->get('userregister');
				if ($query->num_rows() > 0){
					return true;
					}
					else{
						return false;
					}
				}
		
		public function getCategory($prod_id=null) 
			{
				$this->db->select('*');
				$this->db->from('category');
				
				//$this->db->where('post_status','publish');
				//$this->db->order_by("ID","desc");
				$query = $this->db->get();
				$result = $query->result_array();
				
				return $result;
			} 
		
		
		public function shorba($prod_id=null) 
			{
				$this->db->select('*');
				$this->db->from('products');
				
				$this->db->where('category','1');
				$this->db->order_by("prod_id","desc");
				$query = $this->db->get();
				$result = $query->result_array();
				
				return $result;
			} 
		
		public function starter($prod_id=null) 
			{
				$this->db->select('*');
				$this->db->from('products');
				
				$this->db->where('category','2');
				$this->db->order_by("prod_id","desc");
				$query = $this->db->get();
				$result = $query->result_array();
				
				return $result;
			} 
		
		public function salads($prod_id=null) 
			{
				$this->db->select('*');
				$this->db->from('products');
				
				$this->db->where('category','3');
				$this->db->order_by("prod_id","desc");
				$query = $this->db->get();
				$result = $query->result_array();
				
				return $result;
			} 
		
		
		public function MainCourse($prod_id=null) 
			{
				$this->db->select('*');
				$this->db->from('products');
				
				$this->db->where('category','4');
				$this->db->order_by("prod_id","desc");
				$query = $this->db->get();
				$result = $query->result_array();
				
				return $result;
			} 
		
		public function RiceRoti($prod_id=null) 
			{
				$this->db->select('*');
				$this->db->from('products');
				
				$this->db->where('category','5');
				$this->db->order_by("prod_id","desc");
				$query = $this->db->get();
				$result = $query->result_array();
				
				return $result;
			} 
		
		
		public function ChineseStarter($prod_id=null) 
			{
				$this->db->select('*');
				$this->db->from('products');
				
				$this->db->where('category','6');
				$this->db->order_by("prod_id","desc");
				$query = $this->db->get();
				$result = $query->result_array();
				
				return $result;
			} 
		
		public function Chinese($prod_id=null) 
			{
				$this->db->select('*');
				$this->db->from('products');
				
				$this->db->where('category','7');
				$this->db->order_by("prod_id","desc");
				$query = $this->db->get();
				$result = $query->result_array();
				
				return $result;
			} 
		
		public function deleteUser($prod_id)
			{
				//$data = $this->db->get('register_form');
				$whereArray = array("prod_id"=>$prod_id);
				//$query = $this->db->get_where('register_form',$whereArray);
				$query = $this->db->delete('products',$whereArray);
				//$this->db->last_query();
				if ($query) {
					return true;
				
				} else {
					return false;
					}

			}
			
			
		public function deletecart($cart_id)
			{
				//$data = $this->db->get('register_form');
				$whereArray = array("cart_id"=>$cart_id);
				//$query = $this->db->get_where('register_form',$whereArray);
				$query = $this->db->delete('addcart',$whereArray);
				//$this->db->last_query();
				if ($query) {
					return true;
				
				} else {
					return false;
					}

			}
		
		public function User($data, $prod_id)
			{
				$this->db->where('prod_id', $prod_id);
				return $this->db->update('products', $data);
				/*return $this->db->get('register_form', $data);*/
				
			}
		
		public function authenti($username,$password)
			{
				$array = array("username"=>$username,"password"=>md5($password));
				$query = $this->db->get_where('admin',$array);
				//echo $this->db->last_query();
				
				$count = $query->num_rows();
				$result = $query->result_array();
				//print_r($result); die;
				if($count > 0){
					$userdetails = array("ID"=>$result[0]['ID'],'loggedIn'=>true,'type'=>'Admin');
					$this->session->set_userdata($userdetails);
				}else{
					$userdetails = array("ID"=>'','loggedIn'=>false, 'type'=>'');
					$this->session->unset_userdata($userdetails);
				}
				return $count;
			}
		
		public function Userauth($email,$Password)
			{
				$this->db->select('*');
				$array = array("email"=>$email,"Password"=>$Password);
				$query = $this->db->get_where('userregister',$array);
				//echo $this->db->last_query();die;
				
				$count = $query->num_rows();
				$result = $query->result_array();
				//print_r($result); die;
				if($count > 0){
					$userdetails = array("id"=>$result[0]['id'],'loggedIn'=>true,'type'=>'Admin');
					$this->session->set_userdata($userdetails);
				}else{
					$userdetails = array("id"=>'','loggedIn'=>false, 'type'=>'');
					$this->session->unset_userdata($userdetails);
				}
				return $count;
			}
			
		public function loadUserProfile($id)
			{		
				$array = array("id"=>$id);
				$query = $this->db->get_where('userregister',$array);
				$result = $query->result_array();
				return $result;
			}
			
}
?>