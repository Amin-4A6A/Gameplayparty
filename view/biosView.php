<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Biosview</title>
<style>
* {
    box-sizing: border-box;
}
.header {
   text-align: right;
   font-size: 63px;
}
.row::after {
    content: "";
    clear: both;
    display: table;
}
[class*="col-"] {
    float: left;
    padding: 15px;
    border: 1px solid red;
    margin-right: 1%;
    margin-bottom: 1%;
}
.col-1 {width: 7.33%;}
.col-2 {width: 15.66%;}
.col-3 {width: 24%;}
.col-4 {width: 32.33%;}
.col-5 {width: 40.66%;}
.col-6 {width: 49%;}
.col-7 {width: 57.33%;}
.col-8 {width: 65.66%;}
.col-9 {width: 74%;}
.col-10 {width: 82.33%;}
.col-11 {width: 90.66%;}
.col-12 {width: 99%;}

.container {
	padding-right: 15px;
	padding-left: 15px;
	margin-left: auto;
	margin-right: auto;
}

@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}

</style>
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