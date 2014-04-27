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
    private $file_path='';
    
    function __construct(){
        parent::__construct();
    }
    
    function insert_file($file_name,$file_path){
        $this->file_name=$file_name;
        $this->date=date('Y-m-d');
        $this->file_path=$file_path;
        $data=array('file'=> $this->file_name,'time'=> $this->date,'file_path'=>$this->file_path    );
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
    
    function get_num_rows($id){
        $query=$this->db->get_where('file',array('id'=>$id));
        return $query->num_rows();
    }
    
    function delete_file($id){
        $this->db->delete('file',array('id'=>$id));
    }
}
?>
