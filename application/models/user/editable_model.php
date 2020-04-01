<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class editable_model extends CI_Model {

    public function tambahKonten($gambar)
    {
        $data = array(
            'nama_event'        => $this->input->post('nama_event'),
            'about_event    '   => $this->input->post('deskripsi_event'),
            'tanggal'           => $this->input->post('tanggal'),
            'logo_event'        => $gambar['file_name']
        );
        $this->db->insert('event', $data);
    }

    public function ubahVenue($id)
    {
        $data = array(
            'venue' => $this->input->post('venue'),
            'location_venue' => $this->input->post('location_venue')
        );
        $this->db->update('event', $data);
        $this->db->where('id_event', $id);
        
    }

    public function addFaq()
    {
        $data = array(
            'pertanyaan' => $this->input->post('pertanyaan'),
            'jawaban' => $this->input->post('jawaban')
        );
        $this->db->insert('faq', $data);
    }

    public function updateFaq($id)
    {
        $data = array(
            'pertanyaan' => $this->input->post('pertanyaan'),
            'jawaban' => $this->input->post('jawaban')
        );
        $this->db->where('id_faq', $id);
        $this->db->update('faq', $data);
    }

    public function addJadwal()
    {
        $hari = $this->db->query('SELECT MAX(hari) + 1 as new FROM jadwal')->result_array();

        foreach ($hari as $h) {
            $day = $h['new'];
        }

        $data = array(
            'hari' => $day
        );
        $this->db->insert('jadwal', $data);
        
    }

}

/* End of file editable_model.php */
