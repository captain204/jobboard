
<div class="col-md-8">
  	<div class="panel panel-default">	
        <div class="panel-heading panel-heading-green">
        				<h6 class="panel-title"> New jobs</h6>
        </div>
        <div class="panel-body">
        	<div class="panel-body">
        		<div class="row">
        		<?php foreach ( $jobs as $job):?>
			        <div class="col-md-4">
			          	<div class="jobs">
				         <div class="title">
				          	<?php echo $job->Title;?>	
				         </div>
				         <div class="job-title">
				          		<a href="<?php echo base_url();?>jobs/details/<?php echo $job->id?>">
			        				<img height="300" width="220" src="<?php echo base_url();?>assets/images/company/<?php echo $job->image;?>" class="thumbail">
			     				</a>
				          </div>
				          <div class="company">
				          		Company: <?php echo $job->company;?>	
				          </div>
				          <div class="Location">
				          	   Location: <?php echo $job->Location;?>	
				          </div>
				          <div class="view-details">
			        			<button class="btn btn-primary" type="submit">View details</button>
			        	</div>
			        	</div>
			         </div>
			     <?php  endforeach;?>
        		</div>
  			</div>
  		</div>
  	</div>
  </div>
</body>
</html>