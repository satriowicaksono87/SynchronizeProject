<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class editable_home extends CI_Controller {

    public function index()
    {
        $data['sponsor'] = $this->home_model->getSponsor();
        $data['faq'] = $this->home_model->getFaq();
        $data['konten'] = $this->home_model->getKonten();
        $data['jadwal'] = $this->home_model->getJadwal();
        $data['detail_jadwal'] = $this->home_model->getDetailJadwal();
        $data['tiket'] = $this->home_model->getTiket();
        $data['guest'] = $this->gs_model->getGuest();
        $data['history'] = $this->home_model->getHistory();
        $this->load->view('editable_template', $data);
    }

    public function editKonten()
     {
         $config['upload_path'] = './assets/img/logo';
         $config['allowed_types'] = 'jpg|png|jpeg|gif';
         $config['max_width'] = '4480'; // pixel
         $config['max_height'] = '4480'; // pixel
         $config['file_name'] = $_FILES['fotopost']['name'];
 
         $path = './assets/picture/';
 
         $this->upload->initialize($config);
 
             if (!empty($_FILES['fotopost']['name'])) {
                 if ( $this->upload->do_upload('fotopost') ) {
                     $gambar = $this->upload->data();
                     //@unlink($path.$this->input->post('filelama'));
                     $this->editable_model->tambahKonten($gambar);
                     $this->session->set_flashdata('hijau', 'Berhasil ubah data');
                     redirect('user/editable_home');
                 }else {
                     $this->session->set_flashdata('merah', 'Gagal ubah data');
                     redirect('user/editable_home','refresh');
                 }
             }else {
                 $this->session->set_flashdata('merah', 'Gagal Upload gambar');
                 redirect('user/editable_home','refresh');
             }
     }

    public function editVenue($id)
    {
        $this->form_validation->set_rules('venue', 'venue', 'trim|required');
        $this->form_validation->set_rules('location_venue', 'location_venue', 'trim|required');
        
        
        if ($this->form_validation->run() == TRUE) {
            $this->editable_model->ubahVenue($id);
            redirect('user/editable_home','refresh');
        } else {
            redirect('user/editable_home','refresh');
        }
        
    }

    public function tambahFaq()
    {
        $this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'trim|required');
        $this->form_validation->set_rules('jawaban', 'jawaban', 'trim|required');
         
        if ($this->form_validation->run() == TRUE) {
             $this->editable_model->addFaq();
             $this->session->flashdata('alert');
             redirect('user/editable_home','refresh');
        } else {
             $this->session->flashdata('alert');
             redirect('user/editable_home','refresh');
        }
    }
        
    public function editFaq($id){
        $this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'trim|required');
        $this->form_validation->set_rules('jawaban', 'jawaban', 'trim|required');
            
        if ($this->form_validation->run() == TRUE) {
            $this->editable_model->updateFaq($id);
            $this->session->flashdata('alert');
            redirect('user/editable_home','refresh');
        } else {
            $this->session->flashdata('alert');
            redirect('user/editable_home','refresh');
        }
         
    }

    public function tambahJadwal(Type $var = null)
    {
        $this->editable_model->addJadwal();
        redirect('user/editable_home','refresh');
    }

    public function hapusJadwal($id)
    {
        $this->db->where('id_jadwal', $id);
        $this->db->delete('jadwal');
        redirect('user/editable_home','refresh');
    }

}

/* End of file editable_home.php */
