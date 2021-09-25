<?php 

class Mahasiswa_model {
  // dibawah ini contoh data array langsung
  // private $mhs = [
  //     [
  //       'nama' => 'dodi',
  //       'email' => 'dodi@mail.com',
  //       'jurusan' => 'RPL',
  //     ],
  //     [
  //       'nama' => 'samsi',
  //       'email' => 'samsi@mail.com',
  //       'jurusan' => 'RPL',
  //     ],
  //     [
  //       'nama' => 'riski',
  //       'email' => 'riski@mail.com',
  //       'jurusan' => 'RPL',
  //     ],
  //     [
  //       'nama' => 'rudi',
  //       'email' => 'rudi@mail.com',
  //       'jurusan' => 'RPL',
  //     ],
  //   ];

  // berikut ini menggunakan data dari database (dengan menggunakan PDO karena lebih mudah)
  private $databaseHandler;
  private $statement;

  public function __construct()
  {
    $dataSourceName = 'mysql:host=localhost;dbname=phpmvc';

    try {
      $this->databaseHandler = new PDO($dataSourceName, 'root', '');
    } catch (PDOException $err) {
      die($err->getMessage());
    }
  }

    public function getAllMahasiswa() {
      $this->statement = $this->databaseHandler->prepare('SELECT * FROM mahasiswa');
      $this->statement->execute();
      return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }
}