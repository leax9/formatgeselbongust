$('#infoModal').modal({
  show: 'false'
});


//Application module.
var bonGustApp = angular.module('bonGustAppManagement', ['ui.bootstrap', 'ngMaterial', 'ngFileUpload', "checklist-model", 'ui.router', 'ngMessages', 'material.svgAssetsCache', 'ngSanitize', 'ngAnimate', 'cp.ngConfirm']);

bonGustApp.run(['$state', function ($state) {
  $state.transitionTo('/');
}]);

// Constants used only by the sales module
bonGustApp.constant('languageConstants', {
  catala: {
    localitzacio2: 'LOCALITZACIÓ ',
    seccions: 'SECCIONS',
    visitans: 'VISITA\'NS',
    veure: 'VEURE',
    eslogan: 'Productes de la nostra terra!',
    categories: 'CATEGORIES',
    catalegTitol: 'CATÀLEG',
    productes: 'PRODUCTES',
    productes2: 'productes',
    dubte: 'Qualsevol dubte i/o informació poseu-vos en contacte amb nosaltres, a través de',
    localitzacio: 'Localització',
    onTrobarnos: 'ON TROBAR-NOS',
    nostresNoticies: 'LES NOSTRES NOTICIES',
    coneixnos: 'CONEIX-NOS',
    noticiaDetalls: 'noticiaDetalls',
    noticia: 'NOTICIA',
    embotitsCarnicsTitle: 'Embotits i altres càrnics',
    producteDetalls: 'producteDetalls',
    producte: 'producte',
    dolçISalatTitle: 'Dolç i Salat',
    formatges: 'formatges',
    formatgesTitle: 'Formatges',
    cabra: 'cabra',
    cabraTitle: 'Cabra',
    ovella: 'ovella',
    ovellaTitle: 'Ovella',
    vaca: 'vaca',
    vacaTitle: 'Vaca',
    preu: 'PREU',
    conservesSalsesTitle: 'Conserves, salses i condiments',
    altresLactics: 'ALTRES LÀCTICS',
    altresLacticsTitle: 'Altres productes làctics',
    formatgesCabra: 'formatgesCabra',
    formatgesOvella: 'formatgesOvella',
    formatgesVaca: 'formatgesVaca',
    embotitsICarnics: 'embotitsICarnics',
    embotitsCarnics: 'embotits-i-carnis',
    conservesIsalses: 'conservesIsalses',
    conservesSalses: 'conserves-i-salses',
    productesLactics: 'productesLactics',
    productesILactics: 'productes-lactics',
    melsImermelades: 'melsImermelades',
    melsImermeladesTitle: 'mels I mermelades',
    melsImermelades2: 'Mels i melmelades',
    melsMermelades: 'mels-i-mermelades',
    novetatsIPromocionsTitle: 'NOVETATS I PROMOCIONS',
    dolcIsalat: 'dolcIsalat',
    dolcIsalatTitle: 'dolç I salat',
    dolcosISalats: 'dolcos-i-salats',
    dolcISaladt2: 'Dolços i Salats',
    pack: 'pack',
    packs: 'packs',
    packs2: 'PACKS',
    packDetalls: 'packDetalls',
    ousIpasta: 'ousIpasta',
    ousIpastaTitle: 'Ous, arròs i pasta',
    ousPasta: 'ous-i-pasta',
    vinsICerveses: 'vinsICerveses',
    vinsCerveses: 'vins-i-cerveses',
    vinsICervesesTitle: 'Vins i Cerveses',
    noticies: 'noticies',
    contacte: 'contacte',
    contacte2: 'CONTACTE',
    quisom: 'quisom',
    quiSom: 'QUI SOM?',
    cataleg: 'cataleg',
    producteNO: 'Cap producte trobat',
    producteNO2: 'No hi ha cap producte disponible ...',
    producteNO3: 'Cap producte disponible',
    catalegProductes: 'cataleg-productes'
  },
  castellano: {
    veure: 'VER',
    localitzacio2: 'LOCALIZACIÓN',
    localitzacio: 'Localización',
    seccions: 'SECCIONES',
    visitans: 'VISITANOS',
    eslogan: 'Productos de nuestra tierra!',
    categories: 'CATEGORÍAS',
    catalegTitol: 'CATÁLOGO',
    productes: 'PRODUCTOS',
    productes2: 'productos',
    dubte: 'Cualquier duda y/o información poneos en contacto con nosotros, a través de',
    //localitzacio: 'Localización',
    onTrobarnos: 'DONDE ENCONTRARNOS',
    dolçISalatTitle: 'Dulce y Salado',
    conservesSalsesTitle: 'Conservas, salsas y condimentos',
    nostresNoticies: 'NUESTRAS NOTICÍAS',
    noticia: 'NOTÍCIA',
    embotitsCarnicsTitle: 'Embutidos y otros cárnicos',
    coneixnos: 'CONÓCENOS',
    noticiaDetalls: 'noticiaDetalles',
    producteDetalls: 'productoDetalles',
    dolcIsalatTitle: 'dulce y salado',
    producte: 'producte',
    formatges: 'quesos',
    formatgesTitle: 'Quesos',
    cabra: 'cabra',
    cabraTitle: 'Cabra',
    ovella: 'oveja',
    ovellaTitle: 'Oveja',
    vaca: 'vaca',
    preu: 'PRECIO',
    vacaTitle: 'Vaca',
    altresLactics: 'OTROS LÁCTEOS',
    altresLacticsTitle: 'Otros productos lácteos',
    formatgesCabra: 'quesosCabra',
    formatgesOvella: 'quesosOveja',
    formatgesVaca: 'quesosVaca',
    embotitsICarnics: 'embutidoICarnicos',
    embotitsCarnics: 'embutidos-y-carnicos',
    conservesIsalses: 'conservasIsalsas',
    conservesSalses: 'conservas-y-salsas',
    productesLactics: 'productosLacticos',
    productesILactics: 'productos-lacticos',
    ousIpastaTitle: 'Huevos, arroz y pasta',
    melsImermelades: 'mielImermeladas',
    melsImermeladesTitle: 'mieles Y mermeladas',
    melsMermelades: 'mieles-y-mermeladas',
    melsImermelades2: 'Mieles i mermeladas',
    novetatsIPromocionsTitle: 'NOVEDADES Y PROMOCIONES',
    dolcIsalat: 'dulceYsalat',
    dolcosISalats: 'dulce-y-salado',
    dolcISaladt2: 'Dulces y Salados',
    pack: 'pack',
    packs: 'packs',
    packs2: 'PACKS',
    packDetalls: 'packDetalles',
    ousIpasta: 'huevosYpasta',
    ousPasta: 'huevos-y-pasta',
    vinsICerveses: 'vinosYCervezas',
    vinsCerveses: 'vinos-y-cervezas',
    vinsICervesesTitle: 'Vinos y Cervezas',
    noticies: 'noticias',
    contacte: 'contacto',
    contacte2: 'CONTACTO',
    quisom: 'quiensomos',
    quiSom: 'QUIÉN SOMOS?',
    cataleg: 'catalogo',
    producteNO: 'Ningún producto encontrado',
    producteNO2: 'No hay ningún producto disponible ...',
    producteNO3: 'Ningún producto disponible',
    catalegProductes: 'catalago-productos'
  }
});

bonGustApp.service('bonGustService', function () {

  var fromState;
  var categoryId;

  var setFromState = function (state) {
    fromState = state;
  };

  var getFromState = function () {
    return fromState;
  };

  var getCategoryId = function () {
    return categoryId;
  };

  var setCategoryId = function (idCat) {
    categoryId = idCat;
  };

  return {
    getFromState: getFromState,
    setFromState: setFromState,
    getCategoryId: getCategoryId,
    setCategoryId: setCategoryId
  };

});

