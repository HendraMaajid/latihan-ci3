<?php
class Mahasiswa extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('mahasiswa_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['mahasiswa'] = $this->mahasiswa_model->get_all_mahasiswa();
        $this->load->view('mahasiswa/index', $data);
    }
    public function view($nim) {
        $data['mahasiswa'] = $this->mahasiswa_model->get_mahasiswa_by_nim($nim);
        $this->load->view('mahasiswa/view', $data);
    }

    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'insert mahasiswa';
        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat','required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('mahasiswa/create', $data);
        } else {
            $data = array(
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat')
            );

            $this->mahasiswa_model->insert_mahasiswa($data);
            redirect('mahasiswa');
        }
    }

    public function update($nim) {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Update mahasiswa';
        $data['mahasiswa'] = $this->mahasiswa_model->get_mahasiswa_by_nim($nim);

        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('mahasiswa/update', $data);
        } else {
            $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            );

            $this->mahasiswa_model->update_mahasiswa($nim, $data);
            redirect('mahasiswa');
        }
    }

    public function delete($nim) {
        $this->mahasiswa_model->delete_mahasiswa($nim);
        redirect('mahasiswa');
    }
}