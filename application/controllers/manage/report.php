<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    public function __construct(){
        parent::__construct();
        echo "Constructor"."</br>";
    }

	public function index()
	{
		echo "Report Index";
    }
    public function _hello()
	{
		echo "</br>"."Hello World";
    }
    
    public function showname($name="john",$lastname="wick"){
        echo "My name is ".$name." ".$lastname;
        $this->_hello();
    }

    public function showview(){
        $this->load->view("hello_view");
        $this->load->view("hello_view");
        $this->load->view("hello_view");
    }

    public function showuser(){
        $user['name'] = "Mario";
        $user['lastname'] = "MaoLoer";
        $user['age'] = 18;
        $this->load->view("user_page",$user);
    }
    public function getuser($p1=null,$p2=null,$p3=null){
        $user['name'] = $p1;
        $user['lastname'] = $p2;
        $user['age'] = $p3;
        $this->load->view("user_page",$user);
    }
    public function showbooks(){
        $data['books'] = array("Java","Kotlin","PHP");
        $this->load->view("book_page",$data);
    }
}