bonGustApp.config(['$httpProvider', '$stateProvider', '$urlRouterProvider', 'languageConstants', function ($httpProvider, $stateProvider, $urlRouterProvider, languageConstants) {
  var constant = {};

  if (localStorage.getItem("language") === 'cat') {
    constant = languageConstants.catala;
  } else {
    constant = languageConstants.castellano;
  }

  console.log(constant);
  $stateProvider.state('padre', {
    abstract: true,

    templateUrl: "templates/index-template.php",

    /*controller: 'bonGustSessionController'*/
  }).state('/', {

    url: '/',
    parent: 'padre',
    templateUrl: "index.html",
    /*controller: 'bonGustMainController'*/
  }).state('login', {
    url: '/login',
    templateUrl: "html/login.html",
    controller: 'bonGustSessionController'
  }).state('dashboard', {
    url: '/dashboard',
    templateUrl: "html/dashboard.html",
    controller: 'bonGustSessionController'
  }).state('noticiaDetalls', {
    url: '/' + constant.noticiaDetalls + '/:id',
    templateUrl: "html/noticia.html",
    controller: 'noticiaDetallsController',
    params: {
      type: null
    }
  }).state('producteDetalls', {
    url: '/' + constant.producte + '/:id',
    templateUrl: "html/producte.html",
    controller: 'producteDetallsController'

  }).state('formatges', {
    url: '/' + constant.formatges + '/:id',
    templateUrl: "html/cataleg_categoria.html",
    controller: 'categoriaDetallsController',
    controllerAs: 'categoriaDetallsCtrl'

  }).state('formatgesCabra', {
    url: '/' + constant.formatges + '/' + constant.cabra + '/:id',
    templateUrl: "html/cataleg_categoria.html",
    controller: 'subCategoriaDetallsController'

  }).state('formatgesOvella', {
    url: '/' + constant.formatges + '/' + constant.ovella + '/:id',
    templateUrl: "html/cataleg_categoria.html",
    controller: 'subCategoriaDetallsController'

  }).state('formatgesVaca', {
    url: '/' + constant.formatges + '/' + constant.vaca + '/:id',
    templateUrl: "html/cataleg_categoria.html",
    controller: 'subCategoriaDetallsController'

  }).state('embotitsICarnics', {
    url: '/' + constant.embotitsCarnics + '/:id',
    templateUrl: "html/cataleg_categoria.html",
    controller: 'categoriaDetallsController'

  }).state('conservesIsalses', {
    url: '/' + constant.conservesSalses + '/:id',
    templateUrl: "html/cataleg_categoria.html",
    controller: 'categoriaDetallsController'

  }).state('productesILactics', {
    url: '/' + constant.productesLactics + '/:id',
    templateUrl: "html/cataleg_categoria.html",
    controller: 'categoriaDetallsController'

  }).state('melsImermelades', {
    url: '/' + constant.melsMermelades + '/:id',
    templateUrl: "html/cataleg_categoria.html",
    controller: 'categoriaDetallsController'

  }).state('dolcIsalat', {
    url: '/' + constant.dolcosISalats + '/:id',
    templateUrl: "html/cataleg_categoria.html",
    controller: 'categoriaDetallsController'

  }).state('pack', {
    url: '/' + constant.packs + '/:id',
    templateUrl: "html/cataleg_categoria.html",
    controller: 'categoriaDetallsController'

  }).state('packDetalls', {
    url: '/' + constant.pack + '/:id',
    templateUrl: "html/packs.html",
    controller: 'producteDetallsController'

  }).state('ousIpasta', {
    url: '/' + constant.ousPasta + '/:id',
    templateUrl: "html/cataleg_categoria.html",
    controller: 'categoriaDetallsController'

  }).state('vinsICerveses', {
    url: '/' + constant.vinsCerveses + '/:id',
    templateUrl: "html/cataleg_categoria.html",
    controller: 'categoriaDetallsController'

  }).state('noticies', {
    url: '/' + constant.noticies,
    templateUrl: "html/noticies.php",
    controller: 'bonGustMainController'
  }).state('contacte', {
    url: '/' + constant.contacte,
    templateUrl: "html/contacte.php",
    controller: 'bonGustMainController'
  }).state('quisom', {
    url: '/' + constant.quisom,
    templateUrl: "html/quisom.php",
    controller: 'bonGustMainController'
  }).state('cataleg', {
    url: '/' + constant.catalegProductes,

    templateUrl: "html/cataleg.php",
    controller: 'bonGustMainController'
  });

  $urlRouterProvider.otherwise('/');
}]);

bonGustApp.controller("noticiaDetallsController", function ($scope, $sce, Upload, $timeout, $window, $stateParams, $location, $state, languageConstants) {
  //Agafem el id de la ruta per poder mostrar els detalls de la noticia que volem veure.
  //s'ha de fer servir $stateParams per poder agafar el id amb el mateix nom que esta definit al .config
  $scope.selectedNewID = $stateParams.id;
  //alert($scope.imgSliderArray);

  var currentLang = localStorage.getItem("language");
  if (currentLang == 'cat') { //0 cat 1 cast
    // $scope.constant = languageConstants.catala;
    currentLang = 0;
  } else {
    //$scope.constant = languageConstants.castellano;
    currentLang = 1;
  }

  $scope.posicionarTop = function (opt) {

    $window.scrollTo(0, 0);
    var amplada = $(window).width();
    if (amplada <= 768) {
      $(".navbar-collapse").removeClass("in");
    }
  };

  getNewSelected(currentLang);

  function getNewSelected(currentLang) {
    var outPutData = [];
    $.ajax({
      url: "php/control/control.php",
      type: "POST",
      data: "action=10100&id=" + $scope.selectedNewID + "&language=" + currentLang,
      dataType: "json",
      beforeSend: function () {
        //$("#loadDiv").css("display","block");
      },
      complete: function () {

        // $('#loadDiv').css("display","none");
      },
      async: false,
      success: function (response) {
        outPutData = response;
      },
      error: function (xhr, ajaxOptions, thrownError) {
        //alert("There has been an error while connecting to the server, try later");
        console.log(xhr.status + "\n" + thrownError);
      }
    });

    if (outPutData[0]) {

      $scope.newObject = new newsObj();

      var s = "/";
      //outPutData[1].data_noticia = outPutData[1].data_noticia.replace("/","-");
      outPutData[1].actiu = (outPutData[1].actiu == 1) ? true : false;
      $scope.newObject.construct(outPutData[1].id, outPutData[1].seccio, outPutData[1].titol, outPutData[1].subtitol, outPutData[1].descripcio, outPutData[1].noticia, "images/noticies/" + outPutData[1].img_slider, "images/noticies/" + outPutData[1].img_noticia, outPutData[1].data_creacio.split("/").join("-"), outPutData[1].data_noticia.split("/").join("-"), outPutData[1].actiu, outPutData[1].usuari);
    } else console.log("Error");
  }


});

bonGustApp.controller("producteDetallsController", function ($scope, $sce, Upload, $timeout, $window, $stateParams, $location, $state, bonGustService) {
  //Agafem el id de la ruta per poder mostrar els detalls del producte que volem veure.
  //s'ha de fer servir $stateParams per poder agafar el id amb el mateix nom que esta definit al .config
  var vm = this;
  $scope.selectedNewID = $stateParams.id;
  $scope.fromState = bonGustService.getFromState();
  $scope.fromCategoryId = bonGustService.getCategoryId();
  $scope.redirectState = function () {
    $state.go($scope.fromState, { "id": $scope.fromCategoryId });
  }
  $scope.posicionarTop = function () {
    $window.scrollTo(0, 0);
    var amplada = $(window).width();

    if (amplada <= 768) {
      $(".navbar-collapse").removeClass("in");
    }
  };
});

bonGustApp.controller("categoriaDetallsController", function ($scope, $sce, Upload, $timeout, $window, $stateParams, $location, $state, bonGustService) {
  //Agafem el id de la ruta per poder mostrar els detalls de la noticia que volem veure.
  //s'ha de fer servir $stateParams per poder agafar el id amb el mateix nom que esta definit al .config
  var vm = this;
  var currentState = $state.current.name;
  $scope.selectedCategoryID = $stateParams.id;
  $scope.totalProductsArray = [];
  bonGustService.setFromState(currentState); //seteamos el estado que queremos recuperar en la siguiente pantalla de detalles producto.
  bonGustService.setCategoryId($stateParams.id);
  vm.currentLang = localStorage.getItem("language"); //recollim idioma de cache
  if (vm.currentLang == 'cat') { //0 cat 1 cast
    vm.currentLang = 0;
  } else {
    vm.currentLang = 1;
  }
  $scope.posicionarTop = function () {
    $window.scrollTo(0, 0);
    var amplada = $(window).width();

    if (amplada <= 768) {
      $(".navbar-collapse").removeClass("in");
    }
  };

  $scope.showCategoryTitle = function (categoryId) {

    for (var i = 0; i < $scope.categoriesArray.length; i++) {
      if (categoryId == $scope.categoriesArray[i].id) {
        $scope.categoryObject = $scope.categoriesArray[i];
      }
    }
  };

  getCategoryProducts(vm.currentLang);

  function getCategoryProducts(language) {
    var outPutData = [];
    $.ajax({
      url: "php/control/control.php",
      type: "POST",
      data: "action=10120&catId=" + $scope.selectedCategoryID + "&language=" + language,
      dataType: "json",
      beforeSend: function () {
        //$("#loadDiv").css("display","block");
      },
      complete: function () {

        // $('#loadDiv').css("display","none");
      },
      async: false,
      success: function (response) {
        outPutData = response;
      },
      error: function (xhr, ajaxOptions, thrownError) {
        //alert("There has been an error while connecting to the server, try later");
        console.log(xhr.status + "\n" + thrownError);
      }
    });

    if (outPutData[0]) {
      for (var k = 0; k < outPutData[1].length; k++) {
        $scope.productObject = new productObj();
        $scope.productObject.construct(outPutData[1][k].id, outPutData[1][k].codi, outPutData[1][k].categoria, outPutData[1][k].subcategoria, outPutData[1][k].nom, outPutData[1][k].info, outPutData[1][k].imatge, outPutData[1][k].descripcio, outPutData[1][k].preu, outPutData[1][k].tipus, outPutData[1][k].actiu, outPutData[1][k].data_creacio.split("/").join("-"), outPutData[1][k].usuari);
        $scope.totalProductsArray.push($scope.productObject);
      }

      $scope.page = 1;
      $scope.displayItems = $scope.totalProductsArray.slice(0, 6);

      $scope.pageChanged = function () {
        var startPos = ($scope.page - 1) * 6;
        $scope.displayItems = $scope.totalProductsArray.slice(startPos, startPos + 6);

      };
    } else console.log("Error");
  }
});

