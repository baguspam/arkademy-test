<!doctype html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="robots" content="nofollow">
		<meta name="googlebot" content="noindex">
	    <title>Soal 7 Arkademy - Bagus Pambudi</title>
	    <meta name="theme-color" content="#5D4037">
	    <meta name="Description" content="Soal nomor 7">
        <meta name="Keyword" content="Handshake | Arkademy | Soal nomor 7">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    	<link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
    </head>
<body>
<body>
	
	<div class="container table-responsive">
		<h1>Data gudang</h1>
		
		<table id="myTb" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th width="5%">id</th>
					<th>category_names</th>
					<th>products</th>
				</tr>
			</thead>
			<tbody>
			<?php
				include ("config/config.php");
				$query = "SELECT categories.id, categories.name AS name_c, GROUP_CONCAT(product.name) AS product_c, 
                COUNT(product.name) AS total FROM categories, product WHERE product.category_id = categories.id GROUP BY categories.id ";
				$sqlcon = $conn->query($query);
				while($read=mysqli_fetch_array($sqlcon)){
				echo '<tr>';
				echo '<td>'.$read['0'].'</td>';
				echo '<td>'.$read['name_c'].'</td>';
				echo '<td>'.$read['product_c'].'</td>';
				echo '<td>'.$read['total'].'</td>';
				echo '</tr>';
				}
			?>
			</tbody>
		</table>
	</div>
	
	<script src="assets/js/jquery-1.12.3.min.js"></script>
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/dataTables.bootstrap.min.js"></script>
	<script>
	$(document).ready(function() {
		$('#myTb').dataTable( {
			"bProcessing": true,
		} );
	} );
	</script>
</body>
</html>
