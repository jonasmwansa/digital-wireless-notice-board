<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web report</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>

nav {
    display: flex;
    font-weight: 200;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    width: 100%;
    vertical-align: middle;
    height: auto;
    line-height: 30px;
    background-color: lightblue;
    clear: both;
}

/*customisation of each of the listed item in the navigation bar*/
nav ol li{
    list-style-type: none;
    float: left;
    line-height: 30px;
    width: auto;
    padding-left: 10px;
    padding-right: 10px;
    text-align: center;
}


/*customisation the of the links in the navigation bar*/

nav a {
    text-decoration: none;
    color: gray;
}

nav a li:link {
    color: white;
    background-color: orange;
}



nav a li:hover {
    color: black;
    background-color: orange;
    border-radius: 10px;
    transition: .5s all ease-in-out;
}

nav a li:active {
    color: black;
    background-color: orange;
    border-bottom: 2px solid black;
}

#logout{
    float: right;
}
    #submittingButton {
      background-color: #4CAF50; /* Green */
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      width: 50%;
   }
 
</style>

</head>
<body>
<div class="navbar">
    <img src="images/cbulogo.png" width="100" height="130" title="school logo" alt="school logo"/>	
		<h3>THE COPPERBELT UNIVERSITY</h3>
		<h4>SCHOOL OF INFORMATION AND COMMUNICATION TECHNOLOGY</h4>
		
        <nav>
			<ol>
				<a href="messages.php" class="nav-item nav-link"><li> Post Messages</li></a>
				<a href="upload-code.php" class="nav-item nav-link"><li> Post Files</li></a>
				<a href="show.php" class="nav-item nav-link"><li> View Notice</li></a>
		    	<a href="report.php" class="nav-item nav-link"><li> Generate Report</li></a>                
                <a href="logout.php" class="nav-item nav-link" id="logout"><li>Logout</li></a>
			</ol>
		</nav>
</div>
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>WEB REPORT OF NOTICES</h4>
                    </div>
                    <div class="card-body">
                        <form method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>From Date</label>
                                        <input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>To Date</label>
                                        <input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <br>
                                      <button type="submit" class="btn btn-primary">generate report</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-borderd">
                            <thead>
                                <tr>
                                    <th>NUMBER</th>
                                    <th>NOTICE TITLE</th>
                                    <th>TIME</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                            
                            <?php 
                                include "connection.php";
                                if(isset($_GET['from_date']) && isset($_GET['to_date']))
                                {
                                    $from_date = $_GET['from_date'];
                                    $to_date = $_GET['to_date'];

                                    $result = mysqli_connect($servername, $username, $password) or die("Connection error: ". mysqli_error());
                                    mysqli_select_db($result, $dbname) or die("Could not Connect to Database: ". mysqli_error());

                                    $query = "SELECT * FROM notifications_table WHERE Dates BETWEEN '$from_date' AND '$to_date' ";
                                    $query_run = mysqli_query($result, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row['Id']; ?></td>
                                                <td><?= $row['image_name']; ?></td>
                                                <td><?= $row['Dates']; ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "No Record Found";
                                    }
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>