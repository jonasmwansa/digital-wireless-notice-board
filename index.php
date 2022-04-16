<!DOCTYPE html>
<head>
	<title>Digital Notice Board Admin Panel</title>
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet">
 <style>
 /*we Modal ( the background) */
        
 .but {
  border-radius: 4px;
  background-color: #357ae8;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 16px;
  padding: 10px;
  width: 190px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
 
.but span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.but span:after {
  content: ' To Login';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.but:hover span {
  padding-right: 70px;
}

.but:hover span:after {
  opacity: 1;
  right: 0;
}


.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 30%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

.modal-header {
    padding: 2px 16px;
    background-color: #357ae8;
    color: white;
    text-transform: capitalize;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #357ae8;
    color: white;
}</style>
	<script src="js/jquery-1.11.1.min.js"></script> 
	<script src="js/templatemo_custom.js"></script>
</head>
<center><div class="card">
    <body ><center><br>
        <img src="images/cbulogo.png" width="80px" height="100px"><br>
        </center>

	<div class="container"><br><br><br>
		<div class="menu">
				<div class="hexagon_container" id="team">
					<div class="hexagon hexagon2">
						<div class="hexagon-in1">
							<a href="login.php">
								<div class="hexagon-in2">
									<i class="fa fa-user"></i>
									<h2>LOGIN</h2>             	 	
								</div>
							</a>
						</div>
					</div>				
				</div>
			</div>
			<div id="gallery-content">
				<header>
					<h1>Digital Notice Board Admin Panel</h1>
				</header>
			</div>
	</div>
<div id="myModal" class="modal">
  <div class="modal-content">
    <div class="modal-header" ><br>
        <span onclick="document.getElementById('myModal').style.display='none'"><h1 style="float:right">X</h1></span>
<h2 style="color:white;font-size: 30px;font-family: calibri;">Digital Notice Board</h2><br>
    </div>
    <div class="modal-body" align="center"><br>
        <img src="images/welcome.jpg"width=200px" height="150px" />
        <h2 style="font-size:25px;font-family: calibri;color:#000">Please <b style="display:inline; color:crimson;">Login</b> First....</h2>
        <a href="login.php" style="display:inline"><button class="but"><span>Click Here</span></button></a>
    </div>
    <div class="modal-footer" alifn="center">
        <center><h3 style="color:white">!!!.....Welcome To All.....!!!</h3></center>
    </div>
  </div>
</div>
 
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn1 = document.getElementById("myBtn1");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");
var btn4 = document.getElementById("myBtn4");
var btn5 = document.getElementById("myBtn5");
var btn6 = document.getElementById("myBtn6");
var btn7 = document.getElementById("myBtn7");
var btn8 = document.getElementById("myBtn8");

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks the button, open the modal 
btn1.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks the button, open the modal 
btn2.onclick = function() {
    modal.style.display = "block";
}
// When the user clicks the button, open the modal 
btn3.onclick = function() {
    modal.style.display = "block";
}
// When the user clicks the button, open the modal 
btn4.onclick = function() {
    modal.style.display = "block";
}
// When the user clicks the button, open the modal 
btn5.onclick = function() {
    modal.style.display = "block";
}
// When the user clicks the button, open the modal 
btn6.onclick = function() {
    modal.style.display = "block";
}
// When the user clicks the button, open the modal 
btn7.onclick = function() {
    modal.style.display = "block";
}
// When the user clicks the button, open the modal 
btn8.onclick = function() {
    modal.style.display = "block";
}

</script>       
</body><br><br></div></center>
</html>
