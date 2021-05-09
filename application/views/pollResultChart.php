<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		 <title>Poll Chart Result</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/morris.css'?>">
	</head>
	<body>
		<div class="header">
			<div class="container">
				<h3 class="heading">Poll Results</h3>
			</div>    
		</div>
		<div class="container">
			<hr>
		</div>
		<div class="container">

			<h2>Bar chart of the result:</h2>
		</div>
		<br>
		<div class="container">
				<div id="graph"></div>
			<script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
			<script src="<?php echo base_url().'assets/js/raphael-min.js'?>"></script>
			<script src="<?php echo base_url().'assets/js/morris.min.js'?>"></script>
			<script>
			   Morris.Bar({
				  element: 'graph',
				  data: <?php echo $data;?>,
				  xkey: 'Author',
				  ykeys: ['Votes'],
				  labels: ['Total Votes'],
				  barColors: ['orange']
				});
			</script>
		
			&emsp;Votes&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Authors
			<div>
				<br>
				<br>
				
				<a href="<?php echo base_url().'index.php/pollAdmin/result';?>" class="btn-primary btn" align="left"> Back	</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="<?php echo base_url().'index.php/pollAdmin/index';?>" class="btn-secondary btn" align="left">Main Page	</a>
			</div>
		</div>
	</body>
</html>
