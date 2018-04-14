<?php
Class pgCon{
     $host = "localhost";
     $port = "5433";
     $user = "postgres";
     $pass = "theo";
     $dbname = "list";
     $con = "";

    public function __construct()
    {
        $this->con = pg_connect("$this->host" , "$this->user" , "$this->pass") or die ('Error');
        pg_select_db("$this->dbname");
        echo ('ok');
    }
 
    public function close()
    {
        pg_close($this->con);
        echo ('nao');
    }
}
?>
