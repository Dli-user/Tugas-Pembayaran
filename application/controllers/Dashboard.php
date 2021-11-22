<?php
class Dashboard extends CI_Controller 
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_Dashboard');   
  }

  public function index()
  {
    if($this->session->userdata('login')!= TRUE)
    {
      redirect('login');
    }

    $data['title'] = "Dashboard";
    $this->template->load_admin('index','dashboard',$data);
  }
}