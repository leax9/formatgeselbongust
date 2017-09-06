<?php
	require("../idiomes/ca.php");
?>

<section class="sections_elb" id="index">
	<div id="myCarousel" class="carousel slide" data-ride="carousel" >

		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<div class="carousel-inner">

			<div class="item active"> <img ng-src="{{imgSliderUrl}}{{imgSliderArray[0].img_slider}}" class="img-responsive" alt="First slide">

				<div class="container">
					<!-- Imatge 1 -->
					<div class="carousel-caption">
						<h1 class="titleSlider"> {{imgSliderArray[0].titol}} </h1>
						<!--<div class="box-subtitle-slider">
							<p class="text-subtitle-slider">{{imgSliderArray[0].descripcio | limitTo: 300}}</p>
						</div>-->
						<p>
							<!--<a class="btn btn-lg btn-primary" role="button" ui-sref="noticiaDetalls({id: imgSliderArray[0].id, type: 'slider'})" ng-click="posicionarTop()">Veure</a>-->
							<a class="btn btn-lg btn-primary" role="button" ui-sref="quisom" ng-click="posicionarTop()">{{constant.veure}}</a>
						</p>
					</div>
				</div>

			</div>


			<div class="item"> <img ng-src="{{imgSliderUrl}}{{imgSliderArray[1].img_slider}}" class="img-responsive" alt="Second slide">

				<div class="container">
					<!-- Imatge 2 -->
					<div class="carousel-caption">
						<h1 class="titleSlider"> {{imgSliderArray[1].titol}} </h1>
						<!--<div class="box-subtitle-slider">
							<p class="text-subtitle-slider">{{imgSliderArray[1].descripcio | limitTo: 300}}</p>
						</div>-->
						<p>
							<!--<a class="btn btn-lg btn-primary" role="button" ui-sref="noticiaDetalls({id: imgSliderArray[1].id, type: 'slider'})" ng-click="posicionarTop()">Veure</a>-->
						</p>
					</div>
				</div>

			</div>


			<div class="item"> <img ng-src="{{imgSliderUrl}}{{imgSliderArray[2].img_slider}}" class="img-responsive" alt="Third slide">

                <div class="container">
                    <!-- Imatge 3 -->
                    <div class="carousel-caption">
						<h1 class="titleSlider"> {{imgSliderArray[2].titol}} </h1>
						<!--<div class="box-subtitle-slider">
							<p class="text-subtitle-slider">{{imgSliderArray[2].descripcio | limitTo: 300}}</p>
						</div>-->
						<p>
							<!--<a class="btn btn-lg btn-primary" role="button" ui-sref="noticiaDetalls({id: imgSliderArray[2].id, type: 'slider'})" ng-click="posicionarTop()">Veure</a>-->
						</p>
					</div>
				</div>

			</div>


		</div>

		<!-- Imatge anterior -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left gold"></span>
		</a>

		<!-- Imatge posterior -->
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right gold"></span>
		</a>

	</div>
</section>

<div class="col-lg-12 col-md-12 col-xs-12">
	<div class="col-md-12 text-center seccio_generica">
		<article> {{constant.novetatsIPromocionsTitle}} </article>
	</div>
</div>

<section class="sections_elb" id="news">
	<div class="row">
		<div class="col-md-12 col-xs-12 text-center">

			<div class="col-md-4 col-xs-12 text-center box-news-index" ng-repeat="image in imgNewsArray">
				<!-- Títol i descripció curta -->
				<div class="col-md-12 marginbot20 box-title">
					<!--<p class="title_box"><a ui-sref="noticiaDetalls({id: image.id, type: 'noticia'})" ng-click="posicionarTop()"> {{image.titol}} </a></p>-->
					<p class="title_box"><a href="#/{{image.descripcio}}" ng-click="posicionarTop()"> {{image.titol}} </a></p>
				</div>
				<div class="col-md-12" >
					<!--<a ui-sref="producteDetalls({id: image.descripcio, type: 'producte'})">
						<img class="news_circle" ng-src="{{imgNewUrl}}{{image.img_noticia}}">
					</a>-->
					<a href="#/{{image.descripcio}}">
						<img class="news_circle" ng-src="{{imgNewUrl}}{{image.img_noticia}}">
					</a>

				</div>
				<!--<div class="col-md-12" >
					<p class="resum_box">
						 {{image.descripcio | limitTo: 150}}
					</p>
				</div>
				-->
			</div>
		</div>
	</div>
</section>
