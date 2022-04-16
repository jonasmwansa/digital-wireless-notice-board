
<?php 
    if (PHP_SESSION_NONE) {session_start();}?>  <!--session initialisation-->
<html>
<style>
.card{

        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        width:1000px;
        height: 1000px;
                        
        }
    </style>
<body>
<center>

<div class="card">
<br>
        <img src="images/cbulogo.png"  width="80px" height="100px"><br>
        <a href="index.php"><img src="images/home.png" alt="go to home" style="width: 50px;height: 50px;float: left;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-bottom-right-radius: 50px;;border-top-right-radius: 50px;"></a>

        <br>
        <h1 class="card" style="width:500px;height: 90px;border-radius: 50px;font-size: 25px;color:#357ae8">
            <br>Digital Notice Board Admin Login
        </h1>
    
    <link rel="stylesheet" href="css/style.css">

<!------------------------------------->
       <?php if(!empty($_SESSION['msg'])){?>
            <link href="css/alert.css" rel="stylesheet">
                                        <div class="alert" >
                                        <span class="closebtn">&times;</span>  
                                       <?php  echo  $_SESSION['msg'];?>
                                     </div><?php }?>
    <script>
    var close = document.getElementsByClassName("closebtn");
    var i;

    for (i = 0; i < close.length; i++) {
        close[i].onclick = function(){
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function(){ div.style.display = "none"; }, 600);
        }
    }
    </script>
            
    <div class="login">
    <div class="login-triangle"></div>
  
  <h2 class="login-header">Log-In Your Account</h2>

  <form class="login-container" action="checklogin.php" method="post">
      <p><input type="text" placeholder="Username" name="username" required></p>
      <p><input type="password" placeholder="Password" name="password" required></p>
    <p><input type="submit" name="login" value="Log in"></p>
  </form>
  </div><br><br><br><?php include 'footer.php';?></div></center>
    
</body>
</html>