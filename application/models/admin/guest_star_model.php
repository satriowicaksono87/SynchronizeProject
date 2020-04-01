<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class guest_star_model extends CI_Model {
	// Fungsi untuk menampilkan semua data gambar
	public function view(){
		return $this->db->get('guest')->result();
	}
	public function get_guest(){
		return $this->db->join('event', 'event.id_event = guest.id_event')->get('guest')
						->result();
	}
	public function get_event()
	{
		return $this->db->get('event')
										->result();
	}

	// Fungsi untuk melakukan proses upload file
	public function upload(){

		$configVideo['upload_path'] = './assets/images/gs/';
		$configVideo['allowed_types'] = 'jpg|png|jpeg';
		$configVideo['max_size']	= '0';
		$configVideo['max_filename'] = '255';
		$configVideo['encrypt_name'] = FALSE;
		$configVideo['remove_space'] = TRUE;

		$this->load->library('upload', $configVideo); // Load konfigurasi uploadnya
    $this->upload->initialize($configVideo);
		if($this->upload->do_upload('gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	// Fungsi untuk menyimpan data ke database
	public function save($upload){
		$data = array(
			'nama_guest' => $this->input->post('nama_guest'),
			'id_event' => $this->input->post('id_event'),
			'status_gs' => $this->input->post('status_gs'),
			'genre' => $this->input->post('genre'),
			'deskripsi' => $this->input->post('deskripsi'),
			'gambar' => $upload['file']['file_name']
		);

		$this->db->insert('guest', $data);
	}
	public function delete($id_dj){
 		 $hapus = $this->db->query("DELETE FROM dj WHERE id_dj = $id_dj");
 		 return $hapus;
  }

}
