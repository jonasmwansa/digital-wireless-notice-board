
<?php
session_start();
    if($_SESSION['admin']==false){
       header("location: login.php"); //redirect to login if user is not logged in
    } else
    {
    ?>
        
<!DOCTYPE HTML>
<html>
<head>
    <title>admin dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximumscale=1">
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

nav ol li {
    list-style-type: none;
    float: left;
    height: 30px;
    line-height: 30px;
    width: auto;
    padding-left: 30px;
    padding-right: 30px;
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
<div align="center">
		<img src="images/cbulogo.png" width="100" height="130" title="school logo" alt="school logo"/>	
		<h3>THE COPPERBELT UNIVERSITY</h3>
		<h4>SCHOOL OF INFORMATION AND COMMUNICATION TECHNOLOGY</h4>
		</div>
        <nav>
			<ol>
				<a href="messages.php" class="nav-item nav-link"><li> Post Messages</li></a>
				<a href="upload-code.php" class="nav-item nav-link"><li> Post Files</li></a>
				<a href="show.php" class="nav-item nav-link"><li> View Notice</li></a>
		    	<a href="report-generation.php" class="nav-item nav-link"><li> Generate Report</li></a>                
                <a href="logout.php" class="nav-item nav-link" id="logout"><li>Logout</li></a>
			</ol>
		</nav>
        <!--a form for details-->
        <form method="post" align="center" enctype="multipart/form-data">
        <br>
            <label for="message"><b>MESSAGE</b></label>
            <textarea cols="120" rows="10" name="message" id="message" spellcheck="true" placeholder="enter your notice here">
            </textarea>
        <br>
        <br>
        <input type="submit" name="button" value="Submit" id="submittingButton"/>
    </form>
</body>
</html>

<?php
    
    //linking the database
        include "connection.php";

if(isset($_POST['button']))
{
    $textareaValue = trim($_POST['message']);
    $result = mysqli_connect($servername, $username, $password) or die("Connection error: ". mysqli_error());
     mysqli_select_db($result, $dbname) or die("Could not Connect to Database: ". mysqli_error());
                mysqli_query($result,"INSERT INTO notifications_table(image_name, image_path,content_type)
                VALUES('$textareaValue','','text')") or die ("file not inserted". mysqli_error($result));
}

?>


        <?php
    }
?>