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
		<?php echo $siteDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');


		echo $this->Html->script('jquery.min');
		echo $this->Html->script('bootstrap');

		echo $this->Html->css('bootstrap');

		echo $this->Html->css('navbar');
		echo $this->Html->css('common');
		echo $this->Html->css('footer');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			
			<div id="custom-bootstrap-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="#">BLOODFORU</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">Requests</a>
                </li>
                <li><a href="#">Login/Sign Up</a>
                </li>
                <li><a href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</div>

		</div>
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>






<footer class="global-footer" role="navigation" aria-label="Footer" style="position:absolute;bottom:0px;">



			<ul class="inline-items" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
				<li><a href="/about" itemprop="url">About</a></li>
				<li><a href="/contact" itemprop="url">Contact</a></li>
				<li><a href="/about/sponsor" itemprop="url">Sponsorships</a></li>
				<li class="head-east-young-man">

					Follow us:
					<a href="/about/rss">RSS</a> ·
					<a href="/email-signup/">Email</a> ·
					<span itemscope="" itemtype="http://schema.org/Organization">
					<a href="http://www.facebook.com/" itemprop="sameAs">Facebook</a> ·
					<a href="https://plus.google.com/" rel="publisher" itemprop="sameAs">Google+</a> ·
					<a href="http://www.twitter.com/" itemprop="sameAs">Twitter</a>
					</span>

				</li>
			</ul>

			<aside class="promo-holder" aria-label="Our partners">

				<ul class="partner-promos">
					<li>
						<a href="#">
							<img src="img/cake.icon.png" alt="" data-pin-nopin="true">
							<p class="promo-title">Blodd For U</p>
							<p>here it is</p>
							<p>Donate nad receive</p>
							<p class="arrow">Start now</p>
						</a>
					</li>

				</ul>

			</aside>

			<ul class="inline-items copyright">

				<li>
					<small>Copyright © <span itemprop="copyrightYear">2016</span> <span itemprop="copyrightHolder">Blood for u &amp; Our Authors</span></small>
					<small><a href="/about/copyright">Permissions &amp; Copyright</a> · <a href="#">Log In</a> · <a href="#">Register</a></small></li>


			</ul>

		</footer>











	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
