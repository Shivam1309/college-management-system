<?php
	session_start();
	require("conection/connect.php");
	$tag="";
	if (isset($_GET['tag']))
	$tag=$_GET['tag'];
?>

<!DOCTYPE html >
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Welcome to College Management system</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="jquery-1.11.0.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css"/>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="css/home.css" />
</head>

<body>
    
    <div class="logout_btn">
        <a href="index.php" class="btn btn-primary btn-large">Logout <i class="icon-white icon-check"></i></a>
    </div>
    
    <div class="img_home_pos">
        <a href="everyone.php"><img src="images/nittt.jpg" height="90" alt="NIT Trichy" /></a><span class="header_pos">NIT Trichy Portal</span>
    </div><br>
                        
                        <div class="dropdownmenu_container">
                            <?php        
                            include './drop_down_menu2.php';
                            ?>
                        </div>
		
		<div class="container_middle">		
			
			<div class="container_show_post">
				<?php
   						if($tag=="home" or $tag=="")
							include("home.php");
                        elseif($tag=="view_students")
                            include("View_Students2.php");
						elseif($tag=="view_teachers")
							include("View_Teachers2.php");
						elseif($tag=="view_subjects")
							include("View_Subjects2.php");
						elseif($tag=="view_scores")
							include("View_Scores2.php");
						elseif($tag=="view_users")
							include("View_Users2.php");
						elseif($tag=="view_faculties")
							include("View_Faculties2.php");
						elseif($tag=="view_location")
							include("View_location2.php");
						elseif($tag="view_artical")
							include("View_Articaly2.php");
														/*$tag= $_REQUEST['tag'];
							
							/*if(empty($tag)){
								include ("Students_Entry.php");
							}
							else{
								include $tag;
							}*/
									
                        ?>
                    </div>
		</div>                
	</div>
        
        <div class="bottom_pos">
            <a href="AboutManagement.php" style="text-decoration: none;">About management</a>
        </div>
</body>
</html>