<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_index extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
  }

  public function index()
  {
    $this->load->view('admin/index_view');
  }
}

/* End of file */
