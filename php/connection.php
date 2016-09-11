<?php

class createConnection 
{
    var $host="172.16.1.51";
	//var $host="172.16.11.130";
	//var $host="172.16.1.57";
    var $username="root";    // specify the sever details for mysql
    Var $password="root";
    var $database="rbankstackx";
    var $myconn;

    function connectToDatabase() // create a function for connect database
    {
        $conn= mysqli_connect($this->host,$this->username,$this->password,$this->database);
		
        if(!$conn)// testing the connection
        {
            die ("Cannot connect to the database");
        }
        else
        {
            $this->myconn = $conn;
            //echo "Connection established";
        }
        return $this->myconn;
    }

    function closeConnection() // close the connection
    {
        mysqli_close($this->myconn);

        //echo "Connection closed";
    }

}



?>