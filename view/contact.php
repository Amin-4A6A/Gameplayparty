<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Biosview</title>
>
</head>
<body>
    <div class="container">
	    <div class="row">
	    	<?php foreach ($bioscopen as $bioscoop): ?>
	    		<div class="col-4">
	    			<h5> Naam: </h5>
	    			<?php echo $bioscoop['name']; ?>
	    			<h5> Email: </h5>
	    			<?php echo $bioscoop['email']; ?>
	    			<h5> Location: </h5>
	    			<?php echo $bioscoop['location']; ?>
	    		</div>
	    	<?php endforeach; ?>
	   	</div>
    </div>
</body>
</html>