<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo "Anktech Softwares" ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap-override');
		echo $this->Html->css('bootstrap-responsive');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootswatch.less');
		echo $this->Html->script('bootstrap.js');
		echo $this->Html->script('html-5.js');
		echo $this->Html->script('jquery.js');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<header>
        <div class="navbar navbar-fixed-top">
          <div class="navbar-inner">
            <div class="container">
              <img src="../app/webroot/img/logo.png" class="brand image"/>
              <a class="brand image" href="#">Bug Tracker</a>
            </div>
          </div>
        </div>
      </header>
	<div id="container">
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
	<footer id="footer" class="navbar-inner">
        <div class="row">
          <div class="span9 offset1">
            <div class="container">
              <h5>All Right Reserved
              &#169 2012 Anktech Softwares Pvt.Ltd.</h5>
            </div>
          </div>
          <div class="span2">
          </div>
        </div>
      </footer>
	</body>
</html>
