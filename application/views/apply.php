<div class="col-md-8">
			<div class="panel panel-default">	
		<div class="panel-heading panel-heading-green">
				<h6 class="panel-title text-center"> Send your application</h6>
		</div>
		<div class="panel-body">
			<div class="panel-body">
		   <div class="row">
		   		<?php echo validation_errors('<div class ="alert alert-danger">','</div>');?>
	        	<form method="post" action="<?php echo base_url();?>jobs/apply">
			        		<div class="form-group">
			        			<label>First Name*</label>
			        			<input type="text" class="form-control" name="first_name" placeholder="Enter Your name">
			        		</div>
			        		<div class="form-group">
			        			<label>Last Name*</label>
			        			<input type="text" class="form-control" name="last_name" placeholder="Enter Your name" required="required">
			        		</div>
			        		<div class="form-group">
			        			<label>Email*</label>
			        			<input type="email" class="form-control" name="email" placeholder="Enter Your email">
			        		</div>
			        		<div class="form-group">
			        			<label>Location*</label>
			        			<input type="text" class="form-control" name="location" placeholder="Enter Your location">
			        		</div>
			        		<div class="form-group">
			        			<label>Upload Cv*</label>
			        			<input type="file" class="form-control" name="cv" placeholder="Upload your cv*PDF or Word format">
			        		</div>
			        		<div class="form-group">
			        			<label>Upload cover*</label>
			        			<input type="file" class="form-control" name="cover" placeholder="Upload your cover letter*PDF or Word format">
			        		</div>
			        		<button class="btn btn-primary pull-right" name="submit">Apply</button>
			        	</form>
	        	  </div>
  		   </div>
  	</div>
  	</div>
</body>
</html>