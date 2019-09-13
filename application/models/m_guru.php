<?php

class m_guru extends CI_model
{
    public function getAllGuru()
    {
        return $this->db->get('data_guru')->result_array();
    }

    public function tambahDataGuru()
    {
        $data = [
            'NIP' => $this->input->post('nip', true),
            'nama_guru' => $this->input->post('nama', true)
        ];

        $this->db->insert('data_guru', $data);
    }

    public function hapusDataGuru($id)
    {
        $this->db->where('NIP', $id);
        $this->db->delete('data_guru');
    }

    public function getGuruById($nip)
    {
        return $this->db->get_where('data_guru', ['NIP' => $nip])->row_array();
    }

    public function ubahDataGuru($data)
    {
        $kondisi = ['id' => $this->input->post('id')];
        $data = [
            'NIP' => $this->input->post('nip', true),
            'nama_guru' => $this->input->post('nama', true)
        ];

        $this->db->update('data_guru', $data, $kondisi);
    }
}
