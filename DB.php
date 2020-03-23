
<?php 

class DB{
    private $host ='localhost';
    private $username = 'root';
    private $password = '';
    private $dbname  = 'contucts';
    public $con;
    private function connect()
    {
        $this->con = new mysqli($this->host,$this->username,$this->password,$this->dbname)  ;
        // if($con){return true;}else{return false;}
    }


    public function insert($q)
    {
        $this->connect();
        $insert = $this->con->query($q);
        if($insert)
        {
            return $insert;
        }
        else
        {
            return false;
        }
    }

    public function getData($q)
    {
        $this->connect();
        $data = $this->con->query($q);
        if($data)
        {
            return $data;
        }
        else
        {
            echo "Failed From DataBase";
            return false;
        }
    }
    public function delete($q)
    {
        $this->connect();
        $data = $this->con->query($q);
        if ($data)
        {
           return true;
        }
        else
        {
            echo "Error From DataBase";
           
        }
    }

}

