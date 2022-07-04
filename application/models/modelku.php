<?php

class modelku extends CI_Model {
    public function getAll(){
        return $this->db->get('karya')->result_array();
    }

    public function Tambah()
    {
        $data = [
            // kalau di html ada htmlspecialchar, di ci tinggal kasih true biar tidak ada karakter aneh
            "nama" => $this->input->post('nama', true),
            "simbol" => $this->input->post('simbol', true),
            "harga" => $this->input->post('harga', true),
            "market" => $this->input->post('market', true)
        ];
        $this->db->insert('listcripto', $data);
    }

    public function Hapus($id){
        $this->db->where('id', $id);
        $this->db->delete('karya');
    }

    public function getIdKarya($id){
        return $this->db->get_where('karya', ['id' => $id])->row_array();
    }

    public function Update()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "simbol" => $this->input->post('simbol', true),
            "harga" => $this->input->post('harga', true),
            "market" => $this->input->post('market', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('listcripto', $data);
    }

    public function TambahUser()
    {
        $data = [
            "username" => $this->input->post('username', true),
            "password" => md5($this->input->post('password', true)),
        ];
        $this->db->insert('user_karyaku', $data);
    }

    public function getNoPengguna($tabel,$no){
        $this->db->order_by('user_id', 'DESC');
        $da = $this->db->get_where($tabel,$no);
        return $da -> result_array();
    }
}

?>