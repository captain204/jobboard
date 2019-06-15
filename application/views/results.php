<div class="col-md-8">
	<div class="panel panel-default">	
		<div class="panel-heading panel-heading-green">
				<h6 class="panel-title"> New jobs</h6>
		</div>
		<div class="panel-body">
		<div class="panel-body">
		   	<div class="row">
		   		<?php foreach($detail as $results):?>
	        	<div class="row-details">
	        		<div class="col-md-4">
	        			<div class="title">
		          			<?php echo $results->Title;?>	
		          		</div>
	        			<img height="300" width="200" src="<?php echo base_url();?>assets/images/company/<?php echo $results->image;?>" class="thumbail">
	        		</div>
	        		<div class="col-md-8">
	        			<div class="details-description">
	        				<p class="lead text-center"><?php echo $results->company;?></p>
	        				<?php echo nl2br($results->description);?>
	        			</div>
	        		<div class="apply">
	        			<form method="post" action="<?php echo base_url();?>jobs/results">
	        				<a href="<?php echo base_url();?>jobs/apply" class="btn btn-primary">Apply now</a>
	        				<input type="hidden" name="id" value="<?php echo $results->Title;?>">
	        			</form>
			        		</div>
			        	</div> 	
	        	  </div>
        		</div>
        		<?php endforeach;?>
  			</div>
  		</div>
  	</div>
  	</div>
</body>
</html>