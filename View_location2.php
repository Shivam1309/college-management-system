<?php
	$msg="";
	$opr="";
	if(isset($_GET['opr']))
	$opr=$_GET['opr'];
	
if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];
	
	if($opr=="del")
{
	$del_sql=mysql_query("DELETE FROM location_tb WHERE loca_id=$id");
	if($del_sql)
		$msg="<div style='background-color: white;padding: 20px;border: 1px solid black;margin-bottom: 25px;''>"
                . "<span class='p_font'>"
                . "1 Record Deleted... !"
                . "</span>"
                . "</div>";
	else
		$msg="Could not Delete :".mysql_error();	
			
}
	echo $msg;
?>

<!DOCTYPE html >
<html>
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
            <a href="?tag=location_entry"><input type="button" class="btn btn-large btn-primary" value="Register new" name="butAdd"/></a>
            </div>
        </form>
    </div><br><br>
            
            
<div class="table_margin">
<table class="table table-bordered">
        <thead>
            <tr>
            <th style="text-align: center;">No</th>
            <th style="text-align: center;">Location Name</th>
            <th style="text-align: center;">Description</th>
            <th style="text-align: center;">Note</th>
         
      	</tr>
        	 <?php
			 $key="";
			if(isset($_POST['searchtxt']))
				$key=$_POST['searchtxt'];
			
			if($key !="")
				$sql_sel=mysql_query("SElECT * FROM location_tb WHERE  l_name  like '%$key%' ");
			else
			 $sql_sel=mysql_query("SELECT * FROM location_tb");
			 
			 $i=0;
			while($row=mysql_fetch_array($sql_sel)){
				$i++;
			?>	 
			<tr>
				<td align="center"><?php echo $i;?></td>
				<td><?php echo $row['l_name'];?></td>
				<td><?php echo $row['description'];?></td>
                <td><?php echo $row['note'];?></td>
			</tr>
<?php
} 
?>   
    </table>
        
    </form>
        
        </div>
        
</body>
</html>