<div class="col-md-8">
	<div class="panel panel-default">	
		<div class="panel-heading panel-heading-green">
				<h6 class="panel-title"> New jobs</h6>
		</div>
		<div class="panel-body">
		<div class="panel-body">
		   	<div class="row">
	        	<div class="row-details">
	        		<div class="col-md-4">
	        			<div class="title">
		          			<?php echo $jobs->Title;?>	
		          		</div>
	        			<img height="300" width="200" src="<?php echo base_url();?>assets/images/company/<?php echo $jobs->image;?>" class="thumbail">
	        		</div>
	        	<div class="col-md-8">
	        		<div class="details-description">
	        			<p class="lead text-center"><?php echo $jobs->company;?></p>
	        			<?php echo nl2br($jobs->description);?>
	        		</div>
	        		<div class="apply">
	        			<form method="post" action="<?php echo base_url();?>jobs/apply">
	        				<a href="<?php echo base_url();?>jobs/apply" class="btn btn-primary">Apply now</a>
	        				<input type="hidden" name="id" value="<?php echo $jobs->Title;?>">
	        			</form>
			        		</div>
			        	</div> 	
	        	  </div>
        		</div>
  			</div>
  		</div>
  	</div>
  	</div>
</body>
</html>