<?php
/**
 * Created by PhpStorm.
 * User: MW Toolbox
 * Date: 12/05/2017
 * Time: 2:39 PM
 */
class db
{
   private $host = "localhost";
  // private $user = "mwtoolbo_admin1";
    private $user = "root";
  // private $pass = "123123";
    private $pass = "";
   //private $db_name ="mwtoolbo_test";
    private $db_name ="test";


   public function connect(){
       $conn = new mysqli($this->host,$this->user,$this->pass,$this->db_name );
       return $conn;
   }


}