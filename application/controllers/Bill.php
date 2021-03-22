<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bill extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('lib_tcpdf/pdf');
        $this->load->model('M_bill');
    }

    public function index(){
        $cek = $this->session->userdata('roles_id');
		
        if($cek == '4'){
            $data = array("content" => "backend/bill/index");
            $cid  = $this->session->userdata('company_id');
			$data['pndg'] = $this->M_bill->get_pndg($cid);
			$data['rqst'] = $this->M_bill->get_rqst($cid);
			$data['bill'] = $this->M_bill->get_bill2($cid);
			$data['paid'] = $this->M_bill->get_paid($cid);
			$data['rjct'] = $this->M_bill->get_rjct($cid);
			$data['rlsd'] = $this->M_bill->get_rlsd($cid);
            $this->load->view('backend/template/tema', $data);
        }else{
            header("location:".base_url());
        }
    }

    public function payment(){
        $data = array("content" => "backend/bill/payment");
        $cid  = $this->session->userdata('company_id');

        $data['order']    = $this->M_bill->get_bill($cid);
        $this->load->view('backend/template/tema', $data);
    }

    public function view($id){
		$data = array("content" => "backend/bill/view");
		$view = $this->M_bill->get_view($id);
		
		foreach($view->result_array() as $row){
			$rqid 			= $row['rqid'];
			$status_id		= $row['status_id'];
			$tag			= $row['tag'];
			$notes_request	= $row['notes_request'];
			$notes_reject	= $row['notes_reject'];
			$dlid 			= $row['dlid'];
			$amount			= $row['amount'];
			$req_number 	= $row['req_number'];
			$bl_number		= $row['bl_number'];
			$co_name		= $row['co_name'];
			$ff_name		= $row['ff_name'];
			$bank_name		= $row['bank_name'];
			$file_proforma	= $row['file_proforma'];
			$file_invoice	= $row['file_invoice'];
			$file_do		= $row['file_do'];
			$expired_do		= $row['expired_do'];
			$created_date	= $row['created_date'];
		}


		$data['rqid']			= $rqid;
		$data['status_id']		= $status_id;
		$data['tag']			= $tag;
		$data['notes_request']	= $notes_request;
		$data['notes_reject']	= $notes_reject;
		$data['dlid']			= $dlid;
		$data['amount']			= $amount;
		$data['req_number'] 	= $req_number;
		$data['bl_number']		= $bl_number;
		$data['co_name']		= $co_name;
		$data['ff_name']		= $ff_name;
		$data['bank_name']		= $bank_name;
		$data['file_proforma']	= $file_proforma;
		$data['file_invoice']	= $file_invoice;
		$data['file_do']		= $file_do;
		$data['expired_do']		= $expired_do;
		$data['created_date']	= $created_date;
		
		$this->load->view('backend/template/tema', $data);
	}

	public function do_update(){
    	$username   	= $this->session->userdata('username');

    	$btn_bill		= $_POST['btn_bill'];
    	$rqid 			= $_POST['rqid'];
    	$dlid 			= $_POST['dlid'];

    	$now        	= date("Y-m-d");
    	$dir_proforma	= "assets/dir_proforma/";
    	$dir_invoice	= "assets/dir_invoice/";
    	$dir_do			= "assets/dir_do/";

        if($btn_bill == 1){
        	//REJECT BUTTON
        	// var_dump("Masuk Reject");
        	// exit;

        }elseif($btn_bill == 2){
        	//APPROVE BUTTON
        	// var_dump("Masuk Approve");
        	// exit;

	        $amount			= $_POST['amount'];

			$file_proforma	= $_FILES['file_proforma']['name'];

			if(is_uploaded_file($_FILES['file_proforma']['tmp_name'])){
				$cek = move_uploaded_file($_FILES['file_proforma']['tmp_name'], $dir_proforma.$file_proforma);
			}

			$a = str_replace(".", "", $amount);
	        $b = str_replace(",", "", $a);

        	$data1 = array(
	            "status_id"     => 3,
	            "updated_date"  => $now,
				"updated_by"	=> $username
	        );
			
			$ins1 = $this->M_bill->update_data('request', $data1, $rqid);
			
			$data2 = array(
				"amount"		=> $b,
				"file_proforma"	=> $file_proforma,
				"updated_date"	=> $now,
				"updated_by"	=> $username
			);

			$ins2 = $this->M_bill->update_data('delivery', $data2, $dlid);

        }else{
        	//SAVE BUTTON

        	$expired_do1 	= $_POST['expired_do'];
			$expired_do2 	= str_replace('/', '-', $expired_do1);
			$expired_do3	= date('Y-m-d', strtotime($expired_do2));

        	$file_invoice	= $_FILES['file_invoice']['name'];
        	$file_do		= $_FILES['file_do']['name'];

			if(is_uploaded_file($_FILES['file_invoice']['tmp_name'])){
				$cek1 = move_uploaded_file($_FILES['file_invoice']['tmp_name'], $dir_invoice.$file_invoice);
			}

			if(is_uploaded_file($_FILES['file_do']['tmp_name'])){
				$cek2 = move_uploaded_file($_FILES['file_do']['tmp_name'], $dir_do.$file_do);
			}

			$data1 = array(
	            "status_id"     => 6,
	            "updated_date"  => $now,
				"updated_by"	=> $username
	        );
			
			$ins1 = $this->M_bill->update_data('request', $data1, $rqid);

			$data2 = array(
				"expired_do"	=> $expired_do3,
				"file_invoice"	=> $file_invoice,
				"file_do"		=> $file_do,
				"updated_date"	=> $now,
				"updated_by"	=> $username
			);

			$ins2 = $this->M_bill->update_data('delivery', $data2, $dlid);
        }

		if ($ins2 != false) {//or any controll you could make in model method return
		    $msg = "<div class='alert alert-success'><i class = 'fa fa-info-circle'></i> Data successfully saving.</div>";
		} else {
		    $msg = "<div class='alert alert-danger'><i class = 'fa fa-info-circle'></i> Error inserting. Please try again.</div>";
		}

		$this->session->set_flashdata("msg", $msg);
		redirect('bill/payment');
    }

    public function export_pdf(){
    	$cid  = $this->session->userdata('company_id');
    	
		$data['bill'] = $this->M_bill->get_bill($cid);
		$this->load->view('backend/bill/export_pdf', $data);
	}

	public function export_excel(){
		$cid  = $this->session->userdata('company_id');
		$date = date("Y-m-d");
		
		$data = array(
			'title' 	=> 'Laporan-Bill-'.$date, 
			'bill' 	=> $this->M_bill->get_bill($cid)
		);

		$this->load->view('backend/bill/export_excel', $data);	
	}

	public function reject(){
		$cid  			= $this->session->userdata('company_id');
		$username   	= $this->session->userdata('username');
		$now 			= date("Y-m-d");
		$rqid 			= $_POST['rqid'];
    	$dlid 			= $_POST['dlid'];
		$notes_reject 	= $_POST['notes_reject'];

		$data1 = array(
            "notes_reject"	=> $notes_reject,
            "status_id"     => 5,
            "ff_reject"		=> 0,
            "updated_date"  => $now,
			"updated_by"	=> $username
        );
		
		$ins1 = $this->M_bill->update_data('request', $data1, $rqid);

		$this->session->set_flashdata('msg', 'Success Reject!');

		if ($ins1 != false) {//or any controll you could make in model method return
		    $msg = "<div class='alert alert-info'><i class = 'fa fa-info-circle'></i> Reject saving.</div>";
		} else {
		    $msg = "<div class='alert alert-danger'><i class = 'fa fa-info-circle'></i> Error inserting. Please try again.</div>";
		}

		$this->session->set_flashdata("msg", $msg);
		redirect('bill/payment');
	}
}