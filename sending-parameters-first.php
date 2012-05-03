<html>
<head>
	<title>Sending Parameters</title>
</head>
<body>
	<h3>First - Sending Parameters with logpro</h3>
	<form action="logpro.php" method="POST">
		<label for="quantity">Quantity</label><br/>
		<input type="text" id="quantity" name="quantity"></input><br/>

		<label for="category">Category</label><br/>
		<input type="text" id="category" name="category"></input><br/>
		
		<input type="submit" value="Send"></input>
	</form>
</body>
</html>