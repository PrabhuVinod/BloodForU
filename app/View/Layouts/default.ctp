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
		echo $this->Html->script('masonry.pkgd.min');
		echo $this->Html->script('jquery.scrolling');


		
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('flatui');
		echo $this->Html->css('footer-distributed-with-address-and-phones');
		echo $this->Html->css('font-awesome.min');
		echo $this->Html->css('animate');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body class="has-canvas">
	<div id="container">
		<div id="header">
			


<nav class="navbar navbar-inverse navbar-lg navbar-embossed navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-8">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand" href="#">Blood For U</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-8">
          <ul class="nav navbar-nav navbar-right">
            <li class="active home-nav"><a href="#">Home</a></li>
            <li class="request-nav"><a href="#">Request</a></li>
            <li class="donate-nav"><a href="#">Donate</a></li>
            <li><a href="javascript:void(0);" data-placement="bottom" data-toggle="popover" data-title="Login" data-container="body" type="button" data-html="true" id="login">Login</a></li>

<div id="popover-login" class="hide">
     

          <div class="login-form login-popover-form">
            <div class="form-group">
              <input type="text" class="form-control login-field" value="" placeholder="Username" id="login-name" />
              <label class="login-field-icon fui-user" for="login-name"></label>
            </div>

            <div class="form-group">
              <input type="password" class="form-control login-field" value="" placeholder="Password" id="login-pass" />
              <label class="login-field-icon fui-lock" for="login-pass"></label>
            </div>

            <a class="btn btn-primary btn-lg btn-block" href="#">Log in</a>
            <a class="login-link" href="#">Lost your password?</a>
          </div>


</div>




            <li><a href="javascript:void(0);" data-placement="bottom" data-toggle="popover" data-title="Sign Up" data-container="body" type="button" data-html="true" id="signup">Sign Up</a></li>




<div id="popover-signup" class="hide">
     

          <div class="login-form signup-popover-form">
            <div class="form-group">
              <input type="text" class="form-control login-field" value="" placeholder="Username" id="signup-name" />
              <label class="login-field-icon fui-user" for="signup-name"></label>
            </div>

            <div class="form-group">
              <input type="password" class="form-control login-field" value="" placeholder="Password" id="signup-pass" />
              <label class="login-field-icon fui-lock" for="signup-pass"></label>
            </div>

            <div class="form-group">
              <input type="password" class="form-control login-field" value="" placeholder="Confirm Password" id="c-signup-pass" />
              <label class="login-field-icon fui-lock" for="c-signup-pass"></label>
            </div>

            <a class="btn btn-primary btn-lg btn-block" href="#">Sign Up</a>
            
          </div>


</div>







             <li class="dropdown more-nav">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-right:21px;">More <b class="caret"></b></a>
              <ul class="dropdown-menu" style="margin-right:9px;">
                <li><a href="#">About Us</a></li>
                <li><a href="#">What we do</a></li>
                <li><a href="#">Support</a></li>
                <li class="divider"></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Feedback</a></li>
              </ul>
            </li>
           </ul>
          <form class="navbar-form navbar-left" action="#" role="search">
            <div class="form-group">
              <div class="input-group">
                <input class="form-control search-nav" id="navbarInput-01" placeholder="Search" type="search">
                <span class="input-group-btn">
                  <button type="submit" class="btn"><span class="fui-search"></span></button>
                </span>
              </div>
            </div>
          </form>
          <!-- <ul class="nav navbar-nav navbar-right" style="margin-right:21px;"> -->
           
            <!-- <li><a href="#"><span class="visible-sm visible-xs">Settings<span class="fui-gear"></span></span><span class="visible-md visible-lg"><span class="fui-gear"></span></span></a></li> -->
          <!-- </ul> -->
        </div><!-- /.navbar-collapse -->
      </nav>



		</div>


		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>


<div id="footer">
<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Blood For <span>U</span></h3>

				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Gallery</a>
					·
					<a href="#">About Us</a>
					·
					<a href="#">What we do</a>
					·
					<a href="#">Contact</a>
					·
					<a href="#">Feedback</a>
				</p>

				<p class="footer-company-name">BLOODFORU &copy; 2016</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Hyderabad</span> India</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+91 8121 66 8944</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@bloodforu.com">support@bloodforu.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
		</div>

	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>

<script type="text/javascript">
	
	$("#login").popover({
    html: true, 
    trigger: 'manual',
	content: function() {
		$('#signup').popover('hide');
          return $('#popover-login').html();
        }
}).click(function(e) {
    $(this).popover('toggle');
    e.stopPropagation();
});


		$("#signup").popover({
    html: true, 
    trigger: 'manual',
	content: function() {

		$('#login').popover('hide');
          return $('#popover-signup').html();
        }
}).click(function(e) {
    $(this).popover('toggle');
    e.stopPropagation();
});


$('body').on('click','.search-nav, .home-nav, .request-nav, .donate-nav, .more-nav',function(event){
	$('#login').popover('hide');
	$('#signup').popover('hide');
});
	




</script>



<style type="text/css">
	
	.popover {max-width:400px;}

</style>

</html>


