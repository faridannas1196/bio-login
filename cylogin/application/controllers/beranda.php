<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beranda extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->helper('form');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('user_model'); // Load model User_model
    }

    
      public function index() {
        // Cek apakah pengguna sudah login
        $user_data = $this->session->userdata('user_data');
        if (!$user_data) {
            redirect('login');
        }
    
        // Ambil data nama dari model
        $user_data = $this->session->userdata('user_data');
        $data['nama'] = $user_data['nama'];

      // Matikan caching
      $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
      $this->output->set_header('Pragma: no-cache');
      $this->output->set_header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
  
     
      $this->load->view('beranda/header', $data);
      $this->load->view('beranda/index', $data);
  }

  public function profil(){
    $user_data = $this->session->userdata('user_data');
    if (!$user_data) {
        redirect('login');
    }

    // Ambil data nama dari model
    $nama = $user_data['nama'];

    // Ambil data pribadi dari model
    $data['user_data'] = $this->user_model->get_user_data_by_name($nama);

  // Matikan caching
  $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
  $this->output->set_header('Pragma: no-cache');
  $this->output->set_header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
  $this->load->view('beranda/header', $data);
  $this->load->view('beranda/profil', $data);
  }

  public function edit(){
    $user_data = $this->session->userdata('user_data');
    if (!$user_data) {
        redirect('login');
    }

    // Ambil data nama dari model
    $nama = $user_data['nama'];

    // Ambil data pribadi dari model
    $data['user_data'] = $this->user_model->get_user_data_by_name($nama);

  
  $this->load->view('beranda/edit', $data);
  }

  public function iden() {
    $user_data = $this->session->userdata('user_data');
    if (!$user_data) {
        redirect('login');
    }

    // Ambil data nama dari model
    $nama = $user_data['nama'];

    // Ambil data pribadi dari model
    $data['user_data'] = $this->user_model->get_user_data_by_name($nama);

    // Ambil data identitas dari model
    $data['identitas'] = $this->user_model->get_identitas();

    $this->load->view('beranda/header', $data);
    $this->load->view('beranda/iden', $data);
}

public function updateIdentitas() {
  $user_data = $this->session->userdata('user_data');
  if (!$user_data) {
      redirect('login');
  }

  $nama = $user_data['nama'];

  // Tangkap data dari formulir edit identitas
  $identitasData = array(
      'nik' => $this->input->post('nik'),
      'jk' => $this->input->post('jk'),
      'tmpt_lahir' => $this->input->post('tmpt_lahir'),
      'tgl_lahir' => $this->input->post('tgl_lahir'),
      'alamat' => $this->input->post('alamat'),
      'no_tlpn' => $this->input->post('no_tlpn')
  );

  // Update data identitas pengguna
  $this->user_model->update_identitas($nama, $identitasData);

  // Redirect kembali ke halaman identitas
  redirect('beranda/edit');
  
}

public function editIdentitas() {
  $user_data = $this->session->userdata('user_data');
  if (!$user_data) {
      redirect('login');
  }

  // Ambil data nama dari model
  $nama = $user_data['nama'];

  // Ambil data pribadi dari model
  $data['user_data'] = $this->user_model->get_user_data_by_name($nama);

  $this->load->view('beranda/edit', $data);
}

public function add_identi(){
  $this->load->view('add_identi');
}
public function submit_formulir() {
  // Set aturan validasi untuk setiap field
  $this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
  $this->form_validation->set_rules('nama', 'Nama', 'required');
  $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
  $this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required');
  $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
  $this->form_validation->set_rules('alamat', 'Alamat', 'required');
  $this->form_validation->set_rules('no_tlpn', 'Nomor Telepon', 'required|numeric');

  if ($this->form_validation->run() == FALSE) {
    // Jika validasi gagal, kembali ke halaman formulir dengan pesan error
    $this->load->view('add_identi');
} else {
    // Jika validasi berhasil, simpan data ke dalam tabel identitas
    $data = array(
        'nik' => $this->input->post('nik'),
        'nama' => $this->input->post('nama'),
        'jk' => $this->input->post('jk'),
        'tmpt_lahir' => $this->input->post('tmpt_lahir'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'alamat' => $this->input->post('alamat'),
        'no_tlpn' => $this->input->post('no_tlpn')
    );

    $this->db->insert('identitas', $data);

    $this->session->set_flashdata('alert', 'Data berhasil dibuat!');

        // Redirect ke halaman lain atau tampilkan pesan sukses
        redirect('beranda/iden');
}
}

public function delete_identity($id) {
  // Memanggil model atau akses database untuk menghapus identitas berdasarkan ID
  $this->user_model->delete_identity($id);

  // Set flashdata untuk menampilkan pesan sukses
  $this->session->set_flashdata('alert', 'Identitas berhasil dihapus!');

  // Redirect kembali ke halaman beranda
  redirect('beranda/iden');
}

  
}
