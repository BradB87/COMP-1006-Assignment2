
<!-- create database connection-->
<?php
    class database{
        private $host= '172.31.22.43';
        private $username ='Bradley100078616';
        private $password = 'pF--mxlFhL';
        private $database = 'Bradley100078616';
        protected $connection;
        public function __construct(){
            if(!isset($this->connection)){
                $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
                if(!$this->connection){
                    echo "<p>Connection Failed</p>";
                    exit;
                }
            }
            return $this->connection;
        }
    }
$conn= mysqli_connect("localhost", "username", "password","database");




?>
