<?php
	session_start();
	
	require("conection/connect.php");
	
	$msg="";
	if(isset($_POST['btn_log'])){
		$uname=$_POST['unametxt'];
		$pwd=$_POST['pwdtxt'];
		
		$sql=mysql_query("SELECT * FROM users_tbl
								WHERE username='$uname' AND password='$pwd' 
								
							");
						
		$cout=mysql_num_rows($sql);
		$row=mysql_fetch_array($sql);
		//echo $cout;
			if($cout>0){

				
					if($row['type']=='creator')
					{
						header("location: everyone.php");
					}
					else{
						header("location: everyone2.php");
					}
			}
			
			else{
					$msg="Invalid login authentication, try again!";
			}
}

?>

<!DOCTYPE html >
<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css.map"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css.map"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css"/>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/login.css" />
<title>NIT Trichy / (DBMS Project).</title>
</head>

<body style="background-color:#C7C7C7;">
	<div style="background-color:#FFFFFF;height: 70px;  display: flex;justify-content: center;align-content: center ; "><h1 style="color: black; text-align: center;"> Online Portal </h1></div>
 </div>
	<br><br>
	<img src = "images/NITT.jpg" style="float:left; margin-left:30px;" width=800 px>
	<div class="container">
    	<div class="container2">
    		<div class="h1_pos">
    			<h1 style="color:black;">Login for Staff and Students Only. </h1>
    		</div><br><br><br>
    		<form method="post">
                    <input type="text" class="form-control" name="unametxt" placeholder="Username" title="Enter username here" /><br>
                    <input type="password" class="form-control" name="pwdtxt" placeholder="Password" title="Enter username here" /><br>
    		<input type="submit" href="#" class="btn btn-default" name="btn_log" value="Sign in" style="float: right;"/>
    		
    		</form>
    	</div>
    </div>
	<br><br>
	<div style="width:200px; margin: 0px auto; ">
            <a href="AboutManagement.php" style="text-decoration: none;">About Project</a>
    </div>

        <h2 style="color: #3a28a5; text-align: center;">
            <?php echo $msg; ?>
        </h2>    
		
	
</body>
</html>