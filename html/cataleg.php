<?php
	require("../idiomes/ca.php");
?>

<div class="row" ng-init="posicionarTop()">

	<div class="col-lg-12">

		<div class="title-one-new text-center majus title-page">
			<h1> {{constant.categories}} </h1>
		</div>
	</div>

	<div class="col-md-12">
		<div id="breadcrumb-general" class="btn-group btn-breadcrumb">
            <a href="#" class="btn item-breadcrumb"><i class="fa fa-home"></i></a>
            <a href="" class="btn item-breadcrumb"><div>{{constant.productes}}</div></a>
            <a href="" class="btn item-breadcrumb"><div>{{constant.catalegTitol}}</div></a>
	    </div>
	</div>

</div>

<div class="container menu-cataleg-desktop">

	<div class="row" id="llista">

		<div class="col-lg-6 bloc-producte" id="p_formatges">

			<div class="col-lg-3 icon-cataleg">

				<img src="images/logo.png" class="icon-categoria">

			</div>


			<div class="col-lg-9 categoria">

				<h3><a href="" ng-click="redirectToCategory(1, constant.formatges)">{{constant.formatgesTitle}}</a></h3>

			</div>

			<div class="col-lg-3 col-md-4 subcategoria subcat-title">

				<div class="col-lg-12 col-md-12 title-subcategoria">

					<a href="" ng-click="redirectToSubCategory(1, constant.vaca)">{{constant.vacaTitle}}</a>

				</div>

				<div class="col-lg-12 col-md-12 title-subcategoria padingtop50">
					<a href="" ng-click="redirectToSubCategory(1, constant.vaca)">
					<img src="images/categories/vaca.png" class="icon-subcategoria">
					</a>

				</div>

			</div>

			<div class="col-lg-3 col-md-4 subcategoria subcat-title">

				<div class="col-lg-12 col-md-12 title-subcategoria">

					<a href="" ng-click="redirectToSubCategory(2, constant.cabra)">{{constant.cabraTitle}}</a>

				</div>

				<div class="col-lg-12 col-md-12 title-subcategoria padingtop50">
					<a href="" ng-click="redirectToSubCategory(2, constant.cabra)">
					<img src="images/categories/cabra.png" class="icon-subcategoria">
					</a>
				</div>

			</div>

			<div class="col-lg-3 col-md-4 subcategoria subcat-title">

				<div class="col-lg-12 col-md-12 title-subcategoria">

					<a href="" ng-click="redirectToSubCategory(3, constant.ovella)">{{constant.ovellaTitle}}</a>

				</div>

				<div class="col-lg-12 col-md-12 title-subcategoria padingtop50">
					<a href="" ng-click="redirectToSubCategory(3, constant.ovella)">
					<img src="images/categories/ovella.png" class="icon-subcategoria">
					</a>
				</div>

			</div>

			<div class="col-lg-9 caixa-contador pull-right text-right">
				<article>
					{{countProductsArray[8]>0 ? countProductsArray[8]+ ' ' + constant.productes2 : constant.producteNO3}}
					<i class="fa fa-th-list" aria-hidden="true"></i>
				</article>
			</div>

		</div>


		<div class="col-lg-6 bloc-producte" id="p-lactics">

			<div class="col-lg-3 icon-cataleg">
				<img src="images/logo.png" class="icon-categoria">
			</div>

			<div class="col-lg-9 categoria">
				<h3><a href="" ng-click="redirectToCategory(2, constant.productesLactics)">{{constant.altresLacticsTitle}}</a></h3>
			</div>

			<div class="col-lg-9 clear-padding">
				<a href="" ng-click="redirectToCategory(2, constant.productesLactics)">
				<img class="img-responsive cat-small" width="100%" height="200px" src="images/categories/categoria2.jpg">
				</a>
			</div>

			<div class="col-lg-9 caixa-contador pull-right text-right">
				<article>
					{{countProductsArray[7]>0 ? countProductsArray[7]+ ' ' + constant.productes2 : constant.producteNO3}}
					<i class="fa fa-th-list" aria-hidden="true"></i>
				</article>
			</div>
		</div>


		<div class="col-lg-6 bloc-producte" id="p-embotits">

			<div class="col-lg-3 icon-cataleg">
				<img src="images/logo.png" class="icon-categoria">
			</div>

			<div class="col-lg-9 categoria">
				<h3><a href="" ng-click="redirectToCategory(3, constant.embotitsCarnics)">{{constant.embotitsCarnicsTitle}}</a></h3>
			</div>

			<div class="col-lg-9 clear-padding">
				<a href="" ng-click="redirectToCategory(3, constant.embotitsCarnics)">
				<img class="img-responsive cat-small" width="100%" height="200px" src="images/categories/categoria3.jpg">
				</a>
			</div>

			<div class="col-lg-9 caixa-contador pull-right text-right">
				<article>
					{{countProductsArray[6]>0 ? countProductsArray[6]+ ' ' + constant.productes2 : constant.producteNO3}}
					<i class="fa fa-th-list" aria-hidden="true"></i>
				</article>
			</div>
		</div>


		<div class="col-lg-6 bloc-producte" id="p-mels">

			<div class="col-lg-3 icon-cataleg">
				<img src="images/logo.png" class="icon-categoria">
			</div>

			<div class="col-lg-9 categoria">
				<h3><a href="" ng-click="redirectToCategory(4, constant.melsMermelades)">{{constant.melsImermelades2}}</a></h3>
			</div>

			<div class="col-lg-9 clear-padding">
				<a href="" ng-click="redirectToCategory(4, constant.melsMermelades)">
				<img class="img-responsive cat-small" width="100%" height="200px" src="images/categories/categoria4.jpg">
				</a>
			</div>

			<div class="col-lg-9 caixa-contador pull-right text-right">
				<article>
					{{countProductsArray[5]>0 ? countProductsArray[5]+ ' ' + constant.productes2 : constant.producteNO3}}
					<i class="fa fa-th-list" aria-hidden="true"></i>
				</article>
			</div>

		</div>

		<div class="col-lg-6 bloc-producte" id="p-salses">
			<div class="col-lg-3 icon-cataleg">
				<img src="images/logo.png" class="icon-categoria">
			</div>

			<div class="col-lg-9 categoria">
				<h3><a href="" ng-click="redirectToCategory(5, constant.conservesSalses)">{{constant.conservesSalsesTitle}}</a></h3>
			</div>

			<div class="col-lg-9 clear-padding">
				<a href="" ng-click="redirectToCategory(5, constant.conservesSalses)">
				<img class="img-responsive cat-small" width="100%" height="200px" src="images/categories/categoria5.jpg">
				</a>
			</div>

			<div class="col-lg-9 caixa-contador pull-right text-right">
				<article>
					{{countProductsArray[4]>0 ? countProductsArray[4]+ ' ' + constant.productes2 : constant.producteNO3}}
					<i class="fa fa-th-list" aria-hidden="true"></i>
				</article>
			</div>

		</div>


		<div class="col-lg-6 bloc-producte" id="p-dolsal">

			<div class="col-lg-3 icon-cataleg">
				<img src="images/logo.png" class="icon-categoria">
			</div>

			<div class="col-lg-9 categoria">
				<h3><a href="" ng-click="redirectToCategory(6, constant.dolcosISalats)">{{constant.dolcISaladt2}}</a></h3>
			</div>

			<div class="col-lg-9 clear-padding">
				<a href="" ng-click="redirectToCategory(6, constant.dolcosISalats)">
				<img class="img-responsive cat-small" width="100%" height="200px" src="images/categories/categoria6.jpg">
				</a>
			</div>

			<div class="col-lg-9 caixa-contador pull-right text-right">
				<article>
					{{countProductsArray[3]>0 ? countProductsArray[3]+ ' ' + constant.productes2 : constant.producteNO3}}
					<i class="fa fa-th-list" aria-hidden="true"></i>
				</article>
			</div>

		</div>


		<div class="col-lg-6 bloc-producte" id="p-ous">

			<div class="col-lg-3 icon-cataleg">
				<img src="images/logo.png" class="icon-categoria">
			</div>

			<div class="col-lg-9 categoria">
				<h3><a href="" ng-click="redirectToCategory(7, constant.ousPasta)">{{constant.ousIpastaTitle}}</a></h3>
			</div>

			<div class="col-lg-9 clear-padding">
				<a href="" ng-click="redirectToCategory(7, constant.ousPasta)">
				<img class="img-responsive cat-small" width="100%" height="200px" src="images/categories/categoria7.jpg">
				</a>
			</div>

			<div class="col-lg-9 caixa-contador pull-right text-right">
				<article>
					{{countProductsArray[2]>0 ? countProductsArray[2]+ ' ' + constant.productes2 : constant.producteNO3}}
					<i class="fa fa-th-list" aria-hidden="true"></i>
				</article>
			</div>

		</div>


		<div class="col-lg-6 bloc-producte" id="p-begudes">

			<div class="col-lg-3 icon-cataleg">
				<img src="images/logo.png" class="icon-categoria">
			</div>

			<div class="col-lg-9 categoria">
				<h3><a href="" ng-click="redirectToCategory(8, constant.vinsCerveses)">{{constant.vinsICervesesTitle}}</a></h3>
			</div>

			<div class="col-lg-9 clear-padding">
				<a href="" ng-click="redirectToCategory(8, constant.vinsCerveses)">
				<img class="img-responsive cat-small" width="100%" height="200px" src="images/categories/categoria8.jpg">
				</a>
			</div>

			<div class="col-lg-9 caixa-contador pull-right text-right">
				<article>
					{{countProductsArray[1]>0 ? countProductsArray[1]+ ' ' + constant.productes2 : constant.producteNO3}}
					<i class="fa fa-th-list" aria-hidden="true"></i>
				</article>
			</div>

		</div>


		<div class="col-lg-6 bloc-producte" id="p-packs">

			<div class="col-lg-3 icon-cataleg">
				<img src="images/logo.png" class="icon-categoria">
			</div>

			<div class="col-lg-9 categoria">
				<h3><a href="" ng-click="redirectToCategory(9, constant.packs)">{{constant.packs2}}</a></h3>
			</div>

			<div class="col-lg-9 clear-padding">
				<a href="" ng-click="redirectToCategory(9, constant.packs)">
				<img class="img-responsive cat-small" width="100%" height="200px" src="images/categories/categoria9.jpg">
				</a>
			</div>

			<div class="col-lg-9 caixa-contador pull-right text-right">
				<article>
					{{countProductsArray[0]>0 ? countProductsArray[0]+ ' ' + constant.productes2 : constant.producteNO3}}
					<i class="fa fa-th-list" aria-hidden="true"></i>
				</article>
			</div>

		</div>

	</div>
