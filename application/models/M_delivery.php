<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_delivery extends CI_Model {

    public function get_delivery($cid){
        $this->db->select("rq.id AS rqid, dl.bl_number, dl.amount, dl.id AS dlid, rq.req_number, mc.company_name AS co_name, dl.sl_name, ms.status_desc, rq.created_date");
        $this->db->from("request rq");
		$this->db->join("delivery dl", "dl.request_id = rq.id", "LEFT");
        $this->db->join("m_status ms", "ms.id_status = rq.status_id", "LEFT");
        $this->db->join("m_company mc", "mc.id_company = rq.company_id", "LEFT");
        $this->db->order_by('req_number', 'DESC');
        $this->db->where("dl.ffid", $cid);

        $query = $this->db->get();
        return $query;
    }
	
	public function get_view($id){
        $this->db->select("rq.id AS rqid, rq.tag, rq.notes_request, rq.status_id, rq.notes_reject, dl.bl_number, dl.file_proforma, dl.amount, dl.id AS dlid, rq.req_number, mc.company_name AS co_name, dl.sl_name, mb.bank_name, ms.status_desc, dl.expired_do, dl.file_invoice, dl.file_do, rq.created_date");
        $this->db->from("request rq");
        $this->db->join("delivery dl", "dl.request_id = rq.id", "LEFT");
        $this->db->join("m_status ms", "ms.id_status = rq.status_id", "LEFT");
        $this->db->join("m_company mc", "mc.id_company = rq.company_id", "LEFT");
        $this->db->join("m_bank mb", "mb.id = rq.bank_id", "LEFT");
        $this->db->order_by('req_number', 'DESC');
        $this->db->where("dl.id", $id);

        $query = $this->db->get();
        return $query;
    }

    public function get_payment($dlid){
        $this->db->select("rq.id AS rqid, dl.bl_number, dl.id AS dlid, rq.req_number, mc.company_name AS co_name, dl.sl_name, dl.amount");
        $this->db->from("request rq");
        $this->db->join("delivery dl", "dl.request_id = rq.id", "LEFT");
        $this->db->join("m_status ms", "ms.id_status = rq.status_id", "LEFT");
        $this->db->join("m_company mc", "mc.id_company = rq.company_id", "LEFT");
        $this->db->where("dl.id", $dlid);

        $query = $this->db->get();
        return $query;
    }

    public function get_ff(){
		$this->db->select("mu.roles_id, mu.company_id, mc.company_name");
        $this->db->from("m_user mu");
		$this->db->join("m_company mc", "mc.id_company = mu.company_id", "LEFT");
        $this->db->where("mu.roles_id = '3'");

        $query = $this->db->get();
        return $query;
    }
    
    public function get_sl(){
        $this->db->select("mu.roles_id, mu.company_id, mc.company_name");
        $this->db->from("m_user mu");
		$this->db->join("m_company mc", "mc.id_company = mu.company_id", "LEFT");
        $this->db->where("mu.roles_id = '4'");

        $query = $this->db->get();
        return $query;
    }

    public function search_ff($name){
    	$this->db->select("mc.id_company, mc.company_name");
        $this->db->from("m_company mc");
        $this->db->where("mc.company_name", $name);

        $query = $this->db->get();
        return $query;	
    }

    public function search_sl($name){
    	$this->db->select("mc.id_company, mc.company_name");
        $this->db->from("m_company mc");
        $this->db->where("mc.company_name", $name);

        $query = $this->db->get();
        return $query;	
    }

    public function insert_data($table, $data) {
        $temp = $this->db->insert($table, $data);
        return $this->db->insert_id(); //return last insert id
    }

    public function update_data($table, $data, $id) {
        $this->db->where('id', $id);
        $temp = $this->db->update($table, $data);
        return $temp;
    }

    public function delete_data($table, $where) {
        $temp = $this->db->delete($table, $where);
        return $temp;
    }
	
	public function get_pndg($cid){
		$this->db->select("count(rq.status_id) as status_id");
		$this->db->from("request rq");
        $this->db->join("delivery dl", "dl.request_id = rq.id", "LEFT");
		$this->db->where("rq.status_id = '1'");
        $this->db->where("dl.ffid", $cid);

		$query = $this->db->get();

		if ($query->num_rows() > 0){	
			foreach ($query->result_array() as $row){
				return $row['status_id'];
			}
        }else{
            return FALSE;
        }
	}
	
	public function get_rqst($cid){
		$this->db->select("count(rq.status_id) as status_id");
        $this->db->from("request rq");
        $this->db->join("delivery dl", "dl.request_id = rq.id", "LEFT");
        $this->db->where("rq.status_id = '2'");
        $this->db->where("dl.ffid", $cid);

		$query = $this->db->get();

		if ($query->num_rows() > 0){	
			foreach ($query->result_array() as $row){
				return $row['status_id'];
			}
        }else{
            return FALSE;
        }
	}
	
	public function get_bill($cid){
		$this->db->select("count(rq.status_id) as status_id");
        $this->db->from("request rq");
        $this->db->join("delivery dl", "dl.request_id = rq.id", "LEFT");
        $this->db->where("rq.status_id = '3'");
        $this->db->where("dl.ffid", $cid);

		$query = $this->db->get();

		if ($query->num_rows() > 0){	
			foreach ($query->result_array() as $row){
				return $row['status_id'];
			}
        }else{
            return FALSE;
        }
	}
	
	public function get_paid($cid){
		$this->db->select("count(rq.status_id) as status_id");
        $this->db->from("request rq");
        $this->db->join("delivery dl", "dl.request_id = rq.id", "LEFT");
        $this->db->where("rq.status_id = '4'");
        $this->db->where("dl.ffid", $cid);

		$query = $this->db->get();

		if ($query->num_rows() > 0){	
			foreach ($query->result_array() as $row){
				return $row['status_id'];
			}
        }else{
            return FALSE;
        }
	}

    public function get_rlsd($cid){
        $this->db->select("count(rq.status_id) as status_id");
        $this->db->from("request rq");
        $this->db->join("delivery dl", "dl.request_id = rq.id", "LEFT");
        $this->db->where("rq.status_id = '6'");
        $this->db->where("dl.ffid", $cid);

        $query = $this->db->get();

        if ($query->num_rows() > 0){    
            foreach ($query->result_array() as $row){
                return $row['status_id'];
            }
        }else{
            return FALSE;
        }
    }

    public function get_rjct($cid){
        $this->db->select("count(rq.status_id) as status_id");
        $this->db->from("request rq");
        $this->db->join("delivery dl", "dl.request_id = rq.id", "LEFT");
        $this->db->where("rq.status_id = '5'");
        $this->db->where("dl.ffid", $cid);

        $query = $this->db->get();

        if ($query->num_rows() > 0){    
            foreach ($query->result_array() as $row){
                return $row['status_id'];
            }
        }else{
            return FALSE;
        }
    }
}