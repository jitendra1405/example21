<?php

   $con = "dbname=d58o173hbaukt7 host=ec2-50-19-124-157.compute-1.amazonaws.com port=5432 user=nfltllotkrgbnc password=6501404a979c7d7bb1da09c71cd54a6b83fb4986354072611d25bf3c0f0287e0 sslmode=require";


   if (!$con) 
   {
     echo "Database connection failed.";
   }
   else 
   {
     echo "Database connection success.";
    
	$sql = "select FirstName from contact.contact";

                            $resultset = pg_query($con, $sql);
                            echo $resultset;
   }
    
?>
	
