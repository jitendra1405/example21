<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Using Heroku Postgres DB locally in PHP</title>

    <link rel="icon" href="https://jitendrazaa.com/favicon.ico" type="image/x-icon" />
     
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body class="container">
    
    <div class="page-header"> 
            <div class="text-center"> 
                  <h1>Heroku Postgres Database<small> <br/> Use it locally in PHP</small></h1>
            </div> 
       </div>    

    <div class="well">
        <h3>Prerequisite</h3>
        <ul>
            <li>Local server must be SSL enabled</li>
        </ul>
    </div> 

    <?   
    $dbconn = pg_connect("host=ec2-23-21-156-171.compute-1.amazonaws.com port=5432 dbname=daff54nelb3ps6 user=leeglxtkajgvtl password=76f29beea03eb3bd5b69672f0d292a01ae95d251957282df96e882864c969e50");

           
     ?>
     <div class="row">
         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
             
            <form method="post">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input required="true" type="tetxt" class="form-control" name="firstName" id="firstName" placeholder="First Name">
                </div>

                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input  required="true" type="tetxt" class="form-control" name="lastName" id="lastName" placeholder="Last Name">
                </div>
                 
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

         </div>
         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Key</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                    </tr>
                </thead>
                <tbody> 
                        

                            $sql = "SELECT email,lastname FROM webrtc.contact";

                            $resultset = pg_query($dbconn, $sql);
                            while($row = pg_fetch_array($resultset)) {
                                echo '<tr>
                                        <td>'.$row[0].'</td>
                                        
                                    </tr>'; 
                            }

                            pg_close($dbconn);
                        ?> 
              </tbody>
            </table>
            </div>
        </div>
    </body>
</html>
