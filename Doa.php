<?php
class Doa {
  private $host = "us-cdbr-iron-east-01.cleardb.net";
  private $db = "heroku_10aa37358da4f01";
  private $user = "be72e1d5d10f7b";
  private $pass = "570ee2c1";
  public function getConnection () {
    return
      new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
          $this->pass);
  }

  }
  ?>