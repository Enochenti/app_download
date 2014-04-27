<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
define('DOWNLOAD_PATH','./uploads/');
class download extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('file_model');
        $this->load->helper('download');
    }
    
    function index(){
        $list=$this->file_model->select_file();
        $this->load->view('apk_download',array('list'=>$list));
    }
    
    function download_file($id){
        $row=$this->file_model->get_a_file($id);
        $data=file_get_contents(DOWNLOAD_PATH.$row->file);
        $name=$row->file;
        
        force_download($name,$data);
    }
    
    function delete($id){
        $item=$this->file_model->get_a_file($id);
        if (!empty($item)){
            $this->file_model->delete_file($id);
            @unlink($item->file_path);
            $this->index();
        }
    }
}
?>