<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class Postingan extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kategori', 'kategori');
        $this->load->model('M_postingan', 'postingan');
        $this->load->library('form_validation');
        
    }
    

    public function index()
    {
        $data['title']="Postingan";
        $data['postingan'] = $this->postingan->get_all();
        $data['kategori'] = $this->kategori->get_all();
        $this->load->view('admin/postingan/index', $data);
    }

    public function tambah()
    {
        $data['kategori'] = $this->kategori->get_all();

        $this->form_validation->set_rules('nama', 'Nama Postingan', 'trim|required');
        $this->form_validation->set_rules('id_kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('isi_postingan', 'Isi Postingan', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['title']="Tambah Berita & Postingan";
            $this->load->view('admin/postingan/tambah', $data);
        } else {
            $nama_postingan = $this->input->post('nama');
            $slug = str_replace(' ','-', $nama_postingan);
            $data = [
                'id_kategori' => $this->input->post('id_kategori'),
                'nama' => $this->input->post('nama'),
                'isi_postingan' => $this->input->post('isi_postingan'),
                'slug' => $slug,
                'created_at' => time()
            ];

            $this->postingan->insert($data);
            $this->session->set_flashdata('message', 'Postingan berhasil ditambahkan');
            redirect('postingan');
            
        }
        
    }

    public function detail($id)
    {
        
        $data['postingan'] = $this->postingan->getById($id);
        $id_kategori = $data['postingan']['id_kategori'];
        $data['kategori'] = $this->kategori->get_where($id_kategori);
        $data['title']="Detail Postingan";
        $this->load->view('admin/postingan/detail', $data);
    }

    public function edit($id)
    {
        $data['kategori'] = $this->kategori->get_all($id);
        $data['postingan'] = $this->postingan->getById($id);
        $data['title']="Edit Postingan";
        $this->load->view('admin/postingan/edit', $data);
    }

    public function update()
    {
        $this->form_validation->set_rules('nama', 'Nama Postingan', 'trim|required');
        $this->form_validation->set_rules('id_kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('isi_postingan', 'Isi Postingan', 'trim|required');
        
        $id = $this->input->post('id');

        if ($this->form_validation->run() == false) {
            redirect('postingan/edit/'.$id);
        }else{
            $slug = $this->input->post('nama');
            $data = [
                'id_kategori' => $this->input->post('id_kategori'),
                'nama' => $this->input->post('nama'),
                'isi_postingan' => $this->input->post('isi_postingan'),
                'slug' => url_title($slug)
            ];

            $this->postingan->update($id,$data);
            $this->session->set_flashdata('message', 'Postingan berhasil diupdate');
            redirect('postingan');
        }
    }

    public function hapus($id)
    {
        $this->postingan->delete($id);
        $this->session->set_flashdata('message', 'Postingan berhasil dihapus');
        redirect('postingan');
    }
}

/* End of file Postingan.php */