bonGustApp.controller("subCategoriaDetallsController", function ($scope, $sce, Upload, $timeout, $window, $stateParams, $location, $state, bonGustService) {
  //Agafem el id de la ruta per poder mostrar els detalls de la noticia que volem veure.
  //s'ha de fer servir $stateParams per poder agafar el id amb el mateix nom que esta definit al .config
  var vm = this;
  $scope.selectedCategoryID = 1;
  vm.selectedSubCategoryID = $stateParams.id;
  var currentState = $state.current.name;
  bonGustService.setFromState(currentState); //seteamos el estado que queremos recuperar en la siguiente pantalla de detalles producto.
  bonGustService.setCategoryId($stateParams.id);
  //console.log(vm.selectedCategoryID);

  vm.currentLang = localStorage.getItem("language"); //recollim idioma de cache
  if (vm.currentLang == 'cat') { //0 cat 1 cast
    vm.currentLang = 0;
  } else {
    vm.currentLang = 1;
  }

  $scope.posicionarTop = function () {
    $window.scrollTo(0, 0);
    var amplada = $(window).width();

    if (amplada <= 768) {
      $(".navbar-collapse").removeClass("in");
    }
  };

  $scope.showCategoryTitle = function (categoryId) {

    for (var i = 0; i < $scope.categoriesArray.length; i++) {
      if (categoryId == $scope.categoriesArray[i].id) {
        $scope.categoryObject = $scope.categoriesArray[i];
      }
    }
  };

  getSubCategoryProducts(vm.currentLang);

  function getSubCategoryProducts(language) {
    console.log("entra");
    var outPutData = [];
    $.ajax({
      url: "php/control/control.php",
      type: "POST",
      data: "action=10110&subCat=" + vm.selectedSubCategoryID + "&language=" + language,
      dataType: "json",
      beforeSend: function () {
        //$("#loadDiv").css("display","block");
      },
      complete: function () {

        // $('#loadDiv').css("display","none");
      },
      async: false,
      success: function (response) {
        outPutData = response;
      },
      error: function (xhr, ajaxOptions, thrownError) {
        //alert("There has been an error while connecting to the server, try later");
        console.log(xhr.status + "\n" + thrownError);
      }
    });

    if (outPutData[0]) {

      $scope.totalProductsArray = [];
      /*$scope.activeCheckboxSliderArrayNews = [];*/
      for (var k = 0; k < outPutData[1].length; k++) {
        $scope.productObject = new productObj();
        $scope.productObject.construct(outPutData[1][k].id, outPutData[1][k].codi, outPutData[1][k].categoria, outPutData[1][k].subcategoria, outPutData[1][k].nom, outPutData[1][k].info, outPutData[1][k].imatge, outPutData[1][k].descripcio, outPutData[1][k].preu, outPutData[1][k].tipus, outPutData[1][k].actiu, outPutData[1][k].data_creacio.split("/").join("-"), outPutData[1][k].usuari);

        $scope.totalProductsArray.push($scope.productObject);

      }

      $scope.page = 1;
      $scope.displayItems = $scope.totalProductsArray.slice(0, 6);

      $scope.pageChanged = function () {
        var startPos = ($scope.page - 1) * 6;
        $scope.displayItems = $scope.totalProductsArray.slice(startPos, startPos + 6);
      }
      //console.log($scope.totalProductsArray.length);
      //console.log($scope.productObject);
    } else console.log("Error");
    $scope.subCategory = new subcategoryObj();
    $scope.subCategory.construct(outPutData[2][0].id, outPutData[2][0].ca_nom, outPutData[2][0].es_nom, outPutData[2][0].id_categoria);
  }
});



