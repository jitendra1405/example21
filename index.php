<!DOCTYPE html>
<html>
   
   <body class="login">
      
				<form action="index.php" method="post">
    								<input type="submit" name="someAction" value="GO" />
		
	 <?php
		if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
    		{
        		abc();
		}
	   function abc(){
		   	   $dbconn = pg_connect("host=ec2-54-225-72-238.compute-1.amazonaws.com port=5432 dbname=d1mbimqnj4bo69 user=oyymgxywhiwmff password=5fcdb5e030395d64b21992644afe083d537353d7a0653755c0a166b088a826a3");
			
                     $sql = "select firstname from contact.contact";
			    
                            $resultset = pg_query($dbconn, $sql);
                            while($row = pg_fetch_array($resultset)) {
                                
				  echo '<tr>
                                        <td>'.$row[0].'</td>
                                        
                                    </tr>'; 
                            }
				echo 'hello';
				
		               
                            pg_close($dbconn); 
	   }
?>
   </body>
</html>