</div>


<div class="container menu-cataleg-mobile marginbot30">

	  <button ng-click="redirectToCategory(1, constant.formatges)" class="accordion" data-toggle="collapse" data-target="#1">
	  Formatges</button>

	  <div id="1" class="subaccordion ">
	    <ul class="subaccordion-list">
	    	<li class="sub-menu" ng-click="redirectToSubCategory(1, constant.vaca)" ><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Vaca</li>
	    	<li class="sub-menu" ng-click="redirectToSubCategory(2, constant.cabra)"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Cabra</li>
	    	<li class="sub-menu" ng-click="redirectToSubCategory(3, constant.ovella)"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Ovella</li>
	    </ul>
	  </div>

	  <button ng-click="redirectToCategory(2, constant.productesLactics)" class="accordion">Altres productes làctics</button>
	  <button ng-click="redirectToCategory(3, constant.embotitsCarnics)" class="accordion">Embotits i altres carnis</button>
	  <button ng-click="redirectToCategory(4, constant.melsMermelades)" class="accordion">Mels i melmelades</button>
	  <button ng-click="redirectToCategory(5, constant.conservesSalses)" class="accordion">Conserves, salses i condiments</button>
	  <button ng-click="redirectToCategory(6, constant.dolcosISalats)" class="accordion">Dolços i salats</button>
	  <button ng-click="redirectToCategory(7, constant.ousPasta)" class="accordion">Ous, arrosos i pasta</button>
	  <button ng-click="redirectToCategory(8, constant.vinsCerveses)" class="accordion">Vins i cerveses</button>
	  <button ng-click="redirectToCategory(9, constant.packs)" class="accordion">PACKS</button>
</div>
