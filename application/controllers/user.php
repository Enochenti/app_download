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
        $data=array(
            'user_id'=>  $this->input->post('user_id'),
            'nick_name'=>  $this->input->post('nick_name'),
            'password'=>  $this->input->post('password'),
            'password_again'=>  $this->input->post('passwrod_again')
        );
        
        $this->user_model->insert('user',$data);
    }
}
?>