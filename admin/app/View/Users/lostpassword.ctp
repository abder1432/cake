<div class="users form login">
<?php echo $this->Form->create('User' , array( 'class' => 'form-signin'));?>
<?php echo $this->Session->flash(); ?>
<?php echo $this->Session->flash('auth'); ?>

<div class="alert alert-info">  
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<p>Please enter your username or email address. You will receive a link to create a new password via email.</p>
</div>

        <?php 
		echo $this->Form->input('username' , array('label' => false, 'class' => 'input-block-level' , 'placeholder' => 'Username or E-mail:'));
        echo $this->Form->submit(__('Get New Password') , array( 'class' => 'btn btn-large btn-primary'));
	?>
    
   
<?php echo $this->Form->end();?>
</div>