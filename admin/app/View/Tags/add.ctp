<?php 

$this->Html->addCrumb(__('Tags'), '/tags');
$this->Html->addCrumb(__('Add New Tag'), '');


?>


<div class="tags form">

		<h3><?php echo __('Add New Tag'); ?></h3>



<?php echo $this->Form->create('Tag'); ?>
	<?php
		echo $this->Form->input('name' , array( 
		'label' => __('Name') ,
	    'after' =>  '<div class="help-block">' . __('To reiterate, the Tag Name must be unique.') . '</div>' , 		 
		'class' => 'span4')
		);
		echo $this->Form->input('slug', array( 
		'label' => __('Slug') ,
	    'after' =>  '<div class="help-block">' . __('The Tag slug must be unique. The "slug" is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens. For example, setting a Tag Name of "Recipes" and a Tag Slug of "food" would show all "Recipes" posts with a URL like example.com/blog/food/.') . '</div>' , 		 
		 
		'class' => 'span4')
		);
		echo $this->Form->input('description', array( 
		'label' => __('Description') , 
	    'after' =>  '<div class="help-block">' . __('A description for the Tag.') . '</div>' , 
		'class' => 'span8',
		));
		echo $this->Form->submit(__('Add New Tag') , array( 'class' => 'btn btn-primary btn-large'));
		
	?>
<?php echo $this->Form->end(); ?>
</div>

