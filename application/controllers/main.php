<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('zend');
        $this->zend->load('Zend/Barcode');
    }

    public function index() {
        //I'm just using rand() function for data example
        //$temp = rand(10000, 99999);
        //phpinfo(); 
        //$this->set_barcode(111);
        //$this->load->view('bar');

        $this->load->view('barcode');
    }

    public function set_barcode() {
        $result = $this->input->post('count');
        $count['data'] = $result;
        
        //$code = 11111;
        //Zend_Barcode::render('CODE39', 'image', array('text' => $code), array());
        // Zend_Barcode::render('CODE39', 'image', array('text'=>$code), array());
        //Zend_Barcode::render('CODE39', 'image', array('text'=>$code), array('imageType' => 'png'));
        //$this->bb($result);
        $this->load->view('show_barcode',$count);
       
    }
    public function bb($value){
        $barcodeOptions = array('text' => $value);//'ZEND-FRAMEWORK'
        $rendererOptions = array('imageType'=>'png','horizontalPosition' => 'center','verticalPosition'   => 'middle');
        $imageResource= Zend_Barcode::factory('code39', 'image', $barcodeOptions, $rendererOptions)->render();
        return $imageResource;   
        
    }

}
