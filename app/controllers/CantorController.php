<?php

  namespace app\controllers;
  use app\core\Controller;
  use app\models\Cantor;

    class CantorController extends Controller{
      public function index(){ 
        $data["vocals"] = $this->filtrar("impar");  
        $data["view"] = "Cantor/lista";
        $this->load("template",$data);
      }

      public function filtrar($tipo=null){
        $objCantor = new Cantor();
        $todos = $objCantor->listar();
        $par = [];
        $impar = [];
        foreach($todos as $cantores){
          if($cantores["id_cantor"]%2==0){
            $par[] = array(
              "id_cantor" => $cantores["id_cantor"],
              "cantor" => $cantores["cantor"]
            );
          }else{
            $impar[] = array(
              "id_cantor" => $cantores["id_cantor"],
              "cantor" => $cantores["cantor"]
            );
          }
        }
        if($tipo=="par"){
          return $par;
        }elseif($tipo=="impar"){
          return $impar;
        }else{
          return $todos;
        }
      }



  }
    









?>