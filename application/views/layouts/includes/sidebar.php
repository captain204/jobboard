<div class="row">
  			<div class="col-md-4">
  				<div class="panel panel-default panel-list">
	          		<div class="panel-heading panel-heading-dark">
	          			<h3 class="panel-title">Categories</h3>
	          		</div>
	          		<?php foreach(get_categories_h() as $category):?>
	          		<ul class="list-group">
	          			<li class="list-group-item"><a href="<?php echo base_url();?>jobs/category/<?php echo $category->id;?>"><?php echo $category->name;?></a></li>
	          		<?php endforeach;?>
	          		</ul>
	          </div>
	          <div class="panel panel-default panel-list">
	          		<div class="panel-heading panel-heading-dark">
	          			<h3 class="panel-title">Recent Jobs</h3>
	          		</div>
	          		<?php foreach(get_recent_h() as $recent):?>
	          		<ul class="list-group">
	          			<li class="list-group-item"><a href="<?php echo base_url();?>jobs/details/<?php echo $recent->id;?>"><?php echo $recent->company;?></a><<<<strong><?php echo $recent->Title;?></strong></li>
	          		<?php endforeach;?>
	          		</ul>
	          </div>
  			</div>
  		