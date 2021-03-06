<?php 
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
 <?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap-responsive');
		echo $this->Html->css('docs');
		echo $this->Html->script('google-code-prettify/prettify');
						
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>





    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">


  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">

    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./index.html">Bootstrap</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active">
                <a href="./index.html">Home</a>
              </li>
              <li class="">
                <a href="./getting-started.html">Get started</a>
              </li>
              <li class="">
                <a href="./scaffolding.html">Scaffolding</a>
              </li>
              <li class="">
                <a href="./base-css.html">Base CSS</a>
              </li>
              <li class="">
                <a href="./components.html">Components</a>
              </li>
              <li class="">
                <a href="./javascript.html">JavaScript</a>
              </li>
              <li class="">
                <a href="./customize.html">Customize</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

<div class="jumbotron masthead">
  <div class="container">
    <h1><?php echo $title_for_layout; ?></h1>
    <p><?php echo $cakeDescription ?>:</p>
  
  </div>
</div>


<div class="actions bs-docs-social">
  <div class="container">

<?php 


echo $this->Html->getCrumbs(' / ', array(
    'text' => __('Home'),
    'url' => array('controller' => 'pages', 'action' => 'display', 'home'),
    'escape' => false
));



 ?>

  </div>
</div>


<div class="container">

<div class="page-header">
		<h1><?php echo $title_for_layout; ?></h1>
</div>
		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>

</div>


    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
      
      <?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
      
      
        <p>Designed and built with all the love in the world by <a href="http://twitter.com/mdo" target="_blank">@mdo</a> and <a href="http://twitter.com/fat" target="_blank">@fat</a>.</p>
        <p>Code licensed under <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
        <p><a href="http://glyphicons.com">Glyphicons Free</a> licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
        <ul class="footer-links">
          <li><a href="http://blog.getbootstrap.com">Blog</a></li>
          <li class="muted">&middot;</li>
          <li><a href="https://github.com/twitter/bootstrap/issues?state=open">Issues</a></li>
          <li class="muted">&middot;</li>
          <li><a href="https://github.com/twitter/bootstrap/blob/master/CHANGELOG.md">Changelog</a></li>
        </ul>
        
        
	<?php echo $this->element('sql_dump'); ?>
        
        
      </div>
    </footer>



    <!-- Le javascript
    ================================================== -->
<?php 

		echo $this->Html->script('jquery');
		echo $this->Html->script('bootstrap-transition');
		echo $this->Html->script('bootstrap-alert');
		echo $this->Html->script('bootstrap-modal');		
		echo $this->Html->script('bootstrap-dropdown');		
		echo $this->Html->script('bootstrap-scrollspy');		
		echo $this->Html->script('bootstrap-tab');		
		echo $this->Html->script('bootstrap-tooltip');		
		echo $this->Html->script('bootstrap-popover');		
		echo $this->Html->script('bootstrap-button');		
		echo $this->Html->script('bootstrap-collapse');		
		echo $this->Html->script('bootstrap-carousel');		
		echo $this->Html->script('bootstrap-typeahead');		
		echo $this->Html->script('bootstrap-affix');		
		echo $this->Html->script('holder/holder');		
		echo $this->Html->script('google-code-prettify/prettify');		
		echo $this->Html->script('application');		
				
?>


<script type="text/javascript">
$(".alert").alert()
</script>



  </body>
</html>
