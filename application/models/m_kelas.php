<?php

class m_kelas extends CI_model
{
    public function getAllKelas()
    {
        return $this->db->get('data_kelas')->result_array();
    }

    public function getAllGuru()
    {
        return $this->db->get('data_guru')->result_array();
    }

    public function tambahDataKelas()
    {
        $data = [
            "id" => $this->input->post('id', true),
            "nama_kelas" => $this->input->post('nama', true),
            'NIP' => $this->input->post('nip', true)
        ];

        $this->db->insert('data_kelas', $data);
    }

    public function hapusDataKelas($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('data_kelas');
    }

    public function getKelasById($id)
    {
        return $this->db->get_where('data_kelas', ['id' => $id])->row_array();
    }

    public function ubahDataKelas($data)
    {
        $kondisi = ['id' => $this->input->post('id')];
        $data = [
            'nama_kelas' => $this->input->post('nama', true),
            'NIP' => $this->input->post('nip', true)
        ];

        $this->db->update('data_kelas', $data, $kondisi);
    }
}
