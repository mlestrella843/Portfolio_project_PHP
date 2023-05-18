
<?php 
    class connection{
        private $server="localhost";
        private $userServer="root";
        private $passwordServer="";
        private $connection;

        //Tomar en cuenta que aqui la variable conexion se ponse sin el signo de dolar, al igual que las demas variables.
        public function __construct(){ 
            try{
                $this->connection=new PDO("mysql:host=$this->server;dbname=album", $this->userServer, $this->passwordServer);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);          
            }catch(PDOException $e){
                return "Connection failed".$e;
            }
        }
        public function ejecutar($sql) {
            $this->connection->exec($sql);
            return $this->connection->lastInsertId();
        }
}

?>