<?php

  namespace app\controllers;
  use app\core\Controller;
  use app\models\Cantor;

    class CantorController extends Controller{
      public function index(){
        $objCantor = new Cantor();
        $data["lista"] = $objCantor->listar();
        $data["view"] = "Cantor/lista";
        $this->load("template",$data);
      }

      public function lista(){
        $objCantor = new Cantor();
        $retorno = $objCantor->listar();
        $par = [];
        $impar = [];
        foreach($retorno as $cantor){
          if($cantor["id_cantor"]%2==0){
            $par[] = $cantor["id_cantor"] . "-" .$cantor["cantor"] . "<br>";
          }else{
            $impar[] =  $cantor["id_cantor"] . "-" .$cantor["cantor"] . "<br>"; 
          }
        }
        echo "<pre>";
        print_r($impar);
      }
  }


    






?>