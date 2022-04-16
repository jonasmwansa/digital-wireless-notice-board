<?php 
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>dashboard menu</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="/js/bootstrap.bundle.min.js"></script>

<style>
    
        html, body{background: #ececec; height: 100%; margin: 0; font-family: Arial;
			background-image: url("images/bg3.jpeg");
			background-position: center; /* Center the image */
			background-repeat: no-repeat; /* Do not repeat the image */
    		background-size: cover; /* Resize the background image to cover the entire container */
			overflow: hidden; /* Hide scrollbars */
			}
        .main{
        	height: 100%;
			width: 100%;
        	display: flex;
        	justify-content: center;}
        .main h2{
        	text-align: center;
        	color: #4D4D4D;}
        .main .tb{
        	width: 100%;
        	height: 40px; margin-bottom: 5px;
        	padding-left: 5px;}
        .main .file_input{
        	margin-top: 10px;
        	margin-bottom: 10px;}
        .main .btn{
        	width: 100%;
        	height: 40px;
        	border: none;
        	border-radius: 3px;
        	background: #27a465;
        	color: #f7f7f7;}
        .main .msg{
        	color: red;
        	text-align: center;}
			
			.top-buffer { margin-top:180px; }

			p{
				font-family: circular, roboto, Halvetica Neue, sans-serif;
				font-size: 18px;
				line-height: 1.43;
				background-color: #fff;
				white-space: pre-wrap;
			}
    </style>
</head>
<body>
    <!-------------------Main Content------------------------------>
    <div>
		<div class="row top-buffer">
		
		<?php
			$sql = "SELECT * FROM notifications_table ORDER BY Id DESC LIMIT 2";
			$query  =$conn->query($sql);
			$count = 1;

		while($row = $query->fetch_assoc()){

			if( $row['content_type'] == 'file'){
			echo '<div class="card col-6">
				<p class="card-text" style="text-align:center;"><b>'.$row["image_name"].'</b></p>
			  <div id = "mine">
				<iframe id="if" 
					class="card-img-top" src="'.$row["image_path"]. '#toolbar=0&zoom=65" alt=""  width="700" height="750" frameborder="0">
				</iframe>
			  </div>
			</div>';
		$count++;
		}else{

			echo '<div class="card col-6">
			<p class="card-text" style="text-align:center;"><b>NOTICE</b></p>
		  	<div class="card-img-top">			
			  <p style="text-align:justify; margin:15px; text-justify: auto;" >'.$row["image_name"].'</p>
		    </div>
		</div>';
	$count++;
		}
	}
		header("refresh:30");
		?>
		</div>
    </div>
</body>
</html>
