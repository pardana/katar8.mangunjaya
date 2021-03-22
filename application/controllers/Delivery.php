<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delivery extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('lib_tcpdf/pdf');
        $this->load->model('M_delivery');
        $this->load->helper('download');
    }

    public function index(){
        $cek = $this->session->userdata('roles_id');
		
        if($cek == '3'){
            $data = array("content" => "backend/delivery/index");
            $cid  = $this->session->userdata('company_id');
			$data['pndg'] = $this->M_delivery->get_pndg($cid);
			$data['rqst'] = $this->M_delivery->get_rqst($cid);
			$data['bill'] = $this->M_delivery->get_bill($cid);
			$data['paid'] = $this->M_delivery->get_paid($cid);
			$data['rlsd'] = $this->M_delivery->get_rlsd($cid);
			$data['rjct'] = $this->M_delivery->get_rjct($cid);
            $this->load->view('backend/template/tema', $data);
        }else{
            header("location:".base_url());
        }
    }
    
    public function order(){
        $data = array("content" => "backend/delivery/order");
        $cid  = $this->session->userdata('company_id');

        $data['order']    = $this->M_delivery->get_delivery($cid);
        // $data['ff']         = $this->m_request->get_ff();
        // $data['sl']         = $this->m_request->get_sl();
        
        $this->load->view('backend/template/tema', $data);
    }
	
	public function view($id){
		$data = array("content" => "backend/delivery/view");
		$view = $this->M_delivery->get_view($id);
		
		foreach($view->result_array() as $row){
			$rqid 			= $row['rqid'];
			$tag			= $row['tag'];
			$notes_request	= $row['notes_request'];
			$notes_reject	= $row['notes_reject'];
			$status_id		= $row['status_id'];
			$dlid 			= $row['dlid'];
			$req_number 	= $row['req_number'];
			$bl_number		= $row['bl_number'];
			$amount			= $row['amount'];
			$co_name		= $row['co_name'];
			$sl_name		= $row['sl_name'];
			$bank_name		= $row['bank_name'];
			$file_proforma	= $row['file_proforma'];
			$file_invoice	= $row['file_invoice'];
			$file_do		= $row['file_do'];
			$expired_do		= $row['expired_do'];
			$created_date	= $row['created_date'];
		}

		$data['rqid']			= $rqid;
		$data['tag']			= $tag;
		$data['notes_request']	= $notes_request;
		$data['notes_reject']	= $notes_reject;
		$data['status_id']		= $status_id;
		$data['dlid']			= $dlid;
		$data['req_number'] 	= $req_number;
		$data['bl_number']		= $bl_number;
		$data['amount']			= $amount;
		$data['co_name']		= $co_name;
		$data['sl_name']		= $sl_name;
		$data['bank_name']		= $bank_name;
		$data['file_proforma']	= $file_proforma;
		$data['file_invoice']	= $file_invoice;
		$data['file_do']		= $file_do;
		$data['expired_do']		= $expired_do;
		$data['created_date']	= $created_date;
		
		$this->load->view('backend/template/tema', $data);
	}

	public function payment($dlid){
    	$data = array("content" => "backend/delivery/payment");
		$view = $this->M_delivery->get_payment($dlid);

		foreach($view->result_array() as $row){
			$rqid		= $row['rqid'];
			$dlid		= $row['dlid'];
			$req_number	= $row['req_number'];
			$bl_number	= $row['bl_number'];
			$co_name	= $row['co_name'];
			$sl_name	= $row['sl_name'];
			$amount		= $row['amount'];
		}

		$data['rqid']		= $rqid;
		$data['dlid']		= $dlid;
		$data['req_number'] = $req_number;
		$data['bl_number']	= $bl_number;
		$data['co_name']	= $co_name;
		$data['sl_name']	= $sl_name;
		$data['amount']		= $amount;

		$this->load->view('backend/template/tema', $data);
    }
    
    public function do_update(){
    	$username   	= $this->session->userdata('username');
    	$rqid 			= $_POST['rqid'];
    	$dlid 			= $_POST['dlid'];
        $notes_request	= $_POST['notes_request'];
		$tag			= $_POST['payment'];		
        $now        	= date("Y-m-d");
        
        $data1 = array(
            "notes_request" => $notes_request,
            "tag"			=> $tag,
            "status_id"     => 2,
            "updated_date"  => $now,
			"updated_by"	=> $username
        );
		
		$ins1 = $this->M_delivery->update_data('request', $data1, $rqid);
		
		$data2 = array(
			"updated_date"	=> $now,
			"updated_by"	=> $username
		);

		$ins2 = $this->M_delivery->update_data('delivery', $data2, $dlid);

		if ($ins2 != false) {//or any controll you could make in model method return
		    $msg = "<div class='alert alert-success'><i class = 'fa fa-info-circle'></i> Data successfully saving.</div>";
		} else {
		    $msg = "<div class='alert alert-danger'><i class = 'fa fa-info-circle'></i> Error inserting. Please try again.</div>";
		}

		$this->session->set_flashdata("msg", $msg);
		redirect('delivery/order');
    }

    public function checkout(){
    	$username   	= $this->session->userdata('username');
    	$rqid 			= $_POST['rqid'];
    	$dlid 			= $_POST['dlid'];
    	$bank_id		= $_POST['bank_id'];
        $now        	= date("Y-m-d");
        
        $data1 = array(
            "bank_id" 		=> $bank_id,
            "status_id"     => 4,
            "updated_date"  => $now,
			"updated_by"	=> $username
        );
		
		$ins1 = $this->M_delivery->update_data('request', $data1, $rqid);
		
		$data2 = array(
			"checkout"		=> 1,
			"updated_date"	=> $now,
			"updated_by"	=> $username
		);

		$ins2 = $this->M_delivery->update_data('delivery', $data2, $dlid);

		$this->session->set_flashdata('msg', 'Success Payment!');

		if ($ins2 != false) {//or any controll you could make in model method return
		    $msg = "<div class='alert alert-info'><i class = 'fa fa-info-circle'></i> Bill Payment saving.</div>";
		} else {
		    $msg = "<div class='alert alert-danger'><i class = 'fa fa-info-circle'></i> Error inserting. Please try again.</div>";
		}

		$this->session->set_flashdata("msg", $msg);
		redirect('delivery/order');
    }

    public function download($fileName = NULL) {   
	    if ($fileName) {
		    $file = realpath ( "download" ) . "\\" . $fileName;
		    // check file exists    
		    if (file_exists ( $file )) {
		     // get file content
		     $data = file_get_contents ( $file );
		     //force download
		     force_download ( $fileName, $data );
		    } else {
		     // Redirect to base url
		     redirect ( base_url () );
		    }
	    }
	}

	public function export_pdf(){
    	$cid  = $this->session->userdata('company_id');
    	
		$data['delivery'] = $this->M_delivery->get_delivery($cid);
		$this->load->view('backend/delivery/export_pdf', $data);
	}

	public function export_excel(){
		$cid  = $this->session->userdata('company_id');
		$date = date("Y-m-d");
		
		$data = array(
			'title' 	=> 'Laporan-Delivery-'.$date, 
			'delivery' 	=> $this->M_delivery->get_delivery($cid)
		);

		$this->load->view('backend/delivery/export_excel', $data);	
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
            "ff_reject"		=> 1,
            "updated_date"  => $now,
			"updated_by"	=> $username
        );
		
		$ins1 = $this->M_delivery->update_data('request', $data1, $rqid);

		$this->session->set_flashdata('msg', 'Success Reject!');

		if ($ins1 != false) {//or any controll you could make in model method return
		    $msg = "<div class='alert alert-info'><i class = 'fa fa-info-circle'></i> Reject saving.</div>";
		} else {
		    $msg = "<div class='alert alert-danger'><i class = 'fa fa-info-circle'></i> Error inserting. Please try again.</div>";
		}

		$this->session->set_flashdata("msg", $msg);
		redirect('delivery/order');
	}
}