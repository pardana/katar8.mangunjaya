<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('lib_tcpdf/pdf');
        $this->load->model('M_request');
    }

    public function index(){
        $cek = $this->session->userdata('roles_id');
		
        if($cek == '2'){
            $data = array("content" => "backend/request/index");
            $cid  = $this->session->userdata('company_id');
			$data['pndg'] = $this->M_request->get_pndg($cid);
			$data['rqst'] = $this->M_request->get_rqst($cid);
			$data['bill'] = $this->M_request->get_bill($cid);
			$data['paid'] = $this->M_request->get_paid($cid);
			$data['rlsd'] = $this->M_request->get_rlsd($cid);
			$data['rjct'] = $this->M_request->get_rjct($cid);
            $this->load->view('backend/template/tema', $data);
        }else{
            header("location:".base_url());
        }
    }
    
    public function lading(){
        $data = array("content" => "backend/request/lading");
        $cid  = $this->session->userdata('company_id');

        $data['request']    = $this->M_request->get_request($cid);
        $data['ff']         = $this->M_request->get_ff();
        $data['sl']         = $this->M_request->get_sl();
        
        $this->load->view('backend/template/tema', $data);
    }
	
	public function view($id){
		$data = array("content" => "backend/request/view");
		$view = $this->M_request->get_view($id);
		
		foreach($view->result_array() as $row){
			$req_number 	= $row['req_number'];
			$status_id		= $row['status_id'];
			$notes_reject	= $row['notes_reject'];
			$bl_number		= $row['bl_number'];
			$ff_name		= $row['ff_name'];
			$sl_name		= $row['sl_name'];
			$expired_do		= $row['expired_do'];
			$created_date	= $row['created_date'];
		}

		$data['req_number'] 	= $req_number;
		$data['status_id'] 		= $status_id;
		$data['notes_reject']	= $notes_reject;
		$data['bl_number']		= $bl_number;
		$data['ff_name']		= $ff_name;
		$data['sl_name']		= $sl_name;
		$data['expired_do']		= $expired_do;
		$data['created_date']	= $created_date;
		
		$this->load->view('backend/template/tema', $data);
	}
    
    public function do_add(){
        $req_number = $_POST['req_number'];
        $bl_number	= $_POST['bl_number'];
		$ff_name	= $_POST['ff_name'];
		$sl_name	= $_POST['sl_name'];
        $now        = date("Y-m-d");
		$company_id = $this->session->userdata('company_id');
		$username   = $this->session->userdata('username');
        
        $data1 = array(
            "req_number"    => $req_number,
            "company_id"	=> $company_id,
            "status_id"     => 1,
            "ff_reject"		=> 0,
            "created_date"  => $now,
			"created_by"	=> $username
        );
		
		$ins1 = $this->M_request->insert_data('request', $data1);
		
		$dataff = $this->M_request->search_ff($ff_name);
		$datasl = $this->M_request->search_sl($sl_name);
		foreach($dataff->result_array() as $row){$idff = $row['id_company'];}
		foreach($datasl->result_array() as $row){$idsl = $row['id_company'];}

		$data2 = array(
			"bl_number"		=> $bl_number,
			"ffid"			=> $idff,
			"ff_name"		=> $ff_name,
			"slid"			=> $idsl,
			"sl_name"		=> $sl_name,
			"request_id"	=> $ins1, //add last insert id table request
			"created_date"	=> $now,
			"created_by"	=> $username
		);
		
		$ins2 = $this->M_request->insert_data('delivery', $data2);

		if ($ins2 != false) {//or any controll you could make in model method return
		    $msg = "<div class='alert alert-success'><i class = 'fa fa-info-circle'></i> Data successfully inserted.</div>";
		} else {
		    $msg = "<div class='alert alert-danger'><i class = 'fa fa-info-circle'></i> Error inserting. Please try again.</div>";
		}

		$this->session->set_flashdata("msg", $msg);
		redirect('Request/lading');
    }

    public function export_pdf(){
    	$cid  = $this->session->userdata('company_id');
    	
		$data['request'] = $this->M_request->get_request($cid);
		$data['ff'] 	 = $this->M_request->get_ff();
		$data['sl'] 	 = $this->M_request->get_sl();

		$this->load->view('backend/request/export_pdf', $data);
	}

	public function export_excel(){
		$cid  = $this->session->userdata('company_id');
		$date = date("Y-m-d");
		
		$data = array(
			'title' 	=> 'Laporan-Request-'.$date, 
			'request' 	=> $this->M_request->get_request($cid),
			'ff'        => $this->M_request->get_ff(),
			'sl'		=> $this->M_request->get_sl()
		);

		$this->load->view('backend/request/export_excel', $data);	
	}
}