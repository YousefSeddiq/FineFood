<?php 
$db=new mysqli ('localhost','root','','finefood');
if ($db) 
	echo " Connected Successfully";
else 
  die("Unable to connect:");


 //$query= "SELECT * FROM message";
 $query= mysqli_query($db,"SELECT * FROM message");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--To make the page responsive-->

        <title>Contact us messages</title>
	<link rel="stylesheet" href="admincss/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	</head>
	<body>
	<!-- The sidebar -->
<section>
    <div class="adminsidebar">
		<a href="adminDashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>

		<a href="#analytics"><i class="fa fa-fw fa-analytic"></i> Analytics</a>

		<a href="#managecustomers"><i class="fa fa-fw fa-customer"></i> Manage Customers</a>

		<a href="mngproducts.php"><i class="fa fa-fw fa-products"></i> Manage Products</a>
		<a href="adminContact.php"><i class="fa fa-fw fa-settings"></i> reviews</a>
		<a href="adminprofiles.php"><i class="fa fa-fw fa-settings"></i> admin profiles</a>
		<a href="adminLogout.php">Logout</a>
    </div>
</section>

<!--content of the page-->
<section>
<table class="contact" >
<tr>
<th><h2>Contact Us Messages</h2></th>
</tr>
<t>
<th>Name</th>
<th>Mail</th>
<th>Message</th>
</t>
<?php 
while ($rows=mysqli_fetch_assoc($query))
{
	?>
	<tr>
	<td><?php echo $rows['username']; ?></td>
	<td><?php echo $rows['mail']; ?></td>
	<td><?php echo $rows['messageContent']; ?></td>
	</tr>
	<?php 
}
?>
</table>
</section>
		 </body>
		 </html>