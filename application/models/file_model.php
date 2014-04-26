<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 date_default_timezone_set('PRC'); 
class File_model extends CI_Model{
    private $file_name='';
    private $date='';
    
    function __construct(){
        parent::__construct();
    }
    
    function insert_file($file_name){
        $this->file_name=$file_name;
        $this->date=date('Y-m-d');
        $data=array('file'=> $this->file_name,'time'=> $this->date);
        $this->db->insert('file',$data);
    }
    
    function select_file(){
        $this->db->order_by('id','desc');
        $query=$this->db->get('file');
        return $query->result();
    }
    
    function get_a_file($id){
        $query=$this->db->get_where('file',array('id'=>$id));
        return $query->row();
    }
}
?>
