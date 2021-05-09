<!DOCTYPE html>
<html>
<head>
    <title>AJAX CRUD APPLICATION</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">
	<script>
  function showAlert() {
    alert ("Your response recorded sucessfuly");
  }
  </script>
</head>
<body>
<form action="<?php echo base_url("index.php/pollAdmin/pollSave");?>" method="post"  id="createFrm" name="createFrm" onchange="this.form.submit()">

<div class="header">
    <div class="container">
        <h3 class="heading">Poll APPLICATION</h3>
    </div>    
</div>
	<div class="container">
		<div class="row  pt-4">
			<div class="col-md-6">
				<h4>Who is your favorite author?</h4>
			</div>
		</div>
		
			<br>
				<div class="container">
					<div class="row  pt-4">
							<label for="">Miguel de Cervantes </label>&nbsp;
							<input type="radio" name="select" id="csv" value="Miguel de Cervantes " required>
							
							&emsp; &emsp; &emsp; 
							<label for="">Charles Dickens </label>&nbsp;
							<input type="radio" name="select" id="pdf" value="Charles Dickens" >
							
							&emsp; &emsp; &emsp; 
							<label for="">J.R.R. Tolkien </label>&nbsp;
							<input type="radio" name="select" id="pdf" value="J.R.R. Tolkien" >
							
							&emsp; &emsp;&emsp; 
							<label for="">Antoine de Saint-Exuper </label>&nbsp;
							<input type="radio" name="select" id="pdf" value="Antoine de Saint-Exuper" >

					</div>              
				</div>
			<br>
			<br>
							
			<div >
				<button onclick="showAlert()" class="btn btn-primary" type="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="<?php echo base_url().'index.php/pollAdmin/result';?>" class="btn-secondary btn">Result	</a>
						  
			</div>  
    </div>
</body>
</html>