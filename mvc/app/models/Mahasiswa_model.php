<?php
class Mahasiswa_model
{
  private $dbh; // database handler
  private $stmt;

  public function __construct()
  {
    //data source name
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }



  // private $mhs = [
  //   [
  //     "nama" => "Ikhsan Rachmat Alghifari",
  //     "nrp" => "203040042",
  //     "email" => "23ikhsanrachmat@gmail.com",
  //     "jurusan" => "Teknik Informatika"
  //   ],

//     "nama" => "Muhammad Rafi Ramadhan",
//     "nrp" => "203040056",
//     "email" => "rafirama123@gmail.com",
//     "jurusan" => "Teknik Informatika"
//   ]
  //   [
  //     "nama" => "Billy Firdaniel",
  //     "nrp" => "203040042",
  //     "email" => "billy123@gmail.com",
  //     "jurusan" => "Teknik Informatika"
  //   ],
  // 
  // ];


  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}