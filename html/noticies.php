<?php
	require("../idiomes/ca.php");
?>

<div class="row" ng-init="bonGustMainCtrl.getAllNews(2, currentLang); $parent.posicionarTop()">
	<div class="col-md-12">

		<!--<div class="quisomdes titol text-center">
			<h1> <?php echo $title_item2; ?> </h1>
		</div>-->
		<div class="title-one-new text-center majus title-page">
			<h1> {{constant.nostresNoticies}} </h1>
		</div>

	</div>

	<div class="col-md-12 marginbot20">
		<div id="breadcrumb-general" class="btn-group btn-breadcrumb">
            <a href="#" class="btn item-breadcrumb"><i class="fa fa-home"></i></a>
            <a href="" class="btn item-breadcrumb"><div>{{constant.nostresNoticies}} </div></a>
	    </div>
	</div>

	<div class="col-md-12 text-center margintop20 marginbot40">
		<input class="seaching" ng-model="searchText" placeholder="Busca la teva notícia...">
	</div>

	<div class="col-md-10 col-md-offset-1 title-newsletter">

		<div class="col-md-6 dinamic-box limits padingbottom40" ng-repeat="new in $parent.displayItems | filter : {titol: searchText} as filteredItems">

			<div class="col-lg-12 col-md-12 col-xs-12 underline">

				<div class="col-lg-12 col-md-12 col-xs-12">
					<h4> {{new.titol}} </h4>
				</div>

			</div>

			<div class="col-lg-4 pull-right col-md-4 col-xs-5">
				<article class="date"> {{new.data_creacio | date:'dd-MM-yy'}} <i class="fa fa-calendar" aria-hidden="true"></i> </article>
			
			</div>

			<div class="col-lg-12 col-md-12 col-xs-12 ">
				<a href="#" class="title-prod-dskt" ui-sref="noticiaDetalls({id: new.id, type: 'allNews'})" ng-click="posicionarTop()">
					<img class="news-small-r img-responsive" ng-src="images/noticies/{{new.img_noticia}}">
				</a>
			</div>

			<div class="col-lg-12 col-md-12 col-xs-12">

				<p class="box-subtitle">
					<strong>{{new.subtitol | limitTo: 150}}</strong>
				</p>

			</div>

			<div class="col-lg-12 col-md-12 col-xs-12 margintop10" ng-bind-html="new.noticia | limitTo: 200"></div>





			<div class="col-lg-12 col-md-12 col-xs-12 margintop10 text-right">
				<button class="read " ui-sref="noticiaDetalls({id: new.id, type: 'allNews'})">{{constant.seguirLlegint}}</button>
			</div>

		</div>

		<div class="col-md-12 text-center message-empty" ng-if="filteredItems.length === 0">Cap notícia trobada</div>

	</div>
	<div class="col-md-10 col-md-offset-5">
			<!-- pager -->
			<ul uib-pagination class="pagination-sm pagination" total-items="$parent.totalNewsArray.length" ng-model="$parent.page"
					 ng-change="$parent.pageChanged()" previous-text="&lsaquo;" next-text="&rsaquo;" items-per-page=4 ng-click="posicionarTop()"></ul>

			</div> <!-- End row -->
	</div>
