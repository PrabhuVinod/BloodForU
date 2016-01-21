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

$siteDescription = __d('bloodforu_dev', 'BloodForU: A timely blood donation can save many lifes');

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $siteDescription; ?>
		<?php 
		// echo $this->fetch('title');
		 ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		
		echo $this->Html->script('jquery');
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('drawer.min');

		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap-drawer.min');
		echo $this->Html->css('custom');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body class="has-canvas">
	<div id="container">
		<div id="header">
			





<div id="drawerExample" class="drawer dw-xs-10 dw-sm-6 dw-md-4 fold" aria-labelledby="drawerExample">
        <div class="drawer-controls">
            <a href="#drawerExample" data-toggle="drawer" href="#drawerExample" aria-foldedopen="false" aria-controls="drawerExample" class="btn btn-primary btn-sm">Menu</a>
        </div>
        <div class="drawer-contents">
            <div class="drawer-heading">
                <h2 class="drawer-title">Menu</h2>
            </div>
            <div class="drawer-body">
                <p>
                    Aaaah.. I am gonna sleep... now
                </p>
                <a href="#">A Regular Link</a>
            </div>
            <ul class="drawer-nav">
                <li role="presentation" class="active"><a href="#">Home</a></li>
                <li role="presentation"><a href="#">Profile</a></li>
                <li role="presentation"><a href="#">Requests</a></li>
            </ul>
            <div class="drawer-footer">
                <small>&copy; Blood For U</small>
            </div>
        </div>
    </div>
    <div class="container">

  
</div>






		</div>
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>


        <footer class="footer">

<h1>THIS IS FOOTER</h1>
        
        </footer>


	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
