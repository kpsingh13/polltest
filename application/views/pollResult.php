<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
     <title>AJAX CRUD APPLICATION</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/morris.css'?>">
  </head>
  <style>
  tr:nth-child(2)
{
  background-color: #ffff99;
  color:black;
}
  
  
  </style>
  <body>
  <div class="header">
    <div class="container">
        <h3 class="heading">Poll Results</h3>
    </div>    
</div>
		<div class="container" style="pading-top: 10px;">
		<div class="row">
			<div class="col-md-12">
				<?php 
				$sucess=$this->session->userdata('sucess');		
				if($sucess !=""){
				?>
				<div class="aletr alert-sucess"><?php echo $sucess;?></div>
				<?php 
				}
				?>
				<?php 
				$failure=$this->session->userdata('failure');		
				if($failure !=""){
				?>
				<div class="aletr alert-sucess"><?php echo $failure;?></div>
				<?php 
				}
				?>
			</div>
		</div>
	
	<hr>
		<div class="row">
		<div class="col-md-8">
				<table class="table table-striped">
					<tr>
						
						<th>Author Name</th>
						<th>Vote</th>
						
					</tr>
					<?php if(!empty($users)) { foreach($users as $user)
						
					{?>
					
					<tr>
						
						<td><?php echo $user['Author']?></td>
						<td><?php echo $user['Votes']?></td>
						
						
					</tr>
					<?php } } else {?>
					<tr>
						<td colspan="5">Records not found</td>
					</tr>
					<?php }?>
				</table>
			</div>
		</div>
		<br>
		<div>
			<h5>Note: The most valued option is hilighted.</h5>
		</div>
		<br>
		
		 <div >
            <a href="<?php echo base_url().'index.php/pollAdmin/chart';?>" class="btn-primary btn">Chart View</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="<?php echo base_url().'index.php/pollAdmin/Index';?>" class="btn-secondary btn">Back</a>
                      
        </div> 
		
	</div>

		

</body>
</html>