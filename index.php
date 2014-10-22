<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
		<!-- Optional style-->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"/>
		<!-- Custom CS-->
		<link type="text/css" rel="stylesheet" href="main.css"/>
		<!-- Latest compiled and minified CSS -->
		<title>Learning Index</title>
		<?php
		include "Header_Linkbar.php";
		?>
	</head>
	<body>
		<div class="container">
		<div class="row" id="main">
			<?php  
			include "pageDisplay.php";
			?>



		</div>
		</div>
		<!-- Jquery -->
		<script type="text/javascript">
		$('#main').empty();
		$('#main').load('<?php echo $page?>');
		</script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
	<footer>
	<?php
	echo("Hello, I am footer");
	?> 
	</footer>
</html>