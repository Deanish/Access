<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

// $cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
// $cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>Access
	</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->webroot; ?>img/favicon.jpg">
	<?php
		echo $this->Html->css('bootstrap');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body style="background-color: #C0C0C0;">

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="color: #FF2800">Access</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle glyphicon glyphicon-usd" data-toggle="dropdown"> Invoice</span></a>
          <ul class="dropdown-menu" role="menu">
            <li><?php echo $this->html->link('New Invoice', array('controller' => 'invoices', 'action' => 'add')); ?></li>            
            <li><?php echo $this->html->link('Invoices List', array('controller' => 'invoices', 'action' => 'index')); ?></li>            
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle glyphicon glyphicon-briefcase" data-toggle="dropdown"> Company</span></a>
          <ul class="dropdown-menu" role="menu">
            <li><?php echo $this->html->link('New Company', array('controller' => 'companies', 'action' => 'add')); ?></li>            
            <li><?php echo $this->html->link('Companies List', array('controller' => 'companies', 'action' => 'index')); ?></li>            
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <?php if(AuthComponent::user()) { ?>
          <a href="#" class="dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown"><?php echo " " . AuthComponent::user('firstname'); ?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><?php echo $this->html->link('Account Settings', array('controller' => 'users', 'action' => 'edit',AuthComponent::user("id"))); ?></li>
            <li><?php echo $this->html->link('All Users', array('controller' => 'users', 'action' => 'index')); ?></li>            
            <li><?php echo $this->html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?></li>            
          </ul>
          <?php } 
           else { ?>
            <li><?php echo $this->html->link('Login', array('controller' => 'users', 'action' => 'login')); ?></li>
          <?php } ?>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>

	<div class="container" style="padding-top: 70px; background-color: #FFFFFF;">
		<div id="header">
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
    <footer class="footer" style="text-align: center; padding: 10px;">
      <div class="container">
        <p class="text-muted">Copyright &copy; 2015. ACCESS</p>
      </div>
    </footer>
	<?php 
		echo $this->Html->script('jquery');
		echo $this->Html->script('bootstrap');  
	?>	
</body>
</html>
