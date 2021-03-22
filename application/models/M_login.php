<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
    
    public function get_login($username, $password){
        $u = $username;
        $p = md5($password);
        
        $cek_login = $this->db->get_where('m_user', array('username' => $u, 'password' => $p));
        
        if($cek_login->num_rows() > 0){
            $q = $cek_login->row();
            
            if($u == $q->username && $p == $q->password){
                $sess = array(
                    'username'  => $q->username,
                    'roles_id'  => $q->roles_id,
					'company_id'=> $q->company_id
                );
                
                $this->session->set_userdata($sess);
                
                if($q->roles_id == '1'){
                    header('location:'.base_url().'admin');
                }elseif($q->roles_id == '2'){
                    header('location:'.base_url().'Request');
                }elseif($q->roles_id == '3'){
                    header('location:'.base_url().'delivery');
                }else{
                    header('location:'.base_url().'bill');
                }
            }else{
                echo "<script>alert('Username / Password Salah !')";
                echo "windows.location.href = '".  base_url()."'";
                echo "</script>";
            }
        }
    }
}