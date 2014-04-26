<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Upload extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->model('file_model');
    }
    
    function index(){
        $this->load->view('upload_form',array('error'=>''));
    }
    
    function do_upload(){
        $config['upload_path']='./uploads/';
        $config['allowed_types']='git|jpg|png|apk';
        $config['max_size']='0';
        $config['max_width']='1024';
        $config['max_height']='768';
        
        $this->load->library('upload',$config);
        
        if (!$this->upload->do_upload()){
            $error=array('error'=>$this->upload->display_errors());
            $this->load->view('upload_form',$error);
        }else{
            $message= $this->upload->data();
            $data=array('upload_data'=>$message);
            $this->file_model->insert_file($message['file_name']);
            $this->load->view('upload_success',$data);
        }
    }
}
?>