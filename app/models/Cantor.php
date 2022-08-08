<?php

  namespace app\models;
  use app\core\Model;
  use app\core\Controller;

    class Cantor extends Model{
      public function listar(){
        $sql = "SELECT * FROM cantor";
        $query = $this->db->query($sql);
        return $query->fetchAll(\PDO::FETCH_ASSOC);
      }
  }









?>