<div class="col-md-8">
	<div class="panel panel-default">	
		<div class="panel-heading panel-heading-green">
				<h6 class="panel-title"> New jobs</h6>
		</div>
		<div class="panel-body">
		<div class="panel-body">
		   	<div class="row">
	        	<div class="row-details">
	        		<?php foreach($categories as $category):?>
	        		<div class="col-md-4">
	        			<div class="title">
		          			<?php echo $category->Title;?>	
		          		</div>
	        			<img height="300" width="200" src="<?php echo base_url();?>assets/images/company/<?php echo $category->image;?>" class="thumbail">
	        		</div>
	        	<div class="col-md-8">
	        		<div class="details-description">
	        			<p class="lead text-center"><?php echo $category->company;?></p>
	        			<?php echo nl2br($category->description);?>
	        		</div>
	        		<div class="apply">
	        			<form method="post" action="<?php echo base_url();?>jobs/apply">
	        				<a href="<?php echo base_url();?>jobs/apply" class="btn btn-primary">Apply now</a>
	        				<input type="hidden" name="id" value="<?php echo $category->Title;?>">
	        			</form>
			        		</div>
			        	</div> 	
	        	  </div>
	        	  <?php endforeach;?>
        		</div>
  			</div>
  		</div>
  	</div>
  	</div>
</body>
</html>