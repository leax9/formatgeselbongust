
//Controllers of session
bonGustApp.controller("bonGustSessionController", function($scope, $sce, Upload, $timeout, $window, $stateParams, $location, $state){

	//======== PROPERTIES ===========//
	//Properties
	this.user = new userObj();
	$scope.state = $state.current.name;
	//alert($scope.state+'hola'); //arreglar error rootScope inprogres digest
	//Data.update(true);

	//Data.currentLoginState = false;

	//Scope general variables
	$scope.controlPage;



	//CONTROLLER METHODS
	this.controlPage = function () {


		var htmlURL = window.location.href;

		if (htmlURL!="index.html") {
			$scope.controlPage = "../";

		} else {
			$scope.controlPage = "";

		}

	}

	this.logIn = function ()
	{

			var outPutData = new Array();
			//control error messages TODO...

				this.user = angular.copy(this.user);


				//Check if credentials are correct in database
				$.ajax({
					  url: 'php/control/control.php',
					  type: 'POST',
					  async: false,
					  data: 'action=10000&JSONData='+JSON.stringify(this.user),
					  dataType: "json",
					  success: function (response) {
						  outPutData = response;


					  },
					  error: function (xhr, ajaxOptions, thrownError) {
							alert(xhr.status+"\n"+thrownError);
					  }
				});

				$scope.loginError = false;
				if (outPutData[0] == false) {
		            msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "Login error");

		            $('#completeQuery').removeClass("completeShowDiv").addClass("completeHideDiv");
                } else {
                	 $("#completeQuery").removeClass("completeHideDiv").addClass("completeShowDiv");
                    msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "success", "glyphicon-ok", "Login OK");
                }

				if(outPutData[0])
				{
					if(typeof(Storage))
					{
						 //id,username, password, name, surname1, surname2, type_user, email, address, bank_account, phone, image
						this.user = new userObj();
						this.user.construct(outPutData[1][0].id, outPutData[1][0].usuari, outPutData[1][0].passwd, outPutData[1][0].passwd_confirm, outPutData[1][0].nom, outPutData[1][0].cognoms, outPutData[1][0].email, outPutData[1][0].rol);

						sessionStorage.setItem("userConnected",JSON.stringify(this.user));

						$scope.userName = this.user.getUsuari();
						$scope.userConnected = true;
						$scope.userObj = this.user; //user connected object.

						setTimeout(function () {
							//window.location.replace("http://localhost/ElBonGust30/html/dashboard.html");
							$state.go('dashboard');
						}, 1000);
					}
					else alert("This browser does not support session variables");

				}
				else
				{
					console.log("Error connection or invalid user");
				}

		}

		this.logOut = function ()
		{

			this.removeAllCookies();
			sessionStorage.removeItem("userConnected");
			location.reload();

		}

		this.removeAllCookies = function(){
		var cookieNumber = 0;
			if($.cookie($scope.generalCookieName))
			{
				cookieNumber = $.cookie($scope.generalCookieName);
			}
			for (var i=0; i<cookieNumber;i++) {
				$.removeCookie($scope.generalCookieName+i, { path: '/', expires: 1 });
			}
			$.removeCookie($scope.generalCookieName, { path: '/', expires: 1 });
		}

		this.checkUserLoginConnected = function ()
		{

			//$scope.currentAdminState = false;
			//console.log(sessionStorage.getItem("userConnected"));
			var userObj = JSON.parse(sessionStorage.getItem("userConnected"));
			if(	userObj != undefined)
			{
				//window.location.replace("http://localhost/ElBonGust30/html/dashboard.html");
				$state.go('dashboard');



			} /*else {
				$scope.state.go('/');
			}*/
		}

		this.changeTemplate = function (temp)
		{
			switch (temp) {
				case 'news':
					$scope.showNewsTemplate = true;
					$scope.showCategoriesTemplate = false;
					$scope.showProductsTemplate = false;
					$scope.showContactTemplate = false;
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

		this.sessionController = function ()
		{


			if($.cookie($scope.acceptCookieName, undefined, { path: '/' }))
					{
						$scope.cookieAgree = true;
					} else $scope.cookieAgree = false;

					if ($scope.cookiesNumber) $scope.cookieAgree=true;



			if(typeof(Storage))
			{
				var userObj = JSON.parse(sessionStorage.getItem("userConnected"));

				if(	userObj != undefined)
				{

					$scope.userName = userObj.username;
					$scope.userConnected = true;
					$scope.idUserConnected=userObj.id;
					/*this.getSubscriptionNotifications($scope.idUserConnected);
					this.getNotifications($scope.idUserConnected);
					this.getCartCookies();
					this.getAllEvents($scope.idUserConnected);*/
					//$scope.userType=userObj.type_user;
					$scope.userObj = userObj; //user connected object.

				} else {

					//window.location.replace("http://localhost/ElBonGust30");
					$state.go('/');

				}

			}
		else alert("This browser does not support session variables");
		}
});

//This template shows cookies policy in the bottom of main page if the user not agree the message.
bonGustApp.directive("newsManagementTemplate", function (){
	return {
	  restrict: 'E',
	  templateUrl:"templates/news-management-template.html",
	  controller:function(){

	  },
	  controllerAs: 'newsManagementTemplate'
	};
});


//This template shows cookies policy in the bottom of main page if the user not agree the message.
bonGustApp.directive("categoriesManagementTemplate", function (){
	return {
	  restrict: 'E',
	  templateUrl:"templates/categories-management-template.html",
	  controller:function(){

	  },
	  controllerAs: 'categoriesManagementTemplate'
	};
});

//This template shows cookies policy in the bottom of main page if the user not agree the message.
bonGustApp.directive("productsManagementTemplate", function (){
	return {
	  restrict: 'E',
	  templateUrl:"templates/products-management-template.html",
	  controller:function(){

	  },
	  controllerAs: 'productsManagementTemplate'
	};
});


//This template shows cookies policy in the bottom of main page if the user not agree the message.
bonGustApp.directive("contactManagementTemplate", function (){
	return {
	  restrict: 'E',
	  templateUrl:"templates/contact-management-template.html",
	  controller:function(){

	  },
	  controllerAs: 'contactManagementTemplate'
	};
});
