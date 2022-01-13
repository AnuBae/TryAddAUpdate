<?php

class Karyawan_model extends CI_Model
{
    public function getKaryawan()
    {
        // return $this->db->get('karyawan')->result_array();
        $sql = "SELECT * FROM karyawan AS a INNER JOIN (SELECT t1.* FROM logactivity AS t1 LEFT OUTER JOIN logactivity AS t2 ON t1.id_karyawan = t2.id_karyawan AND (t1.time < t2.time OR (t1.time = t2.time AND t1.id_log < t2.id_log)) WHERE t2.id_karyawan IS NULL) AS b ON a.id = b.id_karyawan";
        return $this->db->query($sql)->result_array();
    }

    public function getLogActivity()
    {
        // return $this->db->get('logactivity')->result_array();
        $sql = "SELECT logactivity.*, karyawan.nama FROM logactivity LEFT JOIN karyawan on logactivity.id_karyawan = karyawan.id ORDER BY logactivity.id_log";
        return $this->db->query($sql)->result_array();
    }

    public function addLogActivity($data)
    {
        return $this->db->insert('logactivity', $data);
    }

    public function getName($id)
    {
        return $this->db->get_where('karyawan', ["id" => $id])->row();
    }
}
