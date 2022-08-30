<?php
include("connect.php");
?>
<html>
<head>
<title>Work </title>
</head>
<body>

<div height="50px" width="50%">
  <div style="padding:60px; bold:10px;">
    <h1>Innsert products.<h1>
  </div>
</div><div height="50px" width="50%">
  <div style="padding:60px; bold:10px;">
  <form action=""  method="post">
    Name: <input type="text" name="name"><br>
	PRICE: <input type="number" name="price"><br>
	<input type="submit" name="buy">
	</form>
  </div>
</div>
<?php
if(isset($_POST['send'])){
	$n=$_POST['name'];
	$p=$_POST['price'];
	
	$f1=mysqli_query($con,"SELECT * FROM `item` where  name='".$n."' and price='".$p."'");
	while($fet=mysqli_fetch_array($f1))
	{
		echo fet['price'];
		if($fet['price']>$p){
			echo"not match";
		}
	}
if($f1){
	echo"inserted";
}
}
?>
</body>
</html>