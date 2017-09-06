<?php
//Agafem la variable del idioma
// $idioma = $_COOKIE["idioma"];

// Carreguem les variables del idioma.

	require("idiomes/ca.php");
?>

<div id="wrapper">
	<nav class="navbar navbar-right navbar-fixed-top cabecera" role="navigation">

		<div class="row customHeaderBar" id="customHeaderBar">
			<div class="info-fixed col-md-12 text-center">

				<div class="col-md-1 col-xs-3 navbar-info navbar-info-selects">
					<a class="mar-right" href="https://www.facebook.com/elbongustformatgeria/?ref=page_internal" target="_blank">
						<i class="fa fa-2x fa-facebook facebook icon-margin pad-top" aria-hidden="true"></i>
					</a>
					<a class="mar-right" href="https://www.instagram.com/elbongust/" target="_blank">
						<i class="fa fa-2x fa-instagram insta icon-margin pad-top" aria-hidden="true"></i>
					</a>
					<!---<a class="mar-right" href=""><i class="fa fa-2x fa-twitter-square twitter pad-top" aria-hidden="true"></i></a>-->
				</div>

				<div class="col-md-10 col-xs-3 text-center navbar-info pad-top-eslogan">
					<div class="col-md-5 col-xs-6 ">
						<p>
							<strong>El Bon Gust <br>
								<span class="eslogan"> {{constant.eslogan}} </span>
							</strong>
						</p>
					</div>

					<div class="col-md-3 col-xs-6 ">
						<p>
							<i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $adresa; ?>
							<br>
							<i class="fa fa-phone" aria-hidden="true"></i> <?php echo $telefon_botiga; ?>
						</p>
					</div>
				</div>

				<div class="col-md-1 col-xs-3 navbar-info navbar-info-selects pad-top">
					<div class="col-md-6 col-xs-6 border-right">
						<a href="javascript:void(0)" title="CA" class="idioma"> <img src="images/pais/cat.jpg" ng-click="changeLanguage('cat')"></a>
					</div>

					<div class="col-md-6 col-xs-6">
						<a href="javascript:void(0)" title="Pròximament" class="idioma"> <img src="images/pais/cast.jpg" ng-click="changeLanguage('cast')"> </a>
					</div>
				</div>

			</div>
		</div>

		<div class="container">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle menu-rspn" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only"> </span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a class="navbar-brand" ui-sref="/" ng-click="scrollToTopPage()">
					<img src="images/bongust_logo3.png" class="logo">
				</a>
			</div>

			<div id="menuApp" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="menu-inici"><a ui-sref="quisom" ng-click="posicionarTop()"> {{constant.quiSom}} </a></li> 
					
					<li class="menu-inici menu-mvl"><a ui-sref="cataleg" ng-click="posicionarTop()">{{constant.productes}}</a></li>
					<li class="menu-inici menu-dskt">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">{{constant.productes}} <b class="caret"></b></a>
						<ul class="dropdown-menu multi-level">
							<li class="sub-menu"><a ui-sref="cataleg">{{constant.catalegTitol}}</a></li>

							<li class="dropdown-submenu" ng-click="redirectToCategory(1, constant.formatges)">
								<a href="" class="dropdown-toggle sub-menu" data-toggle="dropdown">{{constant.formatges}}</a>
								<ul class="dropdown-menu">

									<li class="dropdown sub-menu-cat">
										<a class="sub-item" ui-sref="formatgesVaca({id: 1})" ng-click="posicionarTop()">{{constant.vaca}}</a>
										<a class="sub-item" ui-sref="formatgesCabra({id: 2})" ng-click="posicionarTop()">{{constant.cabra}}</a>
										<a class="sub-item" ui-sref="formatgesOvella({id: 3})" ng-click="posicionarTop()">{{constant.ovella}}</a>
									</li>
								</ul>
							</li>

							<li class="sub-menu"><a href="" ng-click="redirectToCategory(2, constant.productesLactics)">{{constant.altresLactics}}</a></li>
							<li class="sub-menu"><a href="" ng-click="redirectToCategory(3, constant.embotitsCarnics)">{{constant.embotitsCarnicsTitle}}</a></li>
							<li class="sub-menu"><a href="" ng-click="redirectToCategory(4, constant.melsMermelades)">{{constant.melsImermeladesTitle}}</a></li>
							<li class="sub-menu"><a href="" ng-click="redirectToCategory(5, constant.conservesSalses)">{{constant.conservesSalsesTitle}}</a></li>
							<li class="sub-menu"><a href="" ng-click="redirectToCategory(6, constant.dolcosISalats)">{{constant.dolcIsalatTitle}}</a></li>
							<li class="sub-menu"><a href="" ng-click="redirectToCategory(7, constant.ousPasta)">{{constant.ousIpastaTitle}}</a></li>
							<li class="sub-menu"><a href="" ng-click="redirectToCategory(8, constant.vinsCerveses)">{{constant.vinsICervesesTitle}}</a></li>
							<li class="sub-menu"><a href="" ng-click="redirectToCategory(9, constant.packs)">{{constant.packs}}</a></li>
						</ul>
					</li>
					<li class="menu-inici"><a ui-sref="noticies" ng-click="posicionarTop()">{{constant.nostresNoticies}}</a></li>
					<li class="menu-inici"><a ui-sref="contacte" ng-click="posicionarTop()">{{constant.contacte}}</a></li>
				</ul>
			</div>

		</div>

	</nav>
</div>
