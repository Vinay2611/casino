<?php use Cake\Core\Configure;
/* if($type == 'software'){
	$heading	=	 'Devices';
} */ ?>
<div id="page-wrapper" style="min-height: 140px;">
	<div class="row">
		<?php echo  $this->Flash->render(); ?>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<h1 class="page-header"><?php echo __('Add new '.$heading); ?></h1>
		</div>
		<div class="col-lg-6">
			<?php echo $this->Html->link('Back',array('action' => 'index',$type),array('class' => 'btn btn-primary','style' => array('float: right; margin-top: 58px;'))); ?>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<div class="panel-body">
		<ul class="nav nav-tabs">
			<?php foreach($lanagauageList as $lanagauage){ ?>
				<li class="<?php echo ($lanagauage->is_default == 1) ? 'active' : '';  ?> "><a data-toggle="tab" href="#<?php echo $lanagauage->code; ?>_div" aria-expanded="true"><?php echo $lanagauage->name; ?></a></li>
			<?php } ?>
		</ul>
		<?php
		echo $this->Form->create($master,array('role' => 'form','type' => 'file'));
			echo $this->Form->hidden("type",array('value' => $type));
		if(!empty($parentMasters)){ ?>
			<div class="col-lg-12">
				<div class="form-group">
					<label>Parent</label>
					<?php echo $this->Form->select("parent_id",$parentMasters,array('class' => 'form-control','empty' => 'Select Parent','required' => false)); ?>
					<?php echo $this->Form->error("parent_id"); ?>
				</div>
			</div>
			<?php } ?>
			<div class="tab-content">
		<?php 	foreach($lanagauageList as $lanagauage){
					$code		=	$lanagauage->code;
					$required	=	 ($lanagauage->is_default == 1) ? 'required' : '' ;?>
				<div id="<?php echo $lanagauage->code; ?>_div" class="tab-pane <?php echo ($lanagauage->is_default == 1) ? 'active' : '';  ?>">
					<div class="col-lg-12">
						<h2><?php echo 'Data in '.$lanagauage->name; ?></h2>
						<div class="form-group">
							<label>Name</label>
							<?php echo $this->Form->text("_translations.".$code.'.name',array('class' => 'form-control','placesholder' => 'Nmae','required' => $required));
							echo ($lanagauage->is_default == 1) ? $this->Form->error("title") : ''; ?>
							<?php echo $this->Form->error("name"); ?>
						</div>
						<?php  if(in_array($type,Configure::read('seo_array'))){ ?>
							<div class="form-group">
								<label>Meta Title</label>
								<?php echo $this->Form->text("_translations.".$code.'.meta_title',array('required' => false,'class' => 'form-control')); ?>
								<?php echo $this->Form->error("meta_title"); ?>
							</div>
							<div class="form-group">
								<label>Meta Description</label>
								<?php echo $this->Form->text("_translations.".$code.'.meta_description',array('required' => false,'class' => 'form-control')); ?>
								<?php echo $this->Form->error("meta_description"); ?>
							</div>
					<?php } ?>
					</div>
				</div>
			<?php } ?>
			<?php if(in_array($type,Configure::read('image_array'))){ ?>
				<div class="col-lg-12">
					<div class="form-group">
						<label>Image</label>
						<?php echo $this->Form->file("image",array('required' => true)); ?>
						<span>Please upload 100X100 px image</span>
						<?php echo $this->Form->error("image"); ?>
					</div>
				</div>

			<?php } ?>
			<?php if($type == 'amenities_info'){ ?>
				<div class="col-lg-12">
					<div class="form-group">
						<label>Type</label>
						<?php echo $this->Form->select("field_type",Configure::read("field_type"),array('required' => true,'class' => 'form-control')); ?>
						<?php echo $this->Form->error("field_type"); ?>
					</div>
				</div>
			<?php } ?>
				<div class="col-lg-12">
					<button class="btn btn-default" type="submit">Save</button>
					<!-- <button class="btn btn-default" type="reset">Reset</button> -->
				</div>
			</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>
