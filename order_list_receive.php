<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width">
	<script>setTimeout(function(){window.location = document.referrer;},3000);</script><!--3秒後自動回上一頁-->
</head>



<table>
<?php 


if( $_POST['token'] == "xAD5l9weDCqKkYgZNd1ICxn4"){


	$date = $_POST['date'];
	$trucking_id = $_POST['trucking_id'];
	$carlicense = strtoupper($_POST['carlicense']);
#	$shipper_id=$_POST['shipper_id'];
	$shipper=$_POST['shipper'];
	$product=$_POST['product'];
	$quantity=$_POST['quantity'];
	$trucking_money=$_POST['trucking_money'];
	$consignee_id=$_POST['consignee_id'];
	$note=$_POST['note'];


	$sql = 'INSERT INTO fruit_database.order_list (`date`,`trucking_id`,`carlicense`,`shipper`,`product`,`quantity`,`trucking_money`,`consignee_id`,`note`) values("'.$date.'","'.$trucking_id.'","'.$carlicense.'","'.$shipper.'","'.$product.'","'.$quantity.'","'.$trucking_money.'","'.$consignee_id.'","'.$note.'")';



	include("mysql_connect.inc.php");

	if (mysqli_query($con, $sql)) {
		echo "訂單新增成功!</br>";
	} else {
		echo "Error updating record: " . mysqli_error($con);
	}
	mysqli_close($con);


  	foreach ($_POST as $key => $value) {
		echo "<tr>";
		echo "<td>";
		echo $key;
		echo "</td>";
		echo "<td>";
		echo $value;
		echo "</td>";
		echo "</tr>";
	}

    
}else{
	echo "ERROR! Wrong token!";
}
	echo $sql;
?>
</table>

<input type ="button" onclick="history.back()" value="回到上一頁"></input>
</html>
