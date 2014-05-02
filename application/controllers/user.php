<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class user extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
    }
    
    function add_view(){
        $this->load->view('user_add');
    }
    
    function add(){
        
       $config=array(
            array(
               'field'=>'user_id',
               'label'=>'user_id',
                'rules'=>'trim|required'
            ),
            array(
                'field'=>'nick_name',
                'label'=>'nick_name',
                'rules'=>'trim|required'
            ),
            array(
                'field'=>'password',
                'label'=>'password',
                'rules'=>'required'
                ),
            array(
                'field'=>'password_again',
                'label'=>'password_again',
                'rules'=>'required|callback_password_check'
            )
        );
        
        $this->form_validation->set_rules($config);
        
        if ($this->form_validation->run()==false)
            $this->load->view('user_add');
        else {
            $data = array(
                'user_name' => trim($this->input->post('user_id')),
                'nick_name' => trim($this->input->post('nick_name')),
                'password' => md5(trim($this->input->post('password')))
            );
            $this->user_model->insert('user', $data);
        }
    }
    
    public function password_check(){
        if ($this->input->post('password')!=$this->input->post('password_again')){
            $this->form_validation->set_message('password_check','The %s is not match!');
            return false;
        }else
            return true;
    }
}
?>