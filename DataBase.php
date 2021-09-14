<?php

Class DataBase{

   private $server='localhost';
   private $user='root';
   private $password='';
   private $bd='inventarioprod';
   private $con;
   private $stmt;
   private $rs;
 
   function __construct(){
      $this->conectar();
   }

private function conectar(){
  $this->con=mysqli_connect($this->server, $this->user, $this->password, $this->bd);
     
   }

   public function consultar($sql){
    $rs= mysqli_query($this->con, $sql);
    return $rs;
   }

     public function consultarId($sql){
    $rs= mysqli_query($this->con, $sql);
    return $rs;
   }

   public function eliminarRegistro($id){
   $rs= mysqli_query($this->con, "DELETE FROM tproductos WHERE ID =".$id);
   }

  public function insertar($sql){
if (mysqli_query($this->con, $sql)) {
     return 1;
}else{
   return 0;
  }
}

  public function actualizar($sql){
if (mysqli_query($this->con, $sql)) {
     return 1;
}else{
   return 0;
  }
}

}
