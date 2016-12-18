<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of barcode
 *
 * @author anurartkae
 */
class barcode extends MY_Controller {

    public function __construct() {
        $this->load->library('zend');
        $this->zend->load('Zend/Barcode');
    }

    public function index()
    {
        

        //$barcodeOptions = array('text' => 'ZEND-FRAMEWORK');
        //$rendererOptions = array('imageType'          =>'png', 
        //                         'horizontalPosition' => 'center', 
        //                         'verticalPosition'   => 'middle');
        //$imageResource= Zend_Barcode::factory('code39', 'image', $barcodeOptions, $rendererOptions)->render();
        $imageResource= Zend_Barcode::render('CODE39', 'image', array('text'=>1111), array());
        return $imageResource;   
    }
}
