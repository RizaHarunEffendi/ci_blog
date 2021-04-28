<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kategori','kategori');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        $data['title'] = "Kategori";
        $data['kategori'] = $this->kategori->get_all();
        $this->load->view('admin/kategori/index', $data);
        
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            redirect('kategori');
        } else {
            $data =[
                'nama_kategori' => htmlspecialchars($this->input->post('nama_kategori'), TRUE)
            ];
            // lempar ke model fungsi insert
            $this->kategori->insert($data);
            // pesan
            $this->session->set_flashdata('message', 'Kategori berhasil ditambahkan');
            redirect('kategori');
        }
    }

    public function ubah($id)
    {
        // error handling
        // $id = $this->uri->segment(3);
        // if (!$id) {
        //     redirect('kategori');
        // }else{

        // }
        
        $data['title'] = "Ubah Kategori";
        $data['kategori'] = $this->kategori->get_where($id);
        $this->load->view('admin/kategori/ubah', $data);
       
    }

    public function simpan_ubah()
    {
        $id = htmlspecialchars($this->input->post('id'), TRUE);
        $data = [
            'nama_kategori' => htmlspecialchars($this->input->post('nama_kategori'), TRUE)
        ];
        
        // lempar ke model fungsi update
        $this->kategori->update($id, $data);
        // pesan
        $this->session->set_flashdata('message', 'Kategori berhasil diubah');
        redirect('kategori');
    }

    public function hapus($id)
    {
        // error handling
        // $id = $this->uri->segment(3);
        // if (!$id) {
        //     redirect('kategori');
        // }else{

        // }

        $this->kategori->delete($id);
        // pesan
        $this->session->set_flashdata('message', 'Kategori berhasil dihapus');
        redirect('kategori');
    }

}

/* End of file Kategori.php */
