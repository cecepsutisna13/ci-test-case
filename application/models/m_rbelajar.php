<?php

class m_rbelajar extends CI_model
{
    public function getAllBelajar()
    {
        $querySubMenu = "SELECT *
                        FROM `data_guru` JOIN `data_kelas`
                        ON `data_guru`.`NIP` = `data_kelas`.`NIP`
                        Where `data_guru`.`NIP` =  `data_kelas`.`NIP`
                        ORDER BY `data_guru`.`nama_guru` ASC
                        ";
        return $this->db->query($querySubMenu)->result_array();
    }

    public function detailData($id)
    {
        return $this->db->get_where('data_guru', ['NIP' => $id])->row_array();
    }






    public function getAllGuru()
    {
        return $this->db->get('data_guru')->result_array();
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
