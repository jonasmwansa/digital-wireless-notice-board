<?php
session_start();
    if($_SESSION['admin']==false){
       header("location: login.php"); 
    } else
    {
        ?>

    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0"/>
        <title>Upload files</title>
        <style>
        html, body{
            background: #ececec;
            height: 100%;
            margin: 0;
            font-family: Arial;
        }
        
        .main{height: 100%; display: flex; justify-content: center;}
        .main .image-box{width:300px; margin-top: 30px;}
        .main h2{text-align: center; color: #4D4D4D;}
        .main .tb{width: 100%; height: 40px; margin-bottom: 5px; padding-left: 5px;}
        .main .file_input{margin-top: 10px; margin-bottom: 10px;}
        .main .btn{width: 100%; height: 40px; border: none; border-radius: 3px; background: #27a465; color: #f7f7f7;}
        .main .msg{color: red; text-align: center;}
    
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
    <!-------------------Main Content------------------------------>
    <div class="container main" >
	<div class="image-box">
	        <form method="POST" name="upfrm" action="" enctype="multipart/form-data">
                <div>
                    <input type="text" placeholder="Enter description " name="img-name" required class="tb" />
                    <input type="file" name="fileImg" class="file_input" required/>
                    <input type="submit" value="Upload" name="btn_upload" class="btn" />
                </div>
            </form>
            <div class="msg">
            </div>
        </div>
    </div>
    </body>
    </html>

<?php

	/*-- we included connection files--*/
	include "connection.php";

	/*--- we created a variables to display the error message on design page ------*/
	$error = "";

	if (isset($_POST["btn_upload"]) == "Upload")
	{


        $file_tmp = $_FILES["fileImg"]["tmp_name"];
		$file_name = $_FILES["fileImg"]["name"];

		/*image name variable that you will insert in database ---*/
		$image_name = $_POST["img-name"];

		//image directory where actual image will be store
		$file_path = "files/".$file_name;	

		/*---------------- php textbox validation checking ------------------*/
		if($image_name == "")
		{
			$error = "Please enter the description";
		}
		/*-------- now insertion of image section has start -------------*/
		else
		{

            if(file_exists($file_path))
			{
				$error = "Sorry,The <b>".$file_name."</b> image already exist.";
			}
			else
			{
				
				$result = mysqli_connect($servername, $username, $password) or die("Connection error: ". mysqli_error());
				mysqli_select_db($result, $dbname) or die("Could not Connect to Database: ". mysqli_error());
				mysqli_query($result,"INSERT INTO notifications_table(image_name, image_path,content_type)
				VALUES('$image_name','$file_path','file')") or die ("image not inserted". mysqli_error($result));
				move_uploaded_file($file_tmp,$file_path);
				$error = "<p align=center>File ".$_FILES["fileImg"]["name"].""."<br />Image saved into Table.";
			}
		}
	}
?>

 

        <?php
        }
?>
