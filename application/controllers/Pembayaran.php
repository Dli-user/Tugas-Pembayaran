<?php
  class Pembayaran extends CI_Controller
  {
    function __construct()
    {
      parent::__construct();
      $this->load->model('M_Pembayaran');
    }

    public function index()
    {
      if($this->session->userdata('login')!= TRUE) {
        redirect('login');
      }

      $data['title'] = "Transaksi Pembayaran";
      $data['subtitle'] = "Data Transaksi Pembayaran";
      $data['bayar'] = $this->M_Pembayaran->data_pembayaran();
      $this->template->load_admin('index', 'pembayaran', $data);
    }
  }