<?php
class Siswa extends CI_Controller {
public function __construct(){
    parent::__construct();
    $this->load->model('M_Siswa');
    $this->load->model('M_Wali');
    $this->load->model('M_Auth');
    // cekSession();
  }
public function index(){
  $data['title'] = 'Siswa';
    $data['user'] = $this->Auth_m->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    $data['siswa'] = $this->Siswa_m->get('siswa')->result_array();
    $data['kelas'] = $this->Wali_m->get('wali_kelas')->result_array();
    $this->form_validation->set_rules('nama', 'Nama Siswa', 'required|trim', ['required' => 'Nama Siswa wajib di isi!.']);
    $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim', ['required' => 'Kelas wajib di isi!.']);
    $this->form_validation->set_rules('nis', 'NIS', 'required|trim', ['required' => 'NIS wajib di isi!.']);
    $this->form_validation->set_rules('tahun_ajaran', 'Tahun Ajaran', 'required|trim', ['required' => 'Tahun Ajaran wajib di isi!.']);
    $this->form_validation->set_rules('biaya', 'Biaya', 'required|trim', ['required' => 'Biaya wajib di isi!.']);
    if($this->form_validation->run() == FALSE) {
      $this->load->view('layout/header', $data);
      $this->load->view('layout/sidebar', $data);
      $this->load->view('admin/siswa/index', $data);
      $this->load->view('layout/footer');
    } else {
      $biaya = html_escape($this->input->post('biaya', true));
      $data = [
        'nis' => html_escape($this->input->post('nis', true)),
        'nama_siswa' => html_escape($this->input->post('nama', true)),
        'kelas' => html_escape($this->input->post('kelas', true)),
        'tahun_ajaran' => html_escape($this->input->post('tahun_ajaran', true)),
        'biaya' => $biaya
      ];

      $AwalJatuhTempo = $this->input->post('jatuh_tempo', true);

      // Tampil bulan berdasarkan bhs indonesia
      $bulanIndo = [
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember'
      ];

      // tambah data siswa
      $tbSiswa = $this->db->insert('siswa', $data);
      // if(!$tbSiswa) {
      //  $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Wali Kelas Berhasil Ditambahkan.</div>');
      //  redirect('admin/siswa');
      // }

      // Amil data DB siswa berdasarkan id_siswa
      $this->db->limit(1);
      $this->db->order_by('id_siswa', 'desc');
      $siswa = $this->db->get('siswa')->row_array();
      $idSiswa = $siswa['id_siswa'];

      // tagihan (12 bulan dimulai dari Juli 2017 dan menyimpan tagihan ditabel spp)
      for($i = 0; $i < 12; $i++) {
        // membuat tgl jatuh tempo nya setiap tanggal 10
        $jatuhTempo = date('Y-m-d', strtotime("+$i month", strtotime($AwalJatuhTempo)));
        $bulan = $bulanIndo[date('m', strtotime($jatuhTempo))] . " " . date('Y', strtotime($jatuhTempo));

        $data = [
          'id_siswa' => $idSiswa,
          'jatuh_tempo' => $jatuhTempo,
          'bulan' => $bulan,
          'jml' => $biaya,
          'id_user' => $this->session->userdata('id_user')
        ];
        $this->M_Siswa->insert('spp', $data);
      }


      // $this->Wali_m->insert('wali_kelas', $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Siswa Berhasil Ditambahkan.</div>');
      redirect('admin/siswa');
    }
  }
}
  