bonGustApp.controller("bonGustMainController", function ($scope, $sce, Upload, $timeout, $window, $stateParams, $location, $state, $ngConfirm, languageConstants) {
  //console.log($stateParams);
  $scope.posicionarTop = function () {
    $window.scrollTo(0, 0);
    var amplada = $(window).width();

    if (amplada <= 768) {
      $(".navbar-collapse").removeClass("in");
    }

  };

  /*$scope.isIndexPage = function() {
  return $location.path() === '/';
}*/
  //======== PROPERTIES ===========//
  //Properties
  $("#msg_email_success").hide();
  this.newModObj = new newsObj(); //objecte notícia a modificar.
  this.newNews = new newsObj(); //Objecte per a la nova notícia.
  this.newProduct = new productObj(); //Objecte per a la nova notícia.
  this.productModObj = new productObj(); //Objecte producte a modificar.
  this.newProductObj = new productObj(); //Objecte per a la nova notícia.

  this.contact = {
    nom_cognoms: '',
    email: '',
    phone: '',
    description: ''
  };
  //Scope general variables
  //$scope.newMod = new newsObj();
  $scope.controlPage = window.location.href.split("/").slice(-1);
  $scope.acceptCookieName = "acccept-cookie"; //default name for the control cookie policy
  $scope.cookieAgree = false; //this $scope variable controls that cookie its accepted or not.
  $scope.state = $state;


  if (localStorage.getItem("language")) {
    if (localStorage.getItem("language") == 'cat') { //0 cat 1 cast
      $scope.constant = languageConstants.catala;
      $scope.currentLang = 0;
    } else {
      $scope.constant = languageConstants.castellano;
      $scope.currentLang = 1;
    }
  } else {
    $scope.currentLang = 0;
  }

  //Data.update(true);
  //console.log('index.js');
  //console.log($scope.state);      //NO puc saber quin estat té el ui-router culpa del parent abstract
  $scope.totalNewsArray = [];
  $scope.totalProductsArray = [];
  $scope.showNewsTemplate = false;
  $scope.showSliderTemplate = false;
  $scope.showContactTemplate = false;
  $scope.showProductsTemplate = false;
  $scope.contactEmail = "";
  $scope.activeMenu = '';
  $scope.imgSliderUrl = "images/slider/";
  $scope.imgNewUrl = "images/noticies/";
  $scope.imgProductUrl = 'images/productes/';
  $scope.sliderCheck = true;
  $scope.sliderRadioOption = 1;
  $scope.typePriceArray = [
    "kg",
    "ut"
  ];
  //$scope.dt;
  $scope.sortType = 'titol'; // set the default sort type
  $scope.sortReverse = false;  // set the default sort order
  $scope.searchNews = '';     // set the default search/filter term

  $scope.popup1 = {
    opened: false
  };

  $scope.popup2 = {
    opened: false
  };

  $('#idTourDateDetails').datepicker({
    dateFormat: 'dd-mm-yy',
    minDate: '+5d',
    changeMonth: true,
    changeYear: true,
    altField: "#idTourDateDetailsHidden",
    altFormat: "yy-mm-dd"
  });

  /* Objectes seleccionats per cambiar el slider */
  $scope.activeCheckboxSliderArray = [];
  $scope.activeCheckboxNewsArray = [];
  $scope.activeCheckboxShowNewsArray = [];

  $scope.dateOptions = {
    dateDisabled: this.disabled,
    formatYear: 'yy',
    maxDate: new Date(2020, 5, 22),
    minDate: new Date(),
    startingDay: 1
  };

  $scope.formats = ['dd-MM-yyyy', 'yyyy/MM/dd', 'dd.MM.yyyy', 'shortDate'];
  $scope.format = $scope.formats[1];
  $scope.altInputFormats = ['M!/d!/yyyy'];

  $scope.open1 = function () {
    $scope.popup1.opened = true;
  };

  $scope.open2 = function () {
    $scope.popup2.opened = true;
  };

  $scope.scrollToTopPage = function () {
    $window.scrollTo(0, 0);
  };

  $scope.redirectToNew = function (newId) {
    $window.open("#/noticia/" + newId, "_parent");

  };

  $scope.redirectToProduct = function (prodId) {
    $window.open("#/producte/" + prodId, "_parent");

  };

  $scope.changeLanguage = function (lang) {
    // Store in session
    localStorage.setItem("language", lang);
    $window.location.reload(); //recarguem la pàgina per cambiar l'idioma
  }

  $scope.constant = {};

  if (localStorage.getItem("language") === 'cat') {
    $scope.constant = languageConstants.catala;
  } else {
    $scope.constant = languageConstants.castellano;
  }

  this.logout = function () {
    var userObj = JSON.parse(sessionStorage.getItem("userConnected"));
    var jc = $ngConfirm({
      title: 'Tancar sessió',
      content: "El seu temps ha acabat, serà automàticament desconnectat en 10 segons.",
      theme: 'light',
      type: 'green',
      escapeKey: true,
      columnClass: 'col-md-5 col-md-offset-4',
      backgroundDismiss: false,
      animation: 'zoom',
      closeAnimation: 'scale',
      animationBounce: 1.5,
      typeAnimated: true,
      scope: $scope,
      autoClose: 'desconectar|10000',
      // useBootstrap: false,
      buttons: {
        desconectar: {
          text: 'Desconectar',
          btnClass: 'btn-green',
          keys: ['enter'],
          action: function ($scope, button) {
            $scope.bonGustMainCtrl.removeAllCookies();
            sessionStorage.removeItem("userConnected");
            location.reload();
            $ngConfirm("La desconexió s'ha realitzat correctament :)");

          }
        },
        tancar: {
          text: 'Cancel·lar',
          action: function ($scope, button) {

          }
        }
      }
    });


  };

  this.removeAllCookies = function () {
    var cookieNumber = 0;
    if ($.cookie($scope.generalCookieName)) {
      cookieNumber = $.cookie($scope.generalCookieName);
    }
    for (var i = 0; i < cookieNumber; i++) {
      $.removeCookie($scope.generalCookieName + i, { path: '/', expires: 1 });
    }
    $.removeCookie($scope.generalCookieName, { path: '/', expires: 1 });
  }

  this.sessionController = function () {

    if ($.cookie($scope.acceptCookieName, undefined, { path: '/' })) {
      $scope.cookieAgree = true;
    } else $scope.cookieAgree = false;

    if ($scope.cookiesNumber) $scope.cookieAgree = true;



    if (typeof (Storage)) {
      var userObj = JSON.parse(sessionStorage.getItem("userConnected"));

      if (userObj != undefined) {
        $scope.userName = userObj.username;
        $scope.userConnected = true;
        $scope.idUserConnected = userObj.id;
        $scope.userObj = userObj; //user connected object.
        $state.go('dashboard');
      } else {
        $state.go('login');
      }
    }
    else alert("This browser does not support session variables");
  };


  this.acceptCookies = function () {
    $.cookie($scope.acceptCookieName, "accept_cookies", { path: '/', expires: 7 });
    $scope.cookieAgree = true;

  }

  $scope.redirectToCategory = function (categoryId, category) {
    console.log(categoryId, ' categoria=> ' + category);
    $window.open("#/" + category + "/" + categoryId, "_parent");

    this.posicionarTop();
  };

  $scope.redirectToSubCategory = function (subCategoryId, category) {
    console.log($scope.constant.formatges);
    console.log(category);
    console.log(subCategoryId);
    $window.open("#/" + $scope.constant.formatges + "/" + category + "/" + subCategoryId, "_parent");

    this.posicionarTop();

  };

  this.sendEmail = function () {

    var outPutData = [];

    $.ajax({
      url: "php/control/control.php",
      type: "POST",
      data: "action=10130&emailData=" + JSON.stringify(this.contact),
      dataType: "json",
      async: false,
      success: function (response) {
        outPutData = response;
      },
      error: function (xhr, ajaxOptions, thrownError) {
        //alert("There has been an error while connecting to the server, try later");
        console.log(xhr.status + "\n" + thrownError);
      }
    });

    if (outPutData[0]) {

      $("#msg_email_success").fadeIn(3000);
      $("#msg_email_success").fadeOut(5000);
    } else {
      alert("Error");
    }
  };

  this.countProductsByCategory = function () {

    $scope.countProductsArray = [];
    for (var i = 0; i < $scope.categoriesArray.length; i++) {
      var countCategory = 0;
      for (var j = 0; j < $scope.totalProductsArray.length; j++) {
        if ($scope.categoriesArray[i].id == $scope.totalProductsArray[j].categoria) {
          countCategory++;
        }
      }
      $scope.countProductsArray.push(countCategory);
    }
  };


  //CONTROLLER METHODS

  // Disable weekend selection
  this.disabled = function (data) {
    var date = data.date,
      mode = data.mode;
    return mode === 'day' && (date.getDay() === 0 || date.getDay() === 6);
  };
  this.controlPage = function () {
    var htmlURL = window.location.href.split("/")[4];

    if (htmlURL != "index.html") $scope.controlPage = "../";
    else $scope.controlPage = "";


  };
  this.resetNewNews = function () {
    this.newNews = new newsObj();
    $("#vistaPrevia2").attr("src", "");
    $("#infoTamany").html("");
    $("#actiuNewCheckbox").attr('checked', false);

  };

  this.changeContactEmail = function () {
    //alert($scope.contactEmail);

  };


  /*************************
  Dashboard Noticies
  *************************/
  /* ============= Afegir noticia =============*/
  this.addNewNews = function () {

    var userObj = JSON.parse(sessionStorage.getItem("userConnected"));

    if ($("#img_new2")[0].files.length !== 0) {

      this.newNews.setId(0);

      if ($('#actiuNewCheckbox').prop('checked') === false) {
        this.newNews.setActiu(0);
      } else this.newNews.setActiu(1);

      this.newNews.setDataCreacio(new Date());
      var newImageNamesArray = [];
      newImageNamesArray.push(this.newNews.getTitol());
      var imagesNameArray = this.imagesManagement(newImageNamesArray, "newNews", "");

      this.newNews.setImgNoticia(imagesNameArray[0]);
      this.newNews.setImgSlider(imagesNameArray[0]);
      ////alert(imagesNameArray[0]);
      // 	//alert($("#img_slider2")[0].files[0]);
      this.newNews.setUsuari(userObj.id);

      this.newNews.setDataNoticia($("#data_noticia").val());
      this.newNews.setSeccio(parseInt(this.newNews.getSeccio().id));


      //alert(this.newNews.toString());
      var outPutData = [];

      this.newNews = angular.copy(this.newNews);

      $.ajax({
        url: "php/control/control.php",
        type: "POST",
        data: "action=10050&JSONData=" + JSON.stringify(this.newNews),
        dataType: "json",
        beforeSend: function () {

          //$("#loadDiv").css("display","block");
        },
        complete: function () {

          // $('#loadDiv').css("display","none");
        },
        async: false,
        success: function (response) {
          outPutData = response;
        },
        error: function (xhr, ajaxOptions, thrownError) {
          //alert("There has been an error while connecting to the server, try later");
          console.log(xhr.status + "\n" + thrownError);
        }
      });

      if (outPutData[0]) {
        this.new = new newsObj();
        this.new.construct(outPutData[1].id, outPutData[1].seccio.seccio, outPutData[1].titol, outPutData[1].titol, outPutData[1].subtitol, outPutData[1].descripcio, outPutData[1].descripcio, outPutData[1].img_slider, outPutData[1].img_noticia, outPutData[1].data_creacio, outPutData[1].data_noticia, outPutData[1].actiu, outPutData[1].usuari);
        $scope.totalNewsArray.push(this.new);

      }
    } else {
      //alert("Sel·leccionar una imatge es requerit");
    }
    this.getAllNews(1, $scope.currentLang);
    this.newNews = new newsObj();
    $("input[type='file']").val(null);
    $("#actiuNewCheckbox").attr('checked', false);
    $('#newNewsModal').modal('hide');
  };

  /* ============= Modificar noticia =============*/
  this.newModify = function () {
    var modNewImageNamesArray = [];
    var newNameImgArray = [];
    var userObj = JSON.parse(sessionStorage.getItem("userConnected"));

    this.newModObj.setDataNoticia($("#dataModNoticia").val());
    if ($('#actiuCheckbox').prop('checked') === false) {
      this.newModObj.setActiu(0);
    } else this.newModObj.setActiu(1);
    this.newModObj.setUsuari(userObj.id);
    this.newModObj.seccio.id = parseInt(this.newModObj.seccio.id);

    if ($("#imgModNew")[0].files.length !== 0) {

      newNameImgArray = [];
      modNewImageNamesArray = [];
      newNameImgArray.push(this.newModObj.getTitol());
      modNewImageNamesArray.push(this.newModObj.getImgNoticia());
      var imagesNameArray = this.imagesManagement(newNameImgArray, "modNew", modNewImageNamesArray);

      this.newModObj.setImgNoticia(imagesNameArray[0]);
      this.newModObj.setImgSlider(imagesNameArray[0]);
    }
    var outPutData = [];
    this.newModObj = angular.copy(this.newModObj);
    $.ajax({
      url: "php/control/control.php",
      type: "POST",
      data: "action=10051&JSONData=" + JSON.stringify(this.newModObj),
      dataType: "json",
      beforeSend: function () {

        //$("#loadDiv").css("display","block");
      },
      complete: function () {

        // $('#loadDiv').css("display","none");
      },
      async: false,
      success: function (response) {
        outPutData = response;
      },
      error: function (xhr, ajaxOptions, thrownError) {
        //alert("There has been an error while connecting to the server, try later");
        console.log(xhr.status + "\n" + thrownError);
      }
    });

    if (outPutData[0]) {
      this.new = new newsObj();
      this.new.construct(outPutData[1].id, outPutData[1].seccio, outPutData[1].titol, outPutData[1].titol, outPutData[1].subtitol, outPutData[1].descripcio, outPutData[1].descripcio, outPutData[1].img_slider, outPutData[1].img_noticia, outPutData[1].data_creacio, new Date(outPutData[1].data_noticia), outPutData[1].actiu, outPutData[1].usuari);
      $scope.totalNewsArray.push(this.new);

    }

    this.newModObj = new newsObj();
    $("input[type='file']").val(null);
    $("#actiuNewCheckbox").attr('checked', false);

    $('#newModModal').modal('hide');
    this.getAllNews(1, $scope.currentLang);

    //alert("no seleccionado");


    //alert(this.newModObj);
  };

  /* ============= Esborrar noticia =============*/
  this.deleteNew = function (newObj) {

    var jc = $ngConfirm({
      title: 'Confirmació',
      content: 'Realment esta segur de voler eliminar definitivament la notícia amb títol: <strong>' + newObj.titol + '</strong> ?',
      type: 'red',
      theme: 'light',
      animation: 'zoom',
      columnClass: 'col-md-6 col-md-offset-3',
      closeAnimation: 'scale',
      animationBounce: 1.5,
      typeAnimated: true,
      escapeKey: true,
      backgroundDismiss: false,
      scope: $scope,
      autoClose: 'tancar|8000',
      // useBootstrap: false,
      buttons: {
        eliminar: {
          text: 'Eliminar',
          btnClass: 'btn-red',
          keys: ['enter'],
          action: function ($scope, button) {
            var outPutData = [];
            var newImageNamesArray = [];
            newImageNamesArray.push(newObj.getImgNoticia());
            var imagesNameArray = $scope.bonGustMainCtrl.imagesManagement("", "deleteNew", newImageNamesArray);
            $.ajax({
              url: "php/control/control.php",
              type: "POST",
              data: "action=10030&newDeleteToId=" + JSON.stringify(newObj.id),
              dataType: "json",
              beforeSend: function () {

                //$("#loadDiv").css("display","block");
              },
              complete: function () {

                // $('#loadDiv').css("display","none");
              },
              async: false,
              success: function (response) {
                outPutData = response;
              },
              error: function (xhr, ajaxOptions, thrownError) {
                //alert("There has been an error while connecting to the server, try later");
                console.log(xhr.status + "\n" + thrownError);
              }
            });
            $scope.bonGustMainCtrl.getAllNews(1, $scope.currentLang);
            $ngConfirm("La notícia s'ha eliminat correctament");

          }
        },
        tancar: {
          text: 'Cancel·lar',
          action: function ($scope, button) {

          }
        }
      }
    });
  };

  /*************************
  End Dashboard Noticies
  *************************/

  /*************************
  Dashboard Productes
  *************************/
  /* ============= Afegir producte =============*/
  this.addNewProduct = function () {

    var userObj = JSON.parse(sessionStorage.getItem("userConnected"));

    if ($("#imgNewProduct")[0].files.length !== 0) {

      this.newProduct.setId(0);

      if ($('#actiuProductCheckbox').prop('checked') === false) {
        this.newProduct.setActiu(0);
      } else this.newProduct.setActiu(1);

      var newImageNamesArray = [];
      newImageNamesArray.push(this.newProduct.getCodi());

      var imagesNameArray = this.imagesManagement(newImageNamesArray, "newProduct", "");

      this.newProduct.setImatge(imagesNameArray[0]); // Imatge
      this.newProduct.setDataCreacio(new Date()); // Data creació
      this.newProduct.setUsuari(userObj.id); // Usuari

      var outPutData = [];

      this.newProduct = angular.copy(this.newProduct);
      console.log('newProduct ', this.newProduct);
      $.ajax({
        url: "php/control/control.php",
        type: "POST",
        data: "action=10055&JSONData=" + JSON.stringify(this.newProduct),
        dataType: "json",
        beforeSend: function () {
          //$("#loadDiv").css("display","block");
        },
        complete: function () {
          // $('#loadDiv').css("display","none");
        },
        async: false,
        success: function (response) {
          outPutData = response;
        },
        error: function (xhr, ajaxOptions, thrownError) {
          //alert("There has been an error while connecting to the server, try later");
          console.log(xhr.status + "\n" + thrownError);
        }
      });

      if (outPutData[0]) {
        this.product = new productObj();
        outPutData[1].actiu = (outPutData[1].actiu == 1) ? true : false;
        this.product.construct(outPutData[1].id, outPutData[1].codi, outPutData[1].categoria, outPutData[1].subcategoria, outPutData[1].nom, outPutData[1].info, outPutData[1].imatge,
          outPutData[1].descripcio, outPutData[1].preu, outPutData[1].tipus, outPutData[1].actiu, outPutData[1].data_creacio, outPutData[1].usuari);

        $scope.totalProductsArray.push(this.product);
        console.log('product ', this.product);
        this.getAllProducts($scope.currentLang);
      }

    } else {
      //alert("Sel·leccionar una imatge es requerit");
    }

    //
    this.newProduct = new productObj('', '', '', '', '', '', '', '', '', '', '', '', '');

    $("input[type='file']").val(null);
    $("#actiuNewCheckbox").attr('checked', false);
    $('#newProductModal').modal('hide');
  };

  /* ============= Modificar producte =============*/
  this.productModify = function () {

    var userObj = JSON.parse(sessionStorage.getItem("userConnected"));
    var modProductImageNamesArray = [];
    var newNameImgArray = [];

    this.productModObj.setDataCreacio(new Date());
    if ($('#actiuModProductCheckbox').prop('checked') === false) {
      this.productModObj.setActiu(0);
    } else this.productModObj.setActiu(1);
    this.productModObj.setUsuari(userObj.id);

    if ($("#imgModProduct")[0].files.length !== 0) {
      console.log("entra canvi foto");
      newNameImgArray = [];
      modNewImageNamesArray = [];
      newNameImgArray.push(this.productModObj.getCodi());
      modNewImageNamesArray.push(this.productModObj.getImatge());
      var imagesNameArray = this.imagesManagement(newNameImgArray, "modProduct", modNewImageNamesArray);

      this.productModObj.setImatge(imagesNameArray[0]);

    }
    var outPutData = [];
    //this.productModObj = angular.copy(this.productModObj);
    $.ajax({
      url: "php/control/control.php",
      type: "POST",
      data: "action=10052&JSONData=" + JSON.stringify(this.productModObj),
      dataType: "json",
      beforeSend: function () {

        //$("#loadDiv").css("display","block");
      },
      complete: function () {

        // $('#loadDiv').css("display","none");
      },
      async: false,
      success: function (response) {
        outPutData = response;
      },
      error: function (xhr, ajaxOptions, thrownError) {
        //alert("There has been an error while connecting to the server, try later");
        console.log(xhr.status + "\n" + thrownError);
      }
    });

    if (outPutData[0]) {
      this.product = new productObj();
      var nouActiu = (outPutData[1].actiu == 1) ? true : false;
      console.log(nouActiu);
      this.product.construct(outPutData[1].id, outPutData[1].codi, outPutData[1].categoria, outPutData[1].subcategoria, outPutData[1].nom, outPutData[1].info, outPutData[1].imatge, outPutData[1].descripcio, outPutData[1].preu, outPutData[1].tipus, nouActiu, outPutData[1].data_creacio.split("/").join("-"), outPutData[1].usuari);
      for (var i = 0; i < $scope.totalProductsArray; i++) {
        if ($scope.totalProductsArray[i].id == outPutData[1].id) {
          $scope.totalProductsArray[i] = this.product;
        }
      }
      //$scope.totalProductsArray.push(this.product);
      if ($('#actiuModProductCheckbox').prop('checked') === 0) {
        this.productModObj.setActiu(false);
      } else this.productModObj.setActiu(true);
    }

    this.productModObj = new productObj();
    $("input[type='file']").val(null);
    //$("#actiuNewCheckbox").attr('checked',false);

    $('#newUpdateProductModal').modal('hide');
    console.log("producte modificat");
    this.getAllProducts($scope.currentLang);
  };

  /* ============= Esborrar producte =============*/
  this.deleteProduct = function (productObj) {

    var jc = $ngConfirm({

      title: 'Confirmació',
      content: 'Realment esta segur de voler eliminar definitivament el producte: <strong>' + productObj.id + ' : ' + productObj.nom + ' </strong> ?',
      type: 'red',
      theme: 'light',
      animation: 'zoom',
      columnClass: 'col-md-6 col-md-offset-3',
      closeAnimation: 'scale',
      animationBounce: 1.5,
      typeAnimated: true,
      escapeKey: true,
      backgroundDismiss: false,
      scope: $scope,
      autoClose: 'tancar|8000',
      // useBootstrap: false,
      buttons: {
        eliminar: {
          text: 'Eliminar',
          btnClass: 'btn-red',
          keys: ['enter'],
          action: function ($scope, button) {
            var outPutData = [];
            var productImageNamesArray = [];
            productImageNamesArray.push(productObj.getImatge());
            var imagesNameArray = $scope.bonGustMainCtrl.imagesManagement("", "deleteProduct", productImageNamesArray);

            $.ajax({
              url: "php/control/control.php",
              type: "POST",
              data: "action=10031&productDeleteToId=" + JSON.stringify(productObj.id),
              dataType: "json",
              beforeSend: function () {
                //$("#loadDiv").css("display","block");
              },
              complete: function () {
                // $('#loadDiv').css("display","none");
              },
              async: false,
              success: function (response) {
                outPutData = response;
              },
              error: function (xhr, ajaxOptions, thrownError) {
                //alert("There has been an error while connecting to the server, try later");
                console.log(xhr.status + "\n" + thrownError);
              }
            });

            $scope.bonGustMainCtrl.getAllProducts($scope.currentLang);
            $ngConfirm("El producte s'ha eliminat correctament");
          }
        },

        tancar: {
          text: 'Cancel·lar',
          action: function ($scope, button) {
          }
        }
      }
    });
  };

  /*************************
  End Dashboard Productes
  *************************/

  this.imagesManagement = function (newNamesImgArray, typeItem, modImgArrayItem) {
    /*if ($scope.controlPage!="") var htmlURL = "../";
    else var htmlURL = "";*/
    /*if ($scope.controlPage!="") var htmlURL = "../";
    else var htmlURL = "";*/

    var imageFiles = new FormData();
    var imageNamesArray = [];
    var image;
    var serverFileNames = [];

    switch (typeItem) {
      case "newNews":
        //Upload user new modified image.
        for (i = 0; i < newNamesImgArray.length; i++) {
          imageNamesArray.push(newNamesImgArray[i]);
        }
        image = $("#img_new2")[0].files[0];

        imageFiles.append('images[]', image);

        serverFileNames = [];

        $.ajax({
          url: 'php/control/controlFiles.php?action=10000&newsNamesArray=' + JSON.stringify(imageNamesArray),
          type: 'POST',
          async: false,
          data: imageFiles,
          dataType: "json",
          //~ beforesend:
          //~ complete:
          processData: false,
          contentType: false,
          success: function (response) {
            serverFileNames = response;
          },
          error: function (xhr, ajaxOptions, thrownError) {
            //alert(xhr.status+"\n"+thrownError);
          }
        });
        break;
      case "newProduct":
        //Upload user new modified image.
        for (i = 0; i < newNamesImgArray.length; i++) {
          imageNamesArray.push(newNamesImgArray[i]);
        }



        image = $("#imgNewProduct")[0].files[0];

        imageFiles.append('images[]', image);

        serverFileNames = [];

        $.ajax({
          url: 'php/control/controlFiles.php?action=10040&productNamesArray=' + JSON.stringify(imageNamesArray),
          type: 'POST',
          async: false,
          data: imageFiles,
          dataType: "json",
          //~ beforesend:
          //~ complete:
          processData: false,
          contentType: false,
          success: function (response) {
            serverFileNames = response;
          },
          error: function (xhr, ajaxOptions, thrownError) {
            //alert(xhr.status+"\n"+thrownError);
          }
        });
        break;
      case "modNew":
        imgNameArray = new Array();
        for (i = 0; i < modImgArrayItem.length; i++) {
          imgNameArray.push(modImgArrayItem[i]);
        }

        $.ajax({
          url: 'php/control/controlFiles.php',
          type: 'POST',
          async: false,
          data: 'action=10010&JSONData=' + JSON.stringify(imgNameArray),
          dataType: "json",
          //~ beforesend:
          //~ complete:
          success: function (response) {

          },
          error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status + "\n" + thrownError);
          }
        });

        imageFiles = new FormData();
        imageNamesArray = [];
        image = null;
        for (i = 0; i < newNamesImgArray.length; i++) {
          imageNamesArray.push(newNamesImgArray[i]);
          image = $("#imgModNew")[0].files[0];

          imageFiles.append('images[]', image);

          serverFileNames = [];

          $.ajax({
            url: 'php/control/controlFiles.php?action=10000&newsNamesArray=' + JSON.stringify(imageNamesArray),
            type: 'POST',
            async: false,
            data: imageFiles,
            dataType: "json",
            //~ beforesend:
            //~ complete:
            processData: false,
            contentType: false,
            success: function (response) {
              serverFileNames = response;
            },
            error: function (xhr, ajaxOptions, thrownError) {
              alert(xhr.status + "\n" + thrownError);
            }
          });
        }
        break;
      case "modProduct":
        imgNameArray = new Array();
        for (i = 0; i < modImgArrayItem.length; i++) {
          imgNameArray.push(modImgArrayItem[i]);
        }
        console.log("imgNameArray", imgNameArray);
        $.ajax({
          url: 'php/control/controlFiles.php',
          type: 'POST',
          async: false,
          data: 'action=10050&JSONData=' + JSON.stringify(imgNameArray),
          dataType: "json",
          //~ beforesend:
          //~ complete:
          success: function (response) {

          },
          error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status + "\n" + thrownError);
          }
        });

        imageFiles = new FormData();
        imageNamesArray = [];
        image = null;
        for (i = 0; i < newNamesImgArray.length; i++) {
          imageNamesArray.push(newNamesImgArray[i]);
          image = $("#imgModProduct")[0].files[0];

          imageFiles.append('images[]', image);

          serverFileNames = [];

          $.ajax({
            url: 'php/control/controlFiles.php?action=10040&productNamesArray=' + JSON.stringify(imageNamesArray),
            type: 'POST',
            async: false,
            data: imageFiles,
            dataType: "json",
            //~ beforesend:
            //~ complete:
            processData: false,
            contentType: false,
            success: function (response) {
              serverFileNames = response;
            },
            error: function (xhr, ajaxOptions, thrownError) {
              alert(xhr.status + "\n" + thrownError);
            }
          });
        }
        break;
      case "deleteNew":
        //Delete news image.
        var imgNameArray = new Array();
        for (i = 0; i < modImgArrayItem.length; i++) {
          imgNameArray.push(modImgArrayItem[i]);
        }

        $.ajax({
          url: 'php/control/controlFiles.php',
          type: 'POST',
          async: false,
          data: 'action=10010&JSONData=' + JSON.stringify(imgNameArray),
          dataType: "json",
          //~ beforesend:
          //~ complete:
          success: function (response) {

          },
          error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status + "\n" + thrownError);
          }
        });
        break;
      case "deleteProduct":
        //Delete news image.
        var imgNameArray = new Array();
        for (i = 0; i < modImgArrayItem.length; i++) {
          imgNameArray.push(modImgArrayItem[i]);
        }

        $.ajax({
          url: 'php/control/controlFiles.php',
          type: 'POST',
          async: false,
          data: 'action=10050&JSONData=' + JSON.stringify(imgNameArray),
          dataType: "json",
          //~ beforesend:
          //~ complete:
          success: function (response) {

          },
          error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status + "\n" + thrownError);
          }
        });
        break;

      default:
        break;
    }
    return serverFileNames;
  };

  this.getAllSections = function () {

    var outPutData = [];

    $.ajax({
      url: "php/control/control.php",
      type: "POST",
      data: "action=10040",
      dataType: "json",
      beforeSend: function () {

        //$("#loadDiv").css("display","block");
      },
      complete: function () {

        // $('#loadDiv').css("display","none");
      },
      async: false,
      success: function (response) {
        outPutData = response;
      },
      error: function (xhr, ajaxOptions, thrownError) {
        //alert("There has been an error while connecting to the server, try later");
        console.log(xhr.status + "\n" + thrownError);
      }
    });

    if (outPutData[0]) {

      this.seccionsArray = [];

      for (var j = 0; j < outPutData[1].length; j++) {
        this.seccioObj = new seccioObj();
        this.seccioObj.construct(outPutData[1][j].id, outPutData[1][j].seccio);
        this.seccionsArray.push(this.seccioObj);
      }

    } else console.log("Error");

  };

  this.getAllSubCategories = function (language) {
    var outPutData = [];

    $.ajax({
      url: "php/control/control.php",
      type: "POST",
      data: "action=10081&language=" + language,
      dataType: "json",
      beforeSend: function () {

        //$("#loadDiv").css("display","block");
      },
      complete: function () {

        // $('#loadDiv').css("display","none");
      },
      async: false,
      success: function (response) {
        outPutData = response;
      },
      error: function (xhr, ajaxOptions, thrownError) {
        //alert("There has been an error while connecting to the server, try later");
        console.log(xhr.status + "\n" + thrownError);
      }
    });

    if (outPutData[0]) {

      $scope.subCategoriesArray = [];
      //$scope.subCategoriesArray.push('Cap');
      for (var j = 0; j < outPutData[1].length; j++) {
        this.subcategoryObj = new subcategoryObj();
        this.subcategoryObj.construct(outPutData[1][j].id, outPutData[1][j].ca_nom, outPutData[1][j].es_nom, outPutData[1][j].id_categoria);
        $scope.subCategoriesArray.push(this.subcategoryObj);
      }
      //console.log($scope.categoriesArray);
    } else console.log("Error");
  };

  this.getAllCategories = function (language) {

    var outPutData = [];

    $.ajax({
      url: "php/control/control.php",
      type: "POST",
      data: "action=10080&language=" + language,
      dataType: "json",
      beforeSend: function () {

        //$("#loadDiv").css("display","block");
      },
      complete: function () {

        // $('#loadDiv').css("display","none");
      },
      async: false,
      success: function (response) {
        outPutData = response;
      },
      error: function (xhr, ajaxOptions, thrownError) {
        //alert("There has been an error while connecting to the server, try later");
        console.log(xhr.status + "\n" + thrownError);
      }
    });
    if (outPutData[0]) {

      $scope.categoriesArray = [];

      for (var j = 0; j < outPutData[1].length; j++) {
        this.categoryObj = new categoryObj();
        this.categoryObj.construct(outPutData[1][j].id, outPutData[1][j].ca_nom, outPutData[1][j].es_nom);
        $scope.categoriesArray.push(this.categoryObj);
      }
      //console.log($scope.categoriesArray);
    } else console.log("Error");

  };

  this.getData = function () {
    $scope.currentLang = localStorage.getItem("language"); //recollim idioma de cache
    if ($scope.currentLang == 'cat') { //0 cat 1 cast
      $scope.currentLang = 0;
    } else {
      $scope.currentLang = 1;
    }
    this.getAllNewsBySection($scope.currentLang);
    this.getAllSections($scope.currentLang);
    this.getAllProducts($scope.currentLang);
    this.getAllCategories($scope.currentLang);
    this.getAllSubCategories($scope.currentLang);
    this.countProductsByCategory();
  };

  /*this.getAllProductsByCategory = function ()
  {
  var outPutData = [];

  $.ajax({
  url:"php/control/control.php",
  type: "POST",
  data: "action=10061&idCategoria=3",
  dataType: "json",
  beforeSend: function () {
  //$("#loadDiv").css("display","block");
},
complete: function () {
// $('#loadDiv').css("display","none");
},
async: false,
success: function (response) {
outPutData = response;
},
error: function (xhr, ajaxOptions, thrownError) {
//alert("There has been an error while connecting to the server, try later");
console.log(xhr.status+"\n"+thrownError);
}
});

if (outPutData[0])
{
$scope.productsByCategoryActive = [];

for (var j = 0; j < outPutData[1].length; j++) {
this.productObj = new productObj();
this.productObj.construct(outPutData[1][k].id, outPutData[1][k].codi, outPutData[1][k].categoria, outPutData[1][k].subcategoria, outPutData[1][k].nom, outPutData[1][k].info, outPutData[1][k].imatge, outPutData[1][k].descripcio, outPutData[1][k].preu,  outPutData[1][k].actiu,  outPutData[1][k].data_creacio,  outPutData[1][k].usuari);

$scope.productsByCategoryActive.push(this.productObj);
}

} else console.log("Error");
}*/

  this.getAllProducts = function (language) {
    var outPutData = [];

    $.ajax({
      url: "php/control/control.php",
      type: "POST",
      data: "action=10060&language=" + language,
      dataType: "json",
      beforeSend: function () {

        //$("#loadDiv").css("display","block");
      },
      complete: function () {

        // $('#loadDiv').css("display","none");
      },
      async: false,
      success: function (response) {
        outPutData = response;

      },
      error: function (xhr, ajaxOptions, thrownError) {
        //alert("There has been an error while connecting to the server, try later");
        console.log(xhr.status + "\n" + thrownError);
      }
    });

    if (outPutData[0]) {

      $scope.totalProductsArray = [];
      $scope.activeProductsArray = [];
      for (var k = 0; k < outPutData[1].length; k++) {
        this.productObj = new productObj();
        outPutData[1][k].actiu = (outPutData[1][k].actiu == 1) ? true : false;
        this.productObj.construct(outPutData[1][k].id, outPutData[1][k].codi, outPutData[1][k].categoria, outPutData[1][k].subcategoria, outPutData[1][k].nom, outPutData[1][k].info, outPutData[1][k].imatge, outPutData[1][k].descripcio, outPutData[1][k].preu, outPutData[1][k].tipus, outPutData[1][k].actiu, outPutData[1][k].data_creacio.split("/").join("-"), outPutData[1][k].usuari);
        ////alert(this.newsObj);
        $scope.totalProductsArray.push(this.productObj);
        //console.log(this.productObj);

        //$scope.activeCheckboxSliderArrayNews.push(false);
        /*if(outPutData[1][k].actiu==1) {
          $scope.activeProductsArray.push(true);
        } else {
          $scope.activeProductsArray.push(false);
        }*/

      }
      //onsole.log($scope.totalProductsArray);
      ////alert($scope.imgSliderArray);
      ////alert($scope.totalProductsArray[0]);
    } else console.log("Error");

  }

  this.changeActiveStatus = function (active, idProd, index) {

    if (active == 1) {
      active = 0;
      $scope.activeProductsArray[index] = false;
      $scope.totalProductsArray[index].actiu = 0;
    } else {
      active = 1;
      $scope.activeProductsArray[index] = true;
      $scope.totalProductsArray[index].actiu = 1;
    }

    var outPutData = [];

    $.ajax({
      url: "php/control/control.php",
      type: "POST",
      data: "action=10140&active=" + active + "&idProd=" + idProd,
      dataType: "json",

      async: false,
      success: function (response) {

        outPutData = response;

      },
      error: function (xhr, ajaxOptions, thrownError) {
        //alert("There has been an error while connecting to the server, try later");
        console.log(xhr.status + "\n" + thrownError);
      }
    });

    if (outPutData[0]) {

      //id, titol, descripcio, imatge, data_creacio, actiu, usuari
      /*$scope.companyObj = new companyObj();
      var desc = decodeURIComponent(outPutData[1].descripcio);
      var desc = decodeURIComponent(outPutData[1].descripcio);
      $scope.companyObj.construct(outPutData[1].id, outPutData[1].titol, outPutData[1].titol, desc, desc, outPutData[1].imatge, outPutData[1].data_creacio, outPutData[1].actiu, outPutData[1].usuari);
      */
    } else console.log("Error");
  }

  this.getAllNews = function (location, language) {

    console.log(language);
    var outPutData = [];

    $.ajax({
      url: "php/control/control.php",
      type: "POST",
      data: "action=10010&location=" + location + "&language=" + language,
      dataType: "json",
      beforeSend: function () {

        //$("#loadDiv").css("display","block");
      },
      complete: function () {

        // $('#loadDiv').css("display","none");
      },
      async: false,
      success: function (response) {
        outPutData = response;
      },
      error: function (xhr, ajaxOptions, thrownError) {
        //alert("There has been an error while connecting to the server, try later");
        console.log(xhr.status + "\n" + thrownError);
      }
    });

    if (outPutData[0]) {

      $scope.activeCheckboxSliderArrayNews = [];
      $scope.totalNewsArray = [];
      for (var j = 0; j < outPutData[1].length; j++) {
        this.newsObj = new newsObj();
        //outPutData[1][j].data_noticia = outPutData[1][j].data_noticia.replace("/","-");
        outPutData[1][j].actiu = (outPutData[1][j].actiu == 1) ? true : false;
        this.newsObj.construct(outPutData[1][j].id, outPutData[1][j].seccio, outPutData[1][j].titol, outPutData[1][j].subtitol, outPutData[1][j].descripcio, outPutData[1][j].noticia, outPutData[1][j].img_slider, outPutData[1][j].img_noticia, new Date(outPutData[1][j].data_creacio), new Date(outPutData[1][j].data_noticia), outPutData[1][j].actiu, outPutData[1][j].usuari);
        $scope.totalNewsArray.push(this.newsObj);
        $scope.activeCheckboxSliderArrayNews.push(false);

      }
      $scope.page = 1;
      $scope.displayItems = $scope.totalNewsArray.slice(0, 4);

      $scope.pageChanged = function () {
        var startPos = ($scope.page - 1) * 4;
        $scope.displayItems = $scope.totalNewsArray.slice(startPos, startPos + 4);

      };
      //console.log(  $scope.totalNewsArray);
    } else console.log("Error");
  }

  //START Paginador notícies ========================================================================



  //console.log($scope.displayItems);


  // END Paginador notícies ========================================================================

  this.changeTemplate = function (temp) {

    switch (temp) {
      case 'news':
        $scope.showNewsTemplate = true;
        $scope.showCategoriesTemplate = false;
        $scope.showProductsTemplate = false;
        $scope.showContactTemplate = false;
        this.getAllNews(1, $scope.currentLang);
        break;

      case 'categories':
        $scope.showNewsTemplate = false;
        $scope.showCategoriesTemplate = true;
        $scope.showProductsTemplate = false;
        $scope.showContactTemplate = false;
        break;

      case 'products':
        $scope.showNewsTemplate = false;
        $scope.showCategoriesTemplate = false;
        $scope.showProductsTemplate = true;
        $scope.showContactTemplate = false;
        //Agafem tots els productes de la base de dades.
        this.getAllProducts($scope.currentLang);
        break;

      case 'contact':
        $scope.showNewsTemplate = false;
        $scope.showCategoriesTemplate = false;
        $scope.showProductsTemplate = false;
        $scope.showContactTemplate = true;
        break;

      default:
        console.log("Error in switch case - changeTemplate mothod");
        break;
    }
  }

  this.getAllNewsBySection = function (language) {

    var outPutData = [];
    var sliderSection = 1;
    var newsIndexSection = 2;

    //Crida per recollir les tres noticies del slider
    $.ajax({
      url: "php/control/control.php",
      type: "POST",
      data: "action=10090&seccio=" + sliderSection + "&language=" + language,
      dataType: "json",
      beforeSend: function () {

        //$("#loadDiv").css("display","block");
      },
      complete: function () {

        // $('#loadDiv').css("display","none");
      },
      async: false,
      success: function (response) {
        outPutData = response;
      },
      error: function (xhr, ajaxOptions, thrownError) {
        //alert("There has been an error while connecting to the server, try later");
        console.log(xhr.status + "\n" + thrownError);
      }
    });

    if (outPutData[0]) {

      $scope.imgSliderArray = [];

      //$scope.activeCheckboxSliderArrayNews = [];

      for (var j = 0; j < outPutData[1].length; j++) {
        this.newsObj = new newsObj();

        this.newsObj.construct(outPutData[1][j].id, outPutData[1][j].seccio, outPutData[1][j].titol, outPutData[1][j].subtitol, outPutData[1][j].descripcio, outPutData[1][j].noticia, outPutData[1][j].img_slider, outPutData[1][j].img_noticia, outPutData[1][j].data_creacio.split("/").join("-"), outPutData[1][j].data_noticia.split("/").join("-"), outPutData[1][j].actiu, outPutData[1][j].usuari);
        ////alert(this.newsObj);


        //$scope.activeCheckboxSliderArrayNews.push(false);
        if ((outPutData[1][j].seccio.id == 1) && (outPutData[1][j].actiu == 1) && ($scope.imgSliderArray.length < 3)) {

          $scope.imgSliderArray.push(outPutData[1][j]);

          //$scope.activeCheckboxSliderArray.push(outPutData[1][j]);
        }
      }

    } else console.log("Error");

    //Crida per recollir les tres noticies del index (cercles)
    //var outPutData = [];

    $.ajax({
      url: "php/control/control.php",
      type: "POST",
      data: "action=10090&seccio=" + newsIndexSection + "&language=" + language,
      dataType: "json",
      beforeSend: function () {

        //$("#loadDiv").css("display","block");
      },
      complete: function () {

        // $('#loadDiv').css("display","none");
      },
      async: false,
      success: function (response) {
        outPutData = response;
      },
      error: function (xhr, ajaxOptions, thrownError) {
        //alert("There has been an error while connecting to the server, try later");
        console.log(xhr.status + "\n" + thrownError);
      }
    });

    if (outPutData[0]) {
      $scope.imgNewsArray = [];

      for (var k = 0; k < outPutData[1].length; k++) {
        this.newsObj = new newsObj();
        this.newsObj.construct(outPutData[1][k].id, outPutData[1][k].seccio.seccio, outPutData[1][k].titol, outPutData[1][k].subtitol, outPutData[1][k].descripcio, outPutData[1][k].noticia, outPutData[1][k].img_slider, outPutData[1][k].img_noticia, outPutData[1][k].data_creacio.split("/").join("-"), outPutData[1][k].data_noticia.split("/").join("-"), outPutData[1][k].actiu, outPutData[1][k].usuari);
        ////alert(this.newsObj);

        if ((outPutData[1][k].seccio.id == 2) && (outPutData[1][k].actiu == 1) && ($scope.imgNewsArray.length < 3)) {
          $scope.imgNewsArray.push(outPutData[1][k]);
          //$scope.activeCheckboxNewsArray.push(outPutData[1][j]);
        }

      }
      console.log($scope.imgNewsArray);

    } else console.log("Error");

  };


  this.checkCheckBoxS = function (obj) {
    var auxActiveCheckboxSliderArray = [];

    for (var i = 0; i < $scope.activeCheckboxSliderArray.length; i++) {
      if (obj.id != $scope.activeCheckboxSliderArray[i].id) {
        auxActiveCheckboxSliderArray.push($scope.activeCheckboxSliderArray[i]);
      }
    }

    $scope.activeCheckboxSliderArray = auxActiveCheckboxSliderArray;
  };

  this.checkCheckBoxN = function (obj) {
    var auxActiveCheckboxNewsArray = [];

    for (var i = 0; i < $scope.activeCheckboxNewsArray.length; i++) {
      if (obj.id != $scope.activeCheckboxNewsArray[i].id) {
        auxActiveCheckboxNewsArray.push($scope.activeCheckboxNewsArray[i]);
      } else {
        $scope.activeCheckboxNewsArray.push(obj);
      }
    }

    $scope.activeCheckboxNewsArray = auxActiveCheckboxNewsArray;
  };

  this.changeSliderAndNewsImages = function () {

    //alert($scope.activeCheckboxNewsArray.length+" / "+$scope.activeCheckboxSliderArray.length);

    if ($scope.activeCheckboxNewsArray.length < 4 && $scope.activeCheckboxSliderArray.length < 4) {
      //alert($scope.activeCheckboxNewsArray.length+" / "+$scope.activeCheckboxSliderArray.length);
      for (var j = 0; j < $scope.activeCheckboxNewsArray.length; j++) {
        for (var i = 0; i < $scope.activeCheckboxSliderArray.length; i++) {
          if ($scope.activeCheckboxNewsArray[j].id == $scope.activeCheckboxSliderArray[i].id) {
            //alert($scope.activeCheckboxNewsArray.length+" / "+$scope.activeCheckboxSliderArray.length);
            //alert("Iguals"+$scope.activeCheckboxNewsArray[j].id+" ,"+$scope.activeCheckboxSliderArray[i].id);
          }
        }
      }
      //this.changeInfoNewsImages(); //executem funcio canvi de imatges en noticies.
      //this.changeSliderImages(); //executem funcio canvi de imatges slider.
    }

    /*else if ($scope.activeCheckboxSliderArray.length==3) {
    //this.changeSliderImages(); //executem funcio canvi de imatges slider.
    //alert("1");
  } else if ($scope.activeCheckboxNewsArray.length==3) {
  //this.changeInfoNewsImages(); //executem funcio canvi de imatges en noticies.
  //alert("2");
  } */
  };

  //alert($scope.activeCheckboxNewsArray.length+" / "+$scope.activeCheckboxSliderArray.length);


  this.changeInfoNewsImages = function () {
    /*if ($scope.activeCheckboxSliderArray.length != 0)  {
  
  } else {
  
  }*/
    if ($scope.controlPage !== "") var htmlURL = "../";
    else var htmlURL = "";
    for (var i = 0; i < $scope.totalNewsArray.length; i++) {

      if ($scope.totalNewsArray[i].seccio == 2) {
        $scope.totalNewsArray[i].seccio = 3;
        ////alert($scope.totalNewsArray[i]);
      }
    }

    for (var j = 0; j < $scope.activeCheckboxNewsArray.length; j++) {

      $scope.activeCheckboxNewsArray[j].seccio = 2;
    }

    $.ajax({
      url: htmlURL + "php/control/control.php",
      type: "POST",
      data: "action=10020&NewsArray=" + JSON.stringify($scope.totalNewsArray) + "&NewsSelected=" + JSON.stringify($scope.activeCheckboxNewsArray),
      dataType: "json",
      beforeSend: function () {

        //$("#loadDiv").css("display","block");
      },
      complete: function () {

        // $('#loadDiv').css("display","none");
      },
      async: false,
      success: function (response) {
        outPutData = response;
      },
      error: function (xhr, ajaxOptions, thrownError) {
        //alert("There has been an error while connecting to the server, try later");
        console.log(xhr.status + "\n" + thrownError);
      }
    });

  };

});

