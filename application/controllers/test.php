<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
    public function sayHello()
    {
        // you should not echo anything from controller
        echo 'This is sayHello function';
    }

    public function index()
    {
        // you should not echo anything from controller
        echo '<h2> This is sayHello function </h2>';
    }

    public function second()
    {
        $data['fname']='Grisha';
        $data['lname']='Jones';
        $this->load->view('test/second', $data);
    }

    public function showNames(){
        $this->load->model('Test_model');
        $data['customers']=$this->Test_model->getCustomer();
        $this->load->view('test/showNames', $data);
    }

}