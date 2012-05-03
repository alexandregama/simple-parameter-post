<script src="js/jquery-1.3.1.js"></script>

<div id='xx'></div>

<?php
	$quantity = $_REQUEST['quantity'];
	$category = $_REQUEST['category'];
	
	echo "Quantity in Index: " . $quantity;
	echo "<br/>";
	echo "Category in Index: " . $category; 
?>

<script>
	function logapro() {
		$('#xx').load('logpro.php');    
	}
	window.setTimeout('logapro()', 3000);
</script>
