<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_request extends CI_Model {

    public function get_request($cid){
        $this->db->select("rq.id, rq.req_number, dl.bl_number, dl.ff_name, dl.sl_name, ms.status_desc, rq.created_date, rq.updated_date");
        $this->db->from("request rq");
		$this->db->join("delivery dl", "dl.request_id = rq.id", "LEFT");
        $this->db->join("m_status ms", "ms.id_status = rq.status_id", "LEFT");
        $this->db->order_by('req_number', 'DESC');
        $this->db->where("rq.company_id", $cid);

        $query = $this->db->get();
        return $query;
    }
	
	public function get_view($id){
        $this->db->select("rq.id, rq.req_number, rq.status_id, rq.notes_reject, dl.bl_number, dl.ff_name, dl.sl_name, dl.expired_do, ms.status_desc, rq.created_date");
        $this->db->from("request rq");
		$this->db->join("delivery dl", "dl.request_id = rq.id", "LEFT");
        $this->db->join("m_status ms", "ms.id_status = rq.status_id", "LEFT");
		$this->db->where("rq.id", $id);

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

    public function update_data($table, $data, $where) {
        $temp = $this->db->update($table, $data, $where);
        return $temp;
    }

    public function delete_data($table, $where) {
        $temp = $this->db->delete($table, $where);
        return $temp;
    }
	
	public function get_pndg($cid){
		$this->db->select("count(status_id) as status_id");
		$this->db->from("request rq");
		$this->db->where("rq.status_id = '1'");
        $this->db->where("rq.company_id", $cid);

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
		$this->db->select("count(status_id) as status_id");
		$this->db->from("request rq");
		$this->db->where("rq.status_id = '2'");
        $this->db->where("rq.company_id", $cid);

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
		$this->db->select("count(status_id) as status_id");
		$this->db->from("request rq");
		$this->db->where("rq.status_id = '3'");
        $this->db->where("rq.company_id", $cid);

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
		$this->db->select("count(status_id) as status_id");
		$this->db->from("request rq");
		$this->db->where("rq.status_id = '4'");
        $this->db->where("rq.company_id", $cid);

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
        $this->db->select("count(status_id) as status_id");
        $this->db->from("request rq");
        $this->db->where("rq.status_id = '6'");
        $this->db->where("rq.company_id", $cid);

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
        $this->db->select("count(status_id) as status_id");
        $this->db->from("request rq");
        $this->db->where("rq.status_id = '5'");
        $this->db->where("rq.company_id", $cid);

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