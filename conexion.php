<?php
        class conexionDB
        {
            function conect()
            {
                //$serverName ="172.16.1.51";
                $serverName ="172.16.11.130";
                $connectionInfo = array( "Database"=>"rbankstackx", "UID"=>"root", "PWD"=>"root");
                $con = mysql_connect($serverName ,$connectionInfo);
                if (!$con)
                {
                    die( print_r( mysql_errors(), true));
                }
                
                return $con;
            }
            
            function closedb($result,$con)
            {
                mysql_close($con);     
            }
        }
?>