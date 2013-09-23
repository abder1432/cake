<?php $this->Html->addCrumb(__('Tags'), '');?>



<div class="tags index container">


	<h2><small><?php echo $this->Html->link(__('New Tag'), array('action' => 'add')); ?></small></h2>

  <div class="row-fluid search form">
  
  <?php echo $this->Form->create('Tag' , array( 'type' => 'get' , 'class' => 'form-inline pull-right')); ?> 
  <?php echo $this->Form->input('s' , array( 'label' => false , 'div' => false)); ?> 
  <?php echo $this->Form->submit(__('Search tags') , array( 'div' => false , 'class' => 'btn' )); ?> 
  <?php echo $this->Form->end(); ?>
  
  </div>  
    
    
<?php echo $this->Form->create('Tag' , array('type' => 'get')); ?> 

<div class="row-fluid">
<div class="span6">
  <?php
   echo $this->Form->input('action' , array( 
  		'type' => 'select' , 
		'label' => false , 
		'div' => false,
		'class' => 'span3',
		'empty' => __('Bulk Actions'),
		'options' => array(
			'delete' => __('Delete')
		), 
		)
		);
  ?> 
  
  <?php
   echo $this->Form->input('limit' , array( 
  		'type' => 'number' , 
		'label' => false , 
		'div' => false,
		'class' => 'span2',		
		'after' => __('Tags'),
		'default' => isset($_GET['limit']) ? $_GET['limit'] : 20, 
		)
		);
  ?>   
  <?php echo $this->Form->submit(__('Apply') , array( 'div' => false , 'class' => 'btn' )); ?> 
  

  
  
 </div>
 <div class="span6">
 
<div class="pagination  pagination-right">
    <?php echo $this->Paginator->counter(array('format' => __('{:count} items'))); ?>
    <ul> 
	<?php

        echo   $this->Paginator->first('<<' , array('tag' => 'li' , 'disabledTag' => 'a') );
		echo   $this->Paginator->prev( '<', array('tag' => 'li' , 'disabledTag' => 'a'));
		echo   $this->Paginator->numbers(array('tag' => 'li' , 'currentTag' => 'a' , 'currentClass' => 'active' , 'separator' => ''));
		echo   $this->Paginator->next( '>', array('tag' => 'li' , 'disabledTag' => 'a'));
	    echo   $this->Paginator->last('>>' , array('tag' => 'li' , 'disabledTag' => 'a'));
	?>
    </ul>
	</div>

 
 </div> 
</div>  
  
   
    
	<table class="table  table-striped" cellpadding="0" cellspacing="0">
    <thead>
	<tr>
    	<th><?php echo $this->Form->checkbox('all'); ?></th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('slug'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
    </thead>
    <tbody>
    <?php if ($tags): ?>
	<?php foreach ($tags as $tag): ?>
	<tr>
        <td><?php echo $this->Form->checkbox( "cb[" . $tag['Tag']['id'] . "]" , array( 'hiddenField' => false)); ?></td>
		<td><?php echo h($tag['Tag']['id']); ?>&nbsp;</td>
		<td><strong><?php echo h($tag['Tag']['name']); ?></strong>&nbsp;</td>
		<td><?php echo h($tag['Tag']['slug']); ?>&nbsp;</td>
		<td><?php echo h($tag['Tag']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tag['Tag']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tag['Tag']['id'])); ?>
			<?php echo $this->Html->link(__('Delete'), array('action' => 'delete', $tag['Tag']['id']), null, __('Are you sure you want to delete # %s?', $tag['Tag']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>

<?php else : ?>

<tr>
<td colspan="6"><?php echo __('No items found.'); ?></td>
</tr>

<?php endif; ?>


</tbody>

   <tfoot>
	<tr>
    <th><?php echo $this->Form->checkbox('all'); ?></th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('slug'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
    </tfoot>
    
	</table>
    
 <?php echo $this->Form->end(); ?>
 
 
    
    <div class="row-fluid">
	<div class="span6">
		
    </div>
	<div class="pagination span6  pagination-right">
    <?php echo $this->Paginator->counter(array('format' => __('{:count} items'))); ?>
    <ul> 
	<?php

        echo   $this->Paginator->first('<<' , array('tag' => 'li' , 'disabledTag' => 'a') );
		echo   $this->Paginator->prev( '<', array('tag' => 'li' , 'disabledTag' => 'a'));
		echo   $this->Paginator->numbers(array('tag' => 'li' , 'currentTag' => 'a' , 'currentClass' => 'active' , 'separator' => ''));
		echo   $this->Paginator->next( '>', array('tag' => 'li' , 'disabledTag' => 'a'));
	    echo   $this->Paginator->last('>>' , array('tag' => 'li' , 'disabledTag' => 'a'));
	?>
    </ul>
	</div>
    </div>
</div>

