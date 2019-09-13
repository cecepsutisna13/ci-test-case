<?php

class m_rmengajar extends CI_model
{
    public function getAllMengajar()
    {
        $querySubMenu = "SELECT *
                        FROM `data_siswa` JOIN `data_kelas`
                        ON `data_siswa`.`id_kelas` = `data_kelas`.`id`
                        Where `data_siswa`.`id_kelas` =  `data_kelas`.`id`
                        ORDER BY `data_siswa`.`id_kelas` ASC
                        ";
        return $this->db->query($querySubMenu)->result_array();
    }

    public function getAllMengajarCampur()
    {
        $querySubMenu = "SELECT *
                        FROM `data_siswa` JOIN `data_kelas`
                        ON `data_siswa`.`id_kelas` = `data_kelas`.`id`
                        Where `data_siswa`.`id_kelas` =  `data_kelas`.`id`
                        ORDER BY `data_siswa`.`id_kelas` ASC
                        ";
        return $this->db->query($querySubMenu)->result_array();
    }

    public function getSiswaById($nis)
    {
        return $this->db->get_where('data_siswa', ['NIS' => $nis])->row_array();
    }

    public function getAllSiswa()
    {
        return $this->db->get('data_siswa')->result_array();
    }

    public function getAllKelas()
    {
        return $this->db->get('data_kelas')->result_array();
    }

    public function tambahDataSiswa()
    {
        $data = [
            "NIS" => $this->input->post('nis', true),
            "nama_siswa" => $this->input->post('nama', true),
            "id_kelas" => $this->input->post('kelas', true)
        ];

        $this->db->insert('data_siswa', $data);
    }

    public function hapusDataSiswa($id)
    {
        $this->db->where('NIS', $id);
        $this->db->delete('data_siswa');
    }

    public function ubahDataSiswa($data)
    {
        $kondisi = ['id' => $this->input->post('id')];
        $data = [
            'NIS' => $this->input->post('nis', true),
            'nama_siswa' => $this->input->post('nama', true),
            'id_kelas' => $this->input->post('kelas', true)
        ];

        $this->db->update('data_siswa', $data, $kondisi);
    }


    public function getKelas($id)
    {
        return $this->db->get_where('data_kelas', ['id' => $id])->row_array();
    }

    public function getSiswa($id)
    {
        $querySubMenu = "SELECT *
                        FROM `data_siswa` JOIN `data_kelas`
                        ON `data_siswa`.`id_kelas` = `data_kelas`.`id`
                        Where `data_siswa`.`id_kelas` =  $id
                        ORDER BY `data_siswa`.`id_kelas` ASC
                        ";
        return $this->db->query($querySubMenu)->result_array();
    }
}
