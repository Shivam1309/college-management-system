<?php
	$msg="";
	$opr="";
	if(isset($_GET['opr']))
	$opr=$_GET['opr'];
	
if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];
	
	if($opr=="del")
{
	$del_sql=mysql_query("DELETE FROM facuties_tbl WHERE faculties_id=$id");
	if($del_sql)
		$msg="1 Record Deleted... !";
	else
		$msg="Could not Delete :".mysql_error();	
			
}
	echo $msg;
?>

<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style_view.css" />
</head>

<body>
<div class="btn_pos">
        <form method="post">
            <input type="text" name="searchtxt" class="input_box_pos form-control" placeholder="Search name.." />
            <div class="btn_pos_search">
            <input type="submit" class="btn btn-primary btn-large" name="btnsearch" value="Search"/>&nbsp;&nbsp;
            <a href="?tag=faculties_entry"><input type="button" class="btn btn-large btn-primary" value="Register new" name="butAdd"/></a>
            </div>
        </form>
    </div><br><br>

<div class="table_margin">
<table class="table table-bordered">
        <thead>
            <tr>
            <th style="text-align: center;">No</th>
            <th style="text-align: center;">Faculties Name</th>
            <th style="text-align: center;" width="250px">Note</th>
            
      	    </tr>
        </thead>    
        
         <?php
		 $key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
		$sql_sel=mysql_query("SElECT * FROM facuties_tbl WHERE faculties_name  like '%$key%' ");
	else
    		$sql_sel=mysql_query("SELECT * FROM facuties_tbl");
			
			
			$i=0;
    while($row=mysql_fetch_array($sql_sel)){
    $i++;
    	?>
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $row['faculties_name'];?></td>
            <td><?php echo $row['note'];?></td>
        </tr>
    <?php	
    }
    ?>
   	</table>
</div><!--end of content_input -->
</body>
</html>