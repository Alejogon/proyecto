<?php
    class db{
        private $host = "srv1075.hstgr.io";
        private $user = "u672034110_poli";
        private $password = "qP|64zxG!n@";
        private $dbname = "u672034110_poli";
        public function conexion(){
            try{
                $PDO = new PDO('mysql:host='.$this->host.'; dbname = '. $this->dbname, $this->user, $this->password );
                return $PDO;
            }catch(Exception $e){
                die("Error de conexion: ". $e->getMessage());
            }
        }
    }






?>