<div class="users form login">

<?php echo $this->Form->create('User' , array( 'class' => 'form-signin'));?>
<?php echo $this->Session->flash(); ?>
<?php echo $this->Session->flash('auth'); ?>
<h2 class="form-signin-heading"><?php echo __('Please sign in');?></h2>

        <?php 
		echo $this->Form->input('username' , array('label' => false, 'class' => 'input-block-level' , 'placeholder' => 'Email address'));
        echo $this->Form->input('password' , array('label' => false, 'class' => 'input-block-level' , 'placeholder' => 'Password'));
        echo $this->Form->input('remember_me' , array('label' => __('Remember me'), 'type' => 'checkbox'));
        echo $this->Form->submit(__('Connexion') , array( 'class' => 'btn btn-large btn-primary'));
	?>
    
   
<?php echo $this->Form->end();?>
</div>