<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use SimpleExcel\SimpleExcel;
require_once APPPATH.'vendor/autoload.php';
class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('xml');
        require_once APPPATH.'vendor/autoload.php';
    }

    public function test_composer()
    {
        $excel = new \SimpleExcel\SimpleExcel('xml');
        $excel->writer->setData(
            array(
                array('ID','Name','Kode'),
                array('1','Kab.Bogor','1'),
                array('2','kab.Cianjur','1'),
                array('3', 'Kab. Sukabumi', '1' ),
                array('4', 'Kab. Tasikmalaya', '2' )
            )
        );
        $excel->writer->saveFile('example');
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}
}
