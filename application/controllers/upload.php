<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
date_default_timezone_set('PRC'); 
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
        $file=$_FILES["userfile"]["name"] ;
        $path=$this->create_file_path($file);
        $config['upload_path']=$path;
        $config['allowed_types']='apk';
        $config['overwrite']= FALSE;
        $config['max_size']='0';
        
        $this->load->library('upload',$config);
        
        if (!$this->upload->do_upload()){
            $error=array('error'=>$this->upload->display_errors());
            $this->load->view('upload_form',$error);
        }else{
            $message= $this->upload->data();
            $data=array('upload_data'=>$message);
            $this->file_model->insert_file($message['file_name'],$message['full_path']);
            $this->load->view('upload_success',$data);
        }
    }
    
    private function create_file_path($file){
        $extension=substr(strrchr($file,'.'),1);
        
        $year=date('Y');
        $month=date('m');
        $day=date('d');
        
        if ($extension=='apk'){
            $path="./uploads/android/$year/$month/$day";
            if (!is_dir($path))
                mkdir($path,0777,TRUE);
            return $path;
        }
    }
    
}
?>