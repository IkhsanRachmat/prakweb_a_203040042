<?php
class Mahasiswa_model
{
    private $table = 'mahasiswa';
    private $db;

  public function __construct()
  {
    $this->db = new Database;
  }



  // private $mhs = [
  //   [
  //     "nama" => "Ikhsan Rachmat Alghifari",
  //     "nrp" => "203040042",
  //     "email" => "23ikhsanrachmat@gmail.com",
  //     "jurusan" => "Teknik Informatika"
  //   ],
    public function getAllMahasiswa()
    {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
    }
}