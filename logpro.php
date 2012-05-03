<script src="js/jquery-1.3.1.js"></script>

<?php
	$quantity = $_REQUEST['quantity'];
	$category = $_REQUEST['category'];
	
	echo "Quantity in Logpro: " . $quantity;
	echo "<br/>";
	echo "Category in Logpro: " . $category;
?>

<script>
	function vaix() {
		$("#load").load('load.php', {
			'products[]': ['1','3','5'], 
			'category'  : <?php echo $category ?>, 
			'quantity'  : <?php echo $quantity ?>, 
			'email'	    : 'xpto@domain.com'
		});
	}
</script>

<div id="load"></div>

<script>
	window.setTimeout("vaix()", 3000);
</script>