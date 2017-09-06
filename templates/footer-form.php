<?php
	require("../idiomes/ca.php");
?>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-xs-6 text-center">

				<div class="widget">
					<h4 class="widgetheading"> {{constant.localitzacio2}} </h4>
					<address>
						<p> <span class="name-company">EL BON GUST</span>
						<br/>
						<span class="widgets-info">
							<?php echo $adresa; ?>
							<br>
							08025 - Barcelona
						</span>
						</p>
					</address>
					<p>
						<i class="icon-phone"></i> (+34) <?php echo $telefon_botiga; ?> <br>
						<i class="icon-envelope-alt"></i>
						<a class="email-empresa" href="mailto:<?php echo $email_empresa; ?>?Subject=Contacte" target="_top"> <?php echo $email_empresa; ?> </a>
					</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-xs-6 text-center">
				<div class="widget">
					<h4 class="widgetheading"> {{constant.seccions}} </h4>
					<ul class="link-list">
						<li class="links-menu"><a href="#quisom"> {{constant.quiSom}} </a></li>
						<li class="links-menu"><a href="#noticies"> {{constant.nostresNoticies}} </a></li>
						<li class="links-menu"><a href="#cataleg-productes"> {{constant.productes}} </a></li>
						<li class="links-menu"><a href="#contacte"> {{constant.contacte2}} </a></li>
					</ul>
				</div>
			</div>

			<div id="footer-xarxes" class="col-lg-4 col-md-4 col-xs-12 text-center">
				<div class="widget">
					<h4 class="widgetheading"> {{constant.visitans}} </h4>

					<div class="col-lg-6 col-lg-offset-3">
						<ul class="social-network">
							<li>
								<a href="https://www.facebook.com/elbongustformatgeria/?ref=page_internal" target="_blank">
									<i class="fa fa-2x fa-facebook facebook"></i>
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/elbongust/" target="_blank">
									<i class="fa fa-2x fa-instagram insta"></i>
								</a>
							</li>
							<!-- <li><a href="#"><i class="fa fa-2x fa-twitter twitter"></i></a></li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div id="sub-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="copyright">
							<p>
								<span>&copy; 2016 - <?php echo date('Y'); ?> - El Bon Gust
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
