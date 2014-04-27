<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class origin_model extends CI_Model{
    
    function __construct(){
        parent::__contruct();
    }
    
    function insert($table_name,$data){
        $this->db->insert($table_name,$data);
    }
    
    function select($table_name,$data=null,$where=null,$order_by=null,$limit=0,$offset=-1){
        if ($where!=null)
            $this->db->where($where);
        if ($order_by!=null)
            $this->db->order_by($order_by);
        if (($limit!=0)&&($offset!=-1))
            $this->db->limit($limit,$offset);
        if ($data!=null)
            $this->db->select($data);
        
        $query=$this->db->get($table_name);
        if ($query->num_rows()==1)
            return $query->row();
        else if ($query->num_rows>0)
            return $query->result();
    }
    
    function update($table_name,$data,$where=null){
        if ($where!=null)
            $this->db->where($where);
        $this->db->update($table_name.$data);
    }
    
    function delete($table_name,$data){
        $this->db->delete($table_name,$data);
    }
    
    function get_num($table_name,$data=null,$where=null,$order_by=null,$limit=0,$offset=-1){
        if ($where!=null)
            $this->db->where($where);
        if ($order_by!=null)
            $this->db->order_by($order_by);
        if (($limit!=0)&&($offset!=-1))
            $this->db->limit($limit,$offset);
        if ($data!=null)
            $this->db->select($data);
        
        $query=$this->db->get($table_name);
        return $query->num_rows();
    }
    
}
?>