//This directive it's necesary to use the calendar plugin in the templates.
bonGustApp.directive('calendar', function () {
  return {
    require: 'ngModel',
    link: function (scope, el, attr, ngModel) {
      $(el).datepicker({
        dateFormat: 'yy-mm-dd',
        onSelect: function (dateText) {
          scope.$apply(function () {
            ngModel.$setViewValue(dateText);
          });
        }
      });
    }
  };
});


bonGustApp.directive("carouselTemplate", function () {
  return {
    restrict: 'E',
    templateUrl: "templates/carousel-template.html",
    controller: function () {

    },
    controllerAs: 'carouselTemplate'
  };
});

//This template shows all data of the header of the website.
bonGustApp.directive("indexTemplate", function () {
  return {
    restrict: 'E',
    templateUrl: "templates/index-template.html",
    controller: function () {

    },
    controllerAs: 'indexTemplate'
  };
});

//This template shows all data of the header of the website.
bonGustApp.directive("footerForm", function () {
  return {
    restrict: 'E',
    templateUrl: "templates/footer-form.php",
    controller: function () {

    },
    controllerAs: 'footerForm'
  };
});

//This template shows all data of the header of the website.
bonGustApp.directive("headerForm", function () {
  return {
    restrict: 'E',
    templateUrl: "header-form.php",
    controller: function () {

    },
    controllerAs: 'headerForm'
  };
});

bonGustApp.directive('onErrorSrc', function () {
  return {
    link: function (scope, element, attrs) {
      element.bind('error', function () {
        if (attrs.src != attrs.onErrorSrc) {
          attrs.$set('src', attrs.onErrorSrc);
        }
      });
    }
  }
});
