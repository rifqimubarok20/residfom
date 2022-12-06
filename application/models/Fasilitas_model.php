<?php
    class Fasilitas_model extends CI_model {

        public function getAllFasilitas() {
            return $query = $this->db->get('fasilitas')->result_array();
        }

        public function createDataFasilitas() {
            $data = array(
                'nama_peminjam' => $this->input->post('nama_peminjam', true),
                'nama_fasilitas' => $this->input->post('nama_fasilitas', true),
                'tgl_pinjam' => $this->input->post('tgl_pinjam', true),
                'tgl_kembali' => $this->input->post('tgl_kembali', true)
            );

            $this->db->insert('fasilitas', $data);
        }

        public function deleteDataFasilitas($id) {
            $this->db->where('id', $id);
            $this->db->delete('fasilitas');
        }

        public function getFasilitasById($id) {
            return $this->db->get_where('fasilitas', ['id' => $id])->row_array();
        }

        public function updateDataFasilitas() {
            $data = array(
                'nama_peminjam' => $this->input->post('nama_peminjam', true),
                'nama_fasilitas' => $this->input->post('nama_fasilitas', true),
                'tgl_pinjam' => $this->input->post('tgl_pinjam', true),
                'tgl_kembali' => $this->input->post('tgl_kembali', true)
            );

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('fasilitas', $data);
        }

        public function searchDataFasilitas() {
            $keyword = $this->input->post('keyword', true);
            $this->db->like('nama_peminjam', $keyword);
            $this->db->or_like('nama_fasilitas', $keyword);
            return $this->db->get('fasilitas')->result_array();
        } 
    }
